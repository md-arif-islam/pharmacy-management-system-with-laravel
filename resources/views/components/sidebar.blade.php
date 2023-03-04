<section id="sideber" class="sideber">
    <ul class="sideber__ber">
        <h2 class="sideber__panel">Pharmacy Management System</h2>
        <li id="left" class="sideber__item @if (request()->routeIs('dashboard')) active @endif">
            <a href="{{ route('dashboard') }}"><i id="left" class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>

        <!-- Only For Admin -->
        <li id="left" class="sideber__item sideber__item--modify @if (request()->routeIs('managers.add')) active @endif">
            <a href="{{ route('managers.add') }}"><i id="left" class="fas fa-user-plus"></i></i>Add Manager</a>
        </li>

        <li id="left" class="sideber__item @if (request()->routeIs('managers.show')) active @endif">
            <a href="{{ route('managers.show') }}"><i id="left" class="fas fa-user"></i>All Manager</a>
        </li>

        <!-- For Admin, Manager -->
        <li id="left" class="sideber__item sideber__item--modify @if (request()->routeIs('pharmacists.add')) active @endif">
            <a href="{{ route('pharmacists.add') }}"><i id="left" class="fas fa-user-plus"></i></i>Add
                Pharmacist</a>
        </li>

        <li id="left" class="sideber__item @if (request()->routeIs('pharmacists.show')) active @endif">
            <a href="{{ route('pharmacists.show') }}"><i id="left" class="fas fa-user"></i>All Pharmacist</a>
        </li>

        <!-- For Admin, Manager, Pharmacist-->
        <li id="left" class="sideber__item sideber__item--modify @if (request()->routeIs('salesmen.add')) active @endif">
            <a href="{{ route('salesmen.add') }}"><i id="left" class="fas fa-user-plus"></i>Add Salesman</a>
        </li>

        <li id="left" class="sideber__item @if (request()->routeIs('salesmen.show')) active @endif">
            <a href="{{ route('salesmen.show') }}"><i id="left" class="fas fa-user"></i>All Salesman</a>
        </li>
    </ul>
    {{-- <footer class="text-center"><span>MD Arif Islam</span><br>©2020 PMS All right reserved.</footer> --}}
</section>
