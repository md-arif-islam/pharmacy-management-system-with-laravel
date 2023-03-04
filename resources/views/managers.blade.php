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
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($managers as $manager)
                                <tr>
                                    <td>
                                        <center><img class="rounded-circle" width="40" height="40"
                                                src="assets/img/avatar.png" alt=""></center>
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
                                    <td>
                                        <a href='{{ route('managers.edit', ['manager' => $manager->id]) }}'><i
                                                class='fas fa-edit'></i></a>
                                    </td>
                                    <td>
                                        <a class='delete'
                                            href='{{ route('managers.delete', ['manager' => $manager->id]) }}'><i
                                                class='fas fa-trash'></i></a>
                                    </td>

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
