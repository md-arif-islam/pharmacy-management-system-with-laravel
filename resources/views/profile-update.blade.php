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
        <!-- ---------------------- User Profile ------------------------ -->
        @auth(session()->get('guard'))
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
                                    <input type="text" name="first_name" placeholder="First name"
                                        value="{{ auth(session()->get('guard'))->user()?->first_name }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        value="{{ auth(session()->get('guard'))->user()?->last_name }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email"
                                        value="{{ auth(session()->get('guard'))->user()?->email }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone"
                                        value="{{ auth(session()->get('guard'))->user()?->phone }}" required>
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
        @endauth

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')