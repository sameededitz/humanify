<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('admin_assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('admin_assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{ route('admin-home') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title">Application</li>
            {{-- <li>
                <a href="{{ route('all-keys') }}">
                    <iconify-icon icon="bitcoin-icons:two-keys-outline" class="menu-icon"></iconify-icon>
                    <span>Api Keys</span>
                </a>
            </li> --}}

            {{-- <li>
                <a href="{{ route('all-plans') }}">
                    <iconify-icon icon="ph:package-light" class="menu-icon"></iconify-icon>
                    <span>Plans</span>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('all-users') }}">
                    <iconify-icon icon="ri:user-line" class="menu-icon"></iconify-icon>
                    <span>Manage Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all-admins') }}">
                    <iconify-icon icon="ri:admin-line" class="menu-icon"></iconify-icon>
                    <span>Manage Admins</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact-submissions') }}">
                    <iconify-icon icon="hugeicons:contact" class="menu-icon"></iconify-icon>
                    <span>Contact Submissions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all-options') }}">
                    <iconify-icon icon="solar:settings-broken" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
