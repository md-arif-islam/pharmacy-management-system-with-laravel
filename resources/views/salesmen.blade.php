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



                            <tr>
                                <td>
                                    <center><img class="rounded-circle" width="40" height="40"
                                            src="assets/img/avatar.png" alt=""></center>
                                </td>
                                <td>
                                    MD Arif Islam
                                <td>
                                    arifislamarif344@gmail.com
                                </td>
                                <td>
                                    01704307597
                                </td>
                                <!-- Only For Admin -->
                                <td>
                                    <a href='#'><i class='fas fa-edit'></i></a>
                                </td>
                                <td>
                                    <a class='delete' href='#'><i class='fas fa-trash'></i></a>"
                                </td>

                            </tr>

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
