<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body style="background-color: #f1f4f7;">
    <header>
        @include('includes.navbarpos')
    </header>
    <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        @yield('content')
    </div>
    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
