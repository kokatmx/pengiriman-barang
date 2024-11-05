<h1> ini adalah halaman dashboard kurir</h1>
<form action="{{ route('logout') }}" method="post" class="mt-auto">
    @csrf
    <button type="submit" class="btn btn-error">Logout</button>
</form>
