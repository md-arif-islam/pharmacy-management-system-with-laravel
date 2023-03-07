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
        <!-- ---------------------- User Profile ------------------------ -->
        @auth(session()->get('guard'))
            <div class="userProfile">
                <div class="main__form myProfile">
                    <form action="#">
                        <div class="main__form--title myProfile__title text-center">My Profile</div>
                        <div class="form-row text-center">
                            <div class="col col-12 text-center pb-3">
                                <img src="{{ empty(auth()->user()->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . auth()->user()->avatar) }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="col col-12">
                                <h4><b>Full Name : </b>
                                    {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                                </h4>
                            </div>
                            <div class="col col-12">
                                <h4><b>Email : </b>
                                    {{ auth()->user()->email }}
                                </h4>
                            </div>
                            <div class="col col-12">
                                <h4><b>Phone : </b>
                                    {{ auth()->user()->phone }}
                                </h4>
                            </div>
                            <div class="col col-12">
                                <h4><b>Role : </b>
                                    {{ ucwords(auth()->user()->role) }}
                                </h4>
                            </div>
                            <div class="col col-12">
                                <a href="{{ route('profile.edit') }}">Update Profile</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endauth

        <!-- ---------------------- User Profile ------------------------ -->

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
