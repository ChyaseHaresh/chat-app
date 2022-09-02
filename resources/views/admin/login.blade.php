<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="text-center">

    <main class="form-signin w-40 m-auto mt-5" style="width: 400px;">
        <form action="{{route('admin.auth')}}" method="post">
            @csrf
            <img class="mb-4"
                src="https://www.citypng.com/public/uploads/preview/png-round-blue-contact-user-profile-icon-11639786938sxvzj5ogua.png"
                alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating m-2">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username">
                <label for="floatingInput"> Username</label>
            </div>
            <div class="form-floating m-2">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary m-2" type="submit">Sign in</button>
        </form>
        @if(session()->has('error'))
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
