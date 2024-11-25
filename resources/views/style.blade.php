<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: rgb(244, 255, 196);
            font-size: 40px;
        }

        a:link {
            text-decoration: none;
            color: blue;
        }

        a:visited {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            font-size: larger;
            color: yellow;
            text-decoration: underline;
        }

        .headingmerah {
            color: red;
        }

        .parratakanan {
            text-align: right;
        }

        .partengah {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 style="color: rgb(30, 223, 156);">Halo, selamat datang!</h1>
    <h1 class="headingmerah">Halo, selamat datang juga!</h1>
    <p style="font-size: large; color:rgb(0, 26, 255)">Jurusan Sistem Informasi ITS</p>
    <p class="parratakanan">Jurusan Sistem Informasi ITS 2</p>
    <p class="partengah">Jurusan Sistem Informasi ITS 3</p>
    <a href="https://www.google.com" target="_blank"> Google </a>
    <a href="https://www.its.ac.id" target="_self"> ITS </a>
    <a href="{{ url('hello') }}"> File Pertemuan 1 </a>
</body>

</html>
