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
                                1234
                            </h1>
                            <h2>Manager</h2>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="total__box text-center">
                            <h1>
                                1234

                            </h1>
                            <h2>Pharmacist</h2>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="total__box text-center">
                            <h1>
                                1234
                            </h1>
                            <h2>Salesman</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------- DashBoard ------------------------ -->

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


            <div class="addManager">
                <div class="main__form">
                    <div class="main__form--title text-center">Add New Manager</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="fname" placeholder="First name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="lname" placeholder="Last Name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-key"></i>
                                    <input id="pwdinput" type="password" name="password" placeholder="Password"
                                        required>
                                    <i id="pwd" class="fas fa-eye right"></i>
                                </label>
                            </div>
                            <input type="hidden" name="action" value="addManager">
                            <div class="col col-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="addManager">
                <div class="main__form">
                    <div class="main__form--title text-center">Update Manager</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="fname" placeholder="First name" value="MD Arif"
                                        required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="lname" placeholder="Last Name" value="Islam"
                                        required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email"
                                        value="arifislamarif344@gmail.com" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone" value="01704307597"
                                        required>
                                </label>
                            </div>
                            <input type="hidden" name="action" value="updateManager">
                            <input type="hidden" name="id" value="1">
                            <div class="col col-12">
                                <input type="submit" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ---------------------- Manager ------------------------ -->

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


            <div class="addPharmacist">
                <div class="main__form">
                    <div class="main__form--title text-center">Add New Pharmacist</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="fname" placeholder="First name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="lname" placeholder="Last Name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-key"></i>
                                    <input id="pwdinput" type="password" name="password" placeholder="Password"
                                        required>
                                    <i id="pwd" class="fas fa-eye right"></i>
                                </label>
                            </div>
                            <input type="hidden" name="action" value="addPharmacist">
                            <div class="col col-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="addManager">
                <div class="main__form">
                    <div class="main__form--title text-center">Update Pharmacist</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="fname" placeholder="First name" value="Arif"
                                        required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="lname" placeholder="Last Name" value="Islam"
                                        required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email"
                                        value="arifislamarif344@gmail.com" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone" value="01704307597"
                                        required>
                                </label>
                            </div>
                            <input type="hidden" name="action" value="updatePharmacist">
                            <input type="hidden" name="id" value="1">
                            <div class="col col-12">
                                <input type="submit" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- ---------------------- Pharmacist ------------------------ -->

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
            <div class="addSalesman">
                <div class="main__form">
                    <div class="main__form--title text-center">Add New Salesman</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="fname" placeholder="First name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="lname" placeholder="Last Name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-key"></i>
                                    <input id="pwdinput" type="password" name="password" placeholder="Password"
                                        required>
                                </label>
                            </div>
                            <input type="hidden" name="action" value="addSalesman">
                            <div class="col col-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="addManager">
                <div class="main__form">
                    <div class="main__form--title text-center">Update Salesman</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="fname" placeholder="First name" value="Arif"
                                        required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="lname" placeholder="Last Name" value="Islam"
                                        required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email"
                                        value="arifislamarif344@gmail.com" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone" value="01704307597"
                                        required>
                                </label>
                            </div>
                            <input type="hidden" name="action" value="updateSalesman">
                            <input type="hidden" name="id" value="3">
                            <div class="col col-12">
                                <input type="submit" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- ---------------------- Salesman ------------------------ -->

        <!-- ---------------------- User Profile ------------------------ -->

        <div class="userProfile">
            <div class="main__form myProfile">
                <form action="#">
                    <div class="main__form--title myProfile__title text-center">My Profile</div>
                    <div class="form-row text-center">
                        <div class="col col-12 text-center pb-3">
                            <img src="assets/img/avatar.png" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col col-12">
                            <h4><b>Full Name : </b>
                                MD Arif Islam
                            </h4>
                        </div>
                        <div class="col col-12">
                            <h4><b>Email : </b>
                                arifislamarif344@gmail.com
                            </h4>
                        </div>
                        <div class="col col-12">
                            <h4><b>Phone : </b>
                                01704307597
                            </h4>
                        </div>
                        <input type="hidden" name="id" value="userProfileEdit">
                        <div class="col col-12">
                            <input class="updateMyProfile" type="submit" value="Update Profile">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="userProfileEdit">
            <div class="main__form">
                <div class="main__form--title text-center">Update My Profile</div>
                <form enctype="multipart/form-data" action="#" method="POST">
                    <div class="form-row">
                        <div class="col col-12 text-center pb-3">
                            <img id="pimg" src="assets/img/avatar.png" class="img-fluid rounded-circle"
                                alt="">
                            <i class="fas fa-pen pimgedit"></i>
                            <input
                                onchange="document.getElementById('pimg').src = window.URL.createObjectURL(this.files[0])"
                                id="pimgi" style="display: none;" type="file" name="avatar">
                        </div>
                        <div class="col col-12">
                            <p style='color:red;' class='text-center'>Please make sure this file is jpg, png or
                                jpeg
                            </p>

                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-user-circle"></i>
                                <input type="text" name="fname" placeholder="First name" value="MD Arif"
                                    required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-user-circle"></i>
                                <input type="text" name="lname" placeholder="Last Name" value="Islam"
                                    required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email"
                                    value="arifislamarif344@gmail.com" required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-phone-alt"></i>
                                <input type="number" name="phone" placeholder="Phone" value="01704307597"
                                    required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-key"></i>
                                <input id="pwdinput" type="password" name="oldPassword" placeholder="Old Password"
                                    required>
                                <i id="pwd" class="fas fa-eye right"></i>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-key"></i>
                                <input id="pwdinput" type="password" name="newPassword" placeholder="New Password"
                                    required>
                                <p>Type Old Password if you don't want to change</p>
                                <i id="pwd" class="fas fa-eye right"></i>
                            </label>
                        </div>
                        <input type="hidden" name="action" value="updateProfile">
                        <div class="col col-12">
                            <input type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- ---------------------- User Profile ------------------------ -->

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
