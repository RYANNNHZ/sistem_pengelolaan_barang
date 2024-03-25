<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{'style.css'}}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
</head>

<body>
    @include('partials.nav')
    @include('partials.side')
    @yield('content')
    <script src="{{ url('js') . '/popper.min.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        if (<?= Session::has('suksescreate') ?>) {
            suksescreate()
        }

        function suksescreate() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "berhasil memasuka data"
            });
        }
    </script>
    <script>
        if (<?= Session::has('suksesupdate') ?>) {
        }
            suksesupdate()

        function suksesupdate() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "berhasil melakukan update"
            });
        }
    </script>
    <script>
        if (<?= Session::has('sukseshapus') ?>) {
            sukseshapus()
        }

        function sukseshapus() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "berhasil menghapus data"
            });
        }
    </script>
    <script>
        if (<?= Session::has('suksesLogin') ?>) {
            suksesLogin()
        }

        function suksesLogin() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "anda berhasil login"
            });
        }
    </script>
</body>

</html>
