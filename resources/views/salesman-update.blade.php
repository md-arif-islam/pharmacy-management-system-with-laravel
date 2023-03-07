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
            <div class="updateSalesman">
                <div class="main__form">
                    <div class="main__form--title text-center">Update Salesman</div>
                    <form action="{{ route('salesmen.update', $salesman) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col col-12 text-center pb-3">
                                <img id="pimg"
                                    src="{{ empty($salesman->avatar) ? asset('assets/img/avatar.png') : asset('storage/avatars/' . $salesman->avatar) }}"
                                    class="img-fluid rounded-circle" alt="">
                                <i class="fas fa-pen pimgedit"></i>
                                <input
                                    onchange="document.getElementById('pimg').src = window.URL.createObjectURL(this.files[0])"
                                    id="pimgi" style="display: none;" type="file" name="avatar">
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="first_name" placeholder="First name"
                                        value="{{ $salesman->first_name }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-user-circle"></i>
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        value="{{ $salesman->last_name }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email"
                                        value="{{ $salesman->email }}" required>
                                </label>
                            </div>
                            <div class="col col-12">
                                <label class="input">
                                    <i id="left" class="fas fa-phone-alt"></i>
                                    <input type="number" name="phone" placeholder="Phone"
                                        value="{{ $salesman->phone }}" required>
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

        </div>
        <!-- ---------------------- Salesman ------------------------ -->

    </div>

</section>

<!--------------------------------- #Main section -------------------------------->


@include('components.footer')
