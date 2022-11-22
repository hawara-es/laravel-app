<x-form
    class="auth-reset-password"
    legend="Set a new password"
    action-route="password.update"
    method="POST">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.input
        type="hidden"
        name="token"
        value="{{ request()->route('token') }}" />

    <x-form.input
        required autofocus autocomplete="email"
        label="What's your email address?"
        type="email"
        name="email"
        value="{{ request()->get('email') ?? old('email') }}" />

    <x-form.input
        required
        label="Type your new password"
        type="password"
        name="password" />

    @if (config('fortify.use_password_confirm'))
        <x-form.input
            required
            label="Confirm your password"
            type="password"
            name="password_confirmation" />
    @endif

    <x-form.submit
        heroicon="shield-check"
        label="Set my password" />

</x-form>
