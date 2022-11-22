<x-form
    class="auth-forgot-password"
    legend="Forgot your password?"
    action-route="password.email"
    method="post">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.input
        required autofocus
        label="What's your email address?"
        type="email"
        name="email"
        value="{{ old('email') }}" />

    <x-form.submit
        heroicon="envelope"
        label="Send me a reset link" />

</x-form>

