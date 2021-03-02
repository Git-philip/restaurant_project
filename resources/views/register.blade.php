<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/auth.css')}}">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Register</title>
</head>

<body>
    <div class="form">
        <div class="form-icon">
            <img src="{{asset('img/user.jpeg')}}" alt="">
        </div>

        <form action="register" method="post" enctype="multipart/form-data">
            @if(Session::has('registeredSuccessfully'))
            <p class="alert alert-success" role="alert">
                {{Session::get('registeredSuccessfully')}}
            </p>
            @endif
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Full name" class="form-control">
                <span>
                    @error('name'){{$message}}@enderror
                </span>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control">
                <span>
                    @error('email'){{$message}}@enderror
                </span>
            </div>
            <div class="row">
                <div class="col form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <span>
                        @error('password'){{$message}}@enderror
                    </span>
                </div>
                <div class="col form-group">
                    <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control">
                    <span>
                        @error('password_confirmation'){{$message}}@enderror
                    </span>
                </div>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control">
                <span>
                    @error('image'){{$message}}@enderror
                </span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn form-control">
            </div>
            <div class="form-group d-flex justify-content-end">
                <a href="{{'login'}}">Already have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>