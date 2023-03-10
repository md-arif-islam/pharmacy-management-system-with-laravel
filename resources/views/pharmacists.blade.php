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
        <!-- ---------------------- Pharmacist ------------------------ -->
        <div class="pharmacist">
            <div class="allPharmacist">
                <div class="main__table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Avater</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                @canany(['isAdmin', 'isManager'])
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pharmacists->count() < 1)
                                <td>
                                    <center>No data abailable</center>
                                </td>
                            @endif
                            @foreach ($pharmacists as $pharmacist)
                                <tr>
                                    <td>
                                        <center><img class="rounded-circle" width="40" height="40"
                                                src="{{ empty($pharmacist->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . $pharmacist->avatar) }}"
                                                alt=""></center>
                                    </td>
                                    <td>
                                        {{ $pharmacist->first_name . ' ' . $pharmacist->last_name }}
                                    <td>
                                        {{ $pharmacist->email }}
                                    </td>
                                    <td>
                                        {{ $pharmacist->phone }}
                                    </td>
                                    <!--  -->
                                    @canany(['isAdmin', 'isManager'])
                                        <td>
                                            <a href='{{ route('pharmacists.edit', ['pharmacist' => $pharmacist->id]) }}'><i
                                                    class='fas fa-edit'></i></a>
                                        </td>

                                        <td>
                                            <form
                                                action="{{ route('pharmacists.delete', ['pharmacist' => $pharmacist->id]) }}"
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
        <!-- ---------------------- Pharmacist ------------------------ -->
</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
