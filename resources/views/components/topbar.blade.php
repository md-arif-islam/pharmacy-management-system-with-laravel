<section class="topber">
    <div class="topber__title">
        <span class="topber__title--text">
            DashBoard
        </span>
    </div>

    <div class="topber__profile">
        <img src="assets/img/avatar.png" height="25" width="25" class="rounded-circle" alt="profile">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                MD Arif Islam
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="dropdown-item" href="">Profile</a>
                <a class="dropdown-item" href="#">Log Out</a>
            </div>
        </div>
    </div>
</section>
