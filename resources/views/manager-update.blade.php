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

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
