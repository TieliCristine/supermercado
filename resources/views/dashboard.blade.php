<x-app-layout>
    <div class="p-20">
        <h1>dashboard.blade.php</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</x-app-layout>
