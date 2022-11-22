<x-form
    class="auth-confirm-password"
    legend="Confirm by typing your password"
    action-route="password.confirm"
    method="POST">

    <x-form.errors />

    <x-form.input
        required
        label="Type your new password"
        type="password"
        name="password" />

    <x-form.submit
        heroicon="shield-check"
        label="Register" />

</x-form>
