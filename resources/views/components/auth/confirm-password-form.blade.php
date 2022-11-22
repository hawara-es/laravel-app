<x-form
    class="auth-confirm-password"
    legend="Confirm by typing your password"
    action-route="password.confirm"
    method="POST">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.input
        required
        :id="$getBagId('password')"
        label="Type your new password"
        type="password"
        name="password" />

    <x-form.submit
        heroicon="shield-check"
        label="Register" />

</x-form>
