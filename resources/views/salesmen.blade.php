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

        <!-- ---------------------- Salesman ------------------------ -->
        <div class="salesman">
            <div class="allSalesman">
                <div class="main__table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Avater</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                @canany(['isAdmin', 'isManager', 'isPharmacist'])
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @if ($salesmen->count() < 1)
                                <td>
                                    <center>No data abailable</center>
                                </td>
                            @endif

                            @foreach ($salesmen as $salesman)
                                <tr>
                                    <td>
                                        <center><img class="rounded-circle" width="40" height="40"
                                                src="{{ empty($salesman->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . $salesman->avatar) }}"
                                                alt=""></center>
                                    </td>
                                    <td>
                                        {{ $salesman->first_name . ' ' . $salesman->last_name }}
                                    <td>
                                        {{ $salesman->email }}
                                    </td>
                                    <td>
                                        {{ $salesman->phone }}
                                    </td>
                                    @canany(['isAdmin', 'isManager', 'isPharmacist'])
                                        <td>
                                            <a href='{{ route('salesmen.edit', ['salesman' => $salesman->id]) }}'><i
                                                    class='fas fa-edit'></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('salesmen.delete', ['salesman' => $salesman->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete"><i class='fas fa-trash'></i></button>
                                            </form>
                                        </td>
                                    @endcanany
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- ---------------------- Salesman ------------------------ -->

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
