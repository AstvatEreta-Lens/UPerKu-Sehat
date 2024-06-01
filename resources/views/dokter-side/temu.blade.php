<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Selamat Datang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            * {
                color:rgb(52, 39, 9);
            }
            body{
                background-color: rgb(255, 255, 255);
                display: grid;
                margin: 0;
                grid-template-rows: auto auto;
                grid-template-areas: "header" "main" "footer";
            }
            header {
                grid-area: header;
            }
            main{
                grid-area: main;

            }
            footer{
                grid-area: footer;
                margin-top: 30px;
            }
            .atas ul {
                display: flex;
                list-style: none;
                gap: 40px;
            }
            .atas li a{
                text-decoration: none;
                color: rgb(47, 151, 231);
            }
            .atas {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: rgb(255, 255, 255);
            }
            .atas img{
                width: 80px;
                height: 80px;
            }
            img{
                width: 100%;
                height:550px;
            }
            .container{
                margin-left: 40px;
            }
            .servis {
                max-width: 800px;
                margin: 50px auto;
                text-align: center;
            }
            #servis{
                display: flex;
                justify-content: space-around;
                margin-top: 10px;
                padding: 5px;
            }
            .fitur {
                display: flex;
            }
            #chat, #jadwal, #temu, #riwayat{
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 10px;
            }
            .profil img{
                text-align: right;
                width: 80px;
                height: 80px;
                margin right: 600px;
                justify-content: right;
            }

            .item2{
                grid-area: menu;
                text-decoration-color: white;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
                border-radius: 10px 10px;
            }

            .content{
                display: flex;
                flex-direction: row;
                flex: 1;
            }

            .gallery{
                margin-left: 6px;
                margin-right: 20px;
            }

            .gallery a img{
                margin: 4px;
                width: 274px;
                height: 168px;
            }

            .desc{
                padding: 5px;
                text-align: center;
            }


        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
    </head>
<body>
    <header>
        <div class="atas">
            <img src="/img/logo.png" alt="">
            <ul>
                <li><a href="/" style="text-decoration:none">Beranda</a></li>
                <li><a href="#jadwal" style="text-decoration:none">Jadwal</a></li>
                <li><a href="#riwayat" style="text-decoration:none">Riwayat</a></li>
            </ul>
            <!-- <div class = "profil">
                <img src="https://i.pinimg.com/564x/62/01/0d/62010d848b790a2336d1542fcda51789.jpg" alt="profile">
            </div> -->
    </header>
    <main>
        <img src="/img/sehat.jpg" alt="">
        {{-- <div class="container" id="beranda">
            <h1>Selamat Datang Di UPerKu-Sehat</h1>
        </div> --}}
        <h2 class="mt-3 text-center ">List Jadwal Temu</h2>
        <table class="table mt-5 text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>DATE</th>
                    <th>TIME</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($jtemu as $temu)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $temu->date }}</td>
                        <td>{{ $temu->time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br> <br>
        <div class="text-center">
            <div class="btn btn-light" id="add">
                <i class="fa-solid fa-calendar-plus"></i>
                <a href="/jtemu/create" style="text-decoration:none">Add</a>
            </div>
            <div class="btn btn-light" id="edit">
                <i class="fa-solid fa-pencil"></i>
                <a href="/jtemu" style="text-decoration:none">Edit</a>
            </div>
            <div class="btn btn-light" id="hapus">
                <i class="fa-solid fa-calendar-xmark"></i>
                <a href="/hapusTemu" style="text-decoration:none">Delete</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
