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
        <!-- ---------------------- Manager ------------------------ -->
        <div class="manager">
            <div class="allManager">
                <div class="main__table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Avater</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <!-- Only For Admin -->
                                @can('isAdmin')
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @if ($managers->count() < 1)
                                <td>
                                    <center>No data abailable</center>
                                </td>
                            @endif
                            @foreach ($managers as $manager)
                                <tr>
                                    <td>
                                        <center><img class="rounded-circle" width="40" height="40"
                                                src="{{ empty($manager->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . $manager->avatar) }}"
                                                alt="">
                                        </center>
                                    </td>
                                    <td>
                                        {{ $manager->first_name . ' ' . $manager->last_name }}
                                    <td>
                                        {{ $manager->email }}
                                    </td>
                                    <td>
                                        {{ $manager->phone }}
                                    </td>
                                    <!-- Only For Admin -->
                                    @can('isAdmin')
                                        <td>
                                            <a href='{{ route('managers.edit', ['manager' => $manager->id]) }}'><i
                                                    class='fas fa-edit'></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('managers.delete', ['manager' => $manager->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete"><i class='fas fa-trash'></i></button>
                                            </form>
                                        </td>
                                    @endcan

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ---------------------- Manager ------------------------ -->
        </div>
</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
