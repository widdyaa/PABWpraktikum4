<!DOCTYPE html>
<html>
<head>
    <title>LaporBanjir</title>

    <style>

        body{
            margin:0;
            font-family:Arial;
            background:#f5f5f5;
        }

        header{
            background:#ff8fb1;
            color:white;
            padding:20px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-right:20px;
        }

        .container{
            width:80%;
            margin:30px auto;
        }

        footer{
            background:#ddd;
            text-align:center;
            padding:15px;
            margin-top:30px;
        }

    </style>

</head>
<body>

<header>

<h1>LaporBanjir BPBD Kabupaten Bandung</h1>

<nav>

<a href="{{ route('form') }}">Form</a>

<a href="{{ route('laporan') }}">Daftar Laporan</a>

</nav>

</header>

<div class="container">

@yield('content')

</div>

<footer>

2026 © BPBD Kabupaten Bandung

</footer>

</body>
</html>