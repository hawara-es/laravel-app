<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;

trait HasBags
{
    /**
     * Associative array of component attribute bags.
     */
    private $bags = [];

    /**
     * When asked about a known bag,
     * it will be returned,
     * when asked about an unknown bag,
     * an empty component attribute bag
     * will be returned instead.
     *
     * @param  string  $name
     */
    public function getBag(string $name)
    {
        if (array_key_exists($name, $this->bags)) {
            return $this->bags[$name];
        }

        return new ComponentAttributeBag();
    }

    /**
     * Return a bag as it would be returned by
     * getBag, but converted to an array.
     *
     * @param  string  $name
     */
    public function getBagAsArray(string $name)
    {
        $bag = $this->getBag($name);
        $array = [];

        foreach ($bag as $key => $value) {
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * Return the id of a bag.
     *
     * @param  string  $name
     */
    public function getBagId(string $name)
    {
        return $this->getBag($name)->get('id');
    }

    /**
     * Return the ids of a set of bags.
     *
     * @param  array|null  $names
     */
    public function getBagIds(array $names = null)
    {
        if (is_null($names)) {
            $names = array_keys($this->bags);
        }

        $ids = [];
        foreach ($names as $name) {
            $id = $this->getBagId($name);

            if ($id) {
                $ids[$name] = $id;
            }
        }

        return $ids;
    }

    /**
     * Set each of the given bags,
     * ignoring things that aren't
     * either a component attribute bag,
     * or an array.
     *
     * @param  array  $bags
     */
    public function setBags(array $bags)
    {
        foreach($bags as $name => &$bag) {
            if (is_array($bag)) {
                $bag = new ComponentAttributeBag($bag);
            }

            if (! $bag instanceof ComponentAttributeBag) {
                continue;
            }

            $this->bags[$name] = $bag;
        }
    }

    /**
     * Set automatic ids for a list of bags.
     *
     * @param array array $bagNames
     */
    public function setAutoIds(array $names)
    {
        foreach ($names as $name) {
            if (! isset($this->bags[$name]['id'])) {
                $id = ['id' => "${name}_".Str::lower(Str::random(3))];

                if (isset($this->bags[$name])) {
                    $this->bags[$name] = $this->bags[$name]->merge($id);
                } else {
                    $this->bags[$name] = new ComponentAttributeBag($id);
                }
            }
        }
    }
}
