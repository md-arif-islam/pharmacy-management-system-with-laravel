@include('components.header')

<!--------------------------------- Secondary Navber -------------------------------->
@include('components.topbar')
<!--------------------------------- Secondary Navber -------------------------------->

<!--------------------------------- Sideber -------------------------------->
@include('components.sidebar')
<!--------------------------------- #Sideber -------------------------------->


<!--------------------------------- Main section -------------------------------->
<section class="main">
    <div class="container">

        @if (session('success'))
            <script>
                toastr.success("{{ session('success') }}")
            </script>
        @endif

        <!-- ---------------------- DashBoard ------------------------ -->
        <div class="dashboard p-5">
            <div class="total">
                <div class="row">
                    <div class="col-3">
                        <div class="total__box text-center">
                            <h1>2453</h1>
                            <h2>Total Sell</h2>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="total__box text-center">
                            <h1>
                                {{ $managerCount }}
                            </h1>
                            <h2>Manager</h2>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="total__box text-center">
                            <h1>
                                {{ $pharmacistCount }}

                            </h1>
                            <h2>Pharmacist</h2>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="total__box text-center">
                            <h1>
                                {{ $salesmanCount }}
                            </h1>
                            <h2>Salesman</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------- DashBoard ------------------------ -->

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
