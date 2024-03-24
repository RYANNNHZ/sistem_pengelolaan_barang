<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
</head>

<body>

    @yield('content')
    <script src="{{ url('js') . '/popper.min.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        if (<?= $errors->any() ?>) {
            errorlogin()
        }

        function errorlogin() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "login yang anda lakukan tidak valid",
            });
        }
    </script>
</body>

</html>
