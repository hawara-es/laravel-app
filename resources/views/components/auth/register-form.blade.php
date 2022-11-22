<x-form
    class="auth-register"
    legend="Register a new account"
    action-route="register"
    method="POST">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.input
        required autofocus autocomplete="name"
        :id="$getBagId('name')"
        label="What's your name?"
        type="text"
        name="name"
        value="{{ old('name') }}" />

    <x-form.input
        required autocomplete="email"
        :id="$getBagId('email')"
        label="What's your email address?"
        type="email"
        name="email"
        value="{{ old('email') }}" />

    <x-form.input
        required
        :id="$getBagId('password')"
        label="Type your new password"
        type="password"
        name="password" />

    @if (config('fortify.use_password_confirm'))
        <x-form.input
            required
            :id="$getBagId('password_confirmation')"
            label="Confirm your password"
            type="password"
            name="password_confirmation" />
    @endif

    <x-form.submit
        heroicon="user-plus"
        label="Register" />

</x-form>
