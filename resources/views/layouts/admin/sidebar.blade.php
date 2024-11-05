<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
    <!-- Sidebar content here -->
    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('admin.orders') }}">Order</a></li>
    <form action="{{ route('logout') }}" method="post" class="mt-auto">
        @csrf
        <button type="submit" class="btn btn-error">Logout</button>
    </form>
    </ul>
</div>
