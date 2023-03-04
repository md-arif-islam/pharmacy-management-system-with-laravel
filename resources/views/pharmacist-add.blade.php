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
        <!-- ---------------------- Pharmacist ------------------------ -->
        <div class="pharmacist">
            <div class="addPharmacist">
                <div class="main__form">
                    <div class="main__form--title text-center">Add New Pharmacist</div>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="first_name" placeholder="First name" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="last_name" placeholder="Last Name" required>
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

        </div>
        <!-- ---------------------- Pharmacist ------------------------ -->
</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
