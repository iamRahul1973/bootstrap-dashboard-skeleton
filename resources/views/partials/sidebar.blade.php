<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#speedometer" />
        </svg>
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <x-bdskeleton-sidebar-item route="admin.home" prefix="admin" icon="speedometer2" label="Home" />
        <x-bdskeleton-sidebar-item route="admin.home" prefix="admin/user" icon="people" label="Users" />

        {{-- @php
            $membershipSubmenus = [
                'admin.membership-plan.index' => 'View All',
                'admin.membership-plan.create' => 'Add New'
            ]
        @endphp
        <x-bdskeleton-sidebar-item route="admin.membership-plan.index" prefix="admin/membership-plan" icon="cash" 
            label="Membership Plans" :subMenus="$membershipSubmenus" /> --}}
        
        {{-- @php
            $clubSubMenus = [
                'admin.club.index' => 'View All',
                'admin.club.manage' => 'Add New',
                'admin.club.designations' => 'Designations'
            ];
        @endphp            
        <x-bdskeleton-sidebar-item route="admin.club.index" prefix="admin/club" icon="mic-fill" label="Club" 
            :subMenus="$clubSubMenus" />

        @php
            $awardSubMenus = [
                'admin.award.index' => 'View All',
                'admin.award.create' => 'Add New',
            ];
        @endphp
        <x-bdskeleton-sidebar-item route="admin.award.index" prefix="admin/award" icon="award" label="Awards" 
            :subMenus="$awardSubMenus" /> --}}
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('images/avatar.png') }}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" target="_blank" href="{{ route('profile.show') }}">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>
