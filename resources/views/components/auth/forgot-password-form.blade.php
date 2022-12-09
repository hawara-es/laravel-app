<x-form
    class="auth-forgot-password"
    legend="Forgot your password?"
    action-route="password.email"
    method="post">

    {{ session('status') }}

    <x-form.input
        required autofocus
        label="What's your email address?"
        :id="$getBagId('email')"
        type="email"
        name="email"
        value="{{ old('email') }}" />

    <x-form.submit
        heroicon="envelope"
        label="Send me a reset link" />

</x-form>

