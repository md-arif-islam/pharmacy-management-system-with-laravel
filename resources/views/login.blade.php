<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link href="//fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
    <title>Login</title>
</head>

<body>
    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">
            <div class="main__form">
                <div class="main__form--title text-center">Log In</div>
                <form action="{{ route('login.auth') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-envelope left"></i>
                                <input type="text" name="email" placeholder="Email" required />
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-key"></i>
                                <input id="pwdinput" type="password" name="password" placeholder="Password" required />
                                <i id="pwd" class="fas fa-eye right"></i>
                            </label>
                        </div>

                        @error('message')
                            <h5 class="text-center" style="color: red">
                                {{ $message }}
                            </h5>
                        @enderror

                        <div class="col col-12">
                            <input type="submit" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--------------------------------- #Main section -------------------------------->

    <!-- Optional JavaScript -->
    <script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
