<x-form
    class="auth-login"
    legend="Login by typing your credentials"
    action-route="login"
    method="POST">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.input
        required autofocus
        :id="$getBagId('email')"
        label="What's your email address?"
        type="email"
        name="email"
        value="{{ old('email') }}" />

    <x-form.input
        required
        :id="$getBagId('password')"
        label="Enter your password"
        type="password"
        name="password" />

    <x-form.input
        type="checkbox"
        :id="$getBagId('remember')"
        name="remember"
        label="Remember me" />

    <x-form.submit
        heroicon="arrow-right-on-rectangle"
        label="Login" />

</x-form>
