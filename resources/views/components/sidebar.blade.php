<section id="sideber" class="sideber">
    <ul class="sideber__ber">
        <h2 class="sideber__panel">Pharmacy Management System</h2>
        <li id="left" class="sideber__item active">
            <a href="{{ route('dashboard') }}"><i id="left" class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>

        <!-- Only For Admin -->
        <li id="left" class="sideber__item sideber__item--modify active">
            <a href="{{ route('managers.add') }}"><i id="left" class="fas fa-user-plus"></i></i>Add Manager</a>
        </li>

        <li id="left" class="sideber__item">
            <a href="{{ route('managers') }}"><i id="left" class="fas fa-user"></i>All Manager</a>
        </li>

        <!-- For Admin, Manager -->
        <li id="left" class="sideber__item sideber__item--modify">
            <a href="{{ route('pharmacists.add') }}"><i id="left" class="fas fa-user-plus"></i></i>Add
                Pharmacist</a>
        </li>

        <li id="left" class="sideber__item">
            <a href="{{ route('pharmacists') }}"><i id="left" class="fas fa-user"></i>All Pharmacist</a>
        </li>

        <!-- For Admin, Manager, Pharmacist-->
        <li id="left" class="sideber__item sideber__item--modify">
            <a href="{{ route('salesmen.add') }}"><i id="left" class="fas fa-user-plus"></i>Add Salesman</a>
        </li>

        <li id="left" class="sideber__item">
            <a href="{{ route('salesmen') }}"><i id="left" class="fas fa-user"></i>All Salesman</a>
        </li>
    </ul>
    {{-- <footer class="text-center"><span>MD Arif Islam</span><br>©2020 PMS All right reserved.</footer> --}}
</section>
