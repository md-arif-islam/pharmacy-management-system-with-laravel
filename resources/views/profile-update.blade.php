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
                    <form action="{{ route('profile.update', auth()->user()) }}" method="POST" enctype="multipart/form-data"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col col-12 text-center pb-3">
                                <img id="pimg"
                                    src="{{ empty(auth()->user()->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . auth()->user()->avatar) }}"
                                    class="img-fluid rounded-circle" alt="">
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
                                        value="{{ auth()->user()->first_name }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        value="{{ auth()->user()->last_name }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email"
                                        value="{{ auth()->user()->email }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone"
                                        value="{{ auth()->user()->phone }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-key"></i>
                                    <input id="pwdinput" type="password" name="password" placeholder="Password">
                                    <i id="pwd" class="fas fa-eye right"></i>
                                </label>
                            </div>

                            <div class="col col-12">
                                <input type="submit" value="Update">
                            </div>
                        </div>
                    </form>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <script>
                                toastr.error("{{ $error }}")
                            </script>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- ---------------------- User Profile ------------------------ -->
        @endauth

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
