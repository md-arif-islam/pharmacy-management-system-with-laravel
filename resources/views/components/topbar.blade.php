<section class="topber">
    <div class="topber__title">
        <span class="topber__title--text">
            Pharmacy Management System
        </span>
    </div>

    <div class="topber__profile">
        <img src="{{ empty(auth()->user()->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . auth()->user()->avatar) }}"
            height="25" width="25" class="rounded-circle" alt="profile">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    Log Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</section>
