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
                                <!-- Only For Admin -->
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
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
                                                src="{{ empty($salesman->avatar) ? asset('assets/img/avatar.png') : asset('storage/' . $salesman->avatar) }}"
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
                                    <!-- Only For Admin -->
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
