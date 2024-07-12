<div class="container">
    @foreach ($users as $user)
        {{ $user->agent }}
    @endforeach
</div>

{{ $users->links() }}
