@props(['type', 'message'])

<div class="position-fixed bottom-0 start-50 translate-middle-x mb-3">
    <div class="alert alert-{{ $type }} d-inline-block" role="alert">
        {{ $message }}
    </div>
</div>
