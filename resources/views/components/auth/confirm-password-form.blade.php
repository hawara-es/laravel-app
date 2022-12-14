@if( $passwordIsConfirmed() )
<section class="auth-confirm-password">
    <p>
        Your password has been confirmed recently. You can now administer
        your account from your <a href="{{ route('user-profile') }}">profile</a> page.
    </p>
</section>
@else
<x-form
    class="auth-confirm-password"
    legend="Confirm by typing your password"
    action-route="password.confirm"
    method="post">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.input
        required
        :id="$getBagId('password')"
        label="Type your new password"
        type="password"
        name="password" />

    <x-form.submit
        heroicon="shield-check"
        label="Confirm" />

</x-form>
@endif