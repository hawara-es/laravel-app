<x-form
    class="auth-verify-email"
    legend="Verify your Email Address"
    method="POST"
    action-route="verification.send">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.submit
        heroicon="envelope"
        label="Send me a new link" />

</x-form>