<!-- KELOMPOK_1_KELAS_A -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @yield('container')

    <script src="{{asset('js/chart.js')}}"></script>
</body>

</html>