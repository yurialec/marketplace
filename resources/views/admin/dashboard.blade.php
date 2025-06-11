<h1>#Admin Dashboard</h1>

<p>{{ Auth::user()->name }}</p>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Sair</button>
</form>