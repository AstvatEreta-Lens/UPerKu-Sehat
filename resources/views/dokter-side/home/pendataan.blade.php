<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
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
                height:520px;
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
            .fitur a{
                color: black;
            }
            #chat, #jadwal, #temu, #riwayat, #jtemu, #jkonsul{
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
                <li><a href="#beranda" style="text-decoration:none">Beranda</a></li>
                <li><a href="#artikel" style="text-decoration:none">Artikel</a></li>
                <li><a href="#riwayat" style="text-decoration:none">Riwayat</a></li>
            </ul>
            <!-- <div class = "profil">
                <img src="https://i.pinimg.com/564x/62/01/0d/62010d848b790a2336d1542fcda51789.jpg" alt="profile">
            </div> -->
    </header>
    <main>
        <img src="/img/sehat.jpg" alt="">
        <div class="container" id="beranda">
            <br>
            <h1>Selamat Datang Di UPerKu-Sehat</h1>
            <p><b>Solusi Kesehatan di kampus, chat dokter, beli obat, dan update informasi seputar kesehatan, Semua hanya ada di UPerKU - Sehat.</b></p>
        </div>
        <div class="servis">
            <h2>Our Service</h2>
            <div id="servis">
                <div class="fitur row justify-content-center">
                    <div class="col" id="chat">
                        <a href="/chat" style="text-decoration:none">Chat Pasien</a>
                    </div>
                    <div class="col" id="jadwal">
                        <a href="/konsultasi" style="text-decoration:none">Jadwal Konsultasi</a>
                    </div>
                    <div class="col" id="temu">
                        <a href="/temu" style="text-decoration:none">Jadwal Temu</a>
                    </div>
                    <div class="col" id="jkonsul">
                        <a href="/jkonsul" style="text-decoration:none">Janji Konsultasi</a>
                    </div>
                    <div class="col" id="jtemu">
                        <a href="/jtemu" style="text-decoration:none">Janji Bertemu</a>
                    </div>
                    <div class="col" id="riwayat">
                        <a href="/riwayatRekam" style="text-decoration:none">Riwayat Pasien</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="item2">
            <h1>Artikel</h1>
                <div class="content">
                    <div class="gallery">
                        <a target="_blank" href="https://news.unair.ac.id/2022/03/08/mengenal-penyakit-gigi/?lang=id">
                            <img src="https://news.unair.ac.id/wp-content/uploads/2022/03/Foto-by-Tokopedia.jpg" alt="Petualangan Sherina" width= "280" height= "160px">
                        </a>
                        <div class="desc">Mengenal Penyakit Gigi</div>
                      </div>

                    <div class="gallery">
                        <a target="_blank" href="https://www.klikdokter.com/info-sehat/darah/berbagai-gejala-anemia-yang-harus-diwaspadai">
                            <img src="https://img-cdn.medkomtek.com/UZpvy33c58vSFubUzPSNcYGpIyQ=/730x411/smart/filters:quality(100):format(webp)/article/5NK6_c1BXB7cO6HV0AHiW/original/089713600_1568432647-Yuk-Kenali-_X_-Gejala-Kurang-Darah-By-9nong-Shutterstock.jpg" alt="Barbie" width= "280" height= "160px">
                        </a>
                        <div class="desc">Gejala Anemia yang Harus Diwaspadai</div>
                    </div>

                    <div class="gallery">
                        <a target="_blank" href="https://www.alodokter.com/3-penyebab-mata-minus-semakin-parah-dan-cara-mencegahnya">
                            <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1655799042/attached_image/3-penyebab-mata-minus-semakin-parah-dan-cara-mencegahnya-0-alodokter.jpg" alt="SawX" width= "280" height= "160px">
                        </a>
                        <div class="desc">Penyebab Mata Minus Semakin Parah dan Cara Mencegahnya</div>
                    </div>

                    <div class="gallery">
                        <a target="_blank" href="https://www.halodoc.com/artikel/perbedaan-gejala-gizi-kurang-dan-gizi-lebih-pada-anak">
                            <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/07/21063306/Perbedaan-Gejala-Gizi-Kurang-dan-Gizi-Lebih-pada-Anak.jpg.webp" alt="SawX" width= "280" height= "160px">
                        </a>
                        <div class="desc">Perbedaan Gejala Gizi Kurang dan Gizi Lebih pada Anak</div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
