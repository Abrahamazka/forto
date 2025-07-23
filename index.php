<?php
$host = "localhost";  
$user = "root";       
$pass = "";           
$db   = "portopolio"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Fortofolio</title>
    <link rel="stylesheet" href="forto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</head>
<style>
    * {
    scroll-behavior: smooth;
    font-family: monospace;
}

body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    display: block;
    background: #f4f4f4;
}
section {
    min-height: 100vh;
}

.sidebar {
    width: 60px;
    height: 100vh;
    background: #2c3e50;
    color: white;
    position: fixed;
    left: 0;
    top: 0;
    padding-top: 20px;
    transition: width 0.3s;
    z-index: 1;
}


.sidebar .logo {
    text-align: center;
    padding: 10px 0;
}

.sidebar .logo img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}


.sidebar a {
    display: flex;
    align-items: center;
    padding: 15px;
    color: white;
    text-decoration: none;
    font-size: 18px;
    transition: padding-left 0.3s;
}

.sidebar a:hover {
   background: #34495e;
    transition: 0.3s;
    padding-left: 20px;
    border-left: 2px solid white;
}

.sidebar a img {
    width: 25px;
    height: 25px;
    margin-right: 10px;
}


.sidebar a span {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s;
}


.sidebar:hover {
    width: 200px;
}

.sidebar:hover a span {
    opacity: 1;
    visibility: visible;
}

#menu {
    flex-grow: 1;
}

.konten {
    padding-top: 70px;
    text-align: center;
    font-family: monospace;  
    font-size: 16px;
    display: flex; 
    align-items: center; 
    gap: 50px; 
    text-align: justify;
    max-width: 1000px; 
    margin: auto; 
}

.konten div {
    flex-grow: 1;
}
.konten p {
    font-family: 'Times New Roman', Times, serif;
}
.konten img {
    border: 1px solid ;
    border-radius: 50%;
    margin-top: 55px;
}
#menu {
    flex-grow: 1;
}

.konten2  {
    padding-bottom: 100px   ;
    margin-left: 90px;
    margin-right: 90px;
    padding-top: 50px;
}
.konten2 p {
    font-family: 'Times New Roman', Times, serif;
    text-align: justify;
    font-size: 16px;
}

.skill-category {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

#skills {
    text-align: justify;
    padding: 50px 10px;
    background: #f4f4f4;
    border-radius: 10px;

}

.judulskill {
    margin-top: 40px;
    font-size: 20px;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
}

.divskill {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    margin-top: 60px;
}

.list {
    
    gap: 15px; 
    max-width: 1000px;
    flex-wrap: nowrap;

}

.skill {
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 15px 25px; 
    border-radius: 8px; 
    font-size: 18px;
    font-weight: bold;
    gap: 12px; 
    transition: 0.3s;
    border: 1.5px solid #34495e; 
    min-width: 140px; 
}

.skill:hover {
    background: rgba(255, 215, 0, 0.2);
    transform: scale(1.08); 
}

.skill img {
    width: 50px; 
    height: 50px;
}

.sertifikat {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
}

.serti1 {
    background-color: #ffffff;
    border: 2px solid #ccc;
    border-radius: 20px;
    padding: 20px 40px ;
    width: 100%;
    max-width: 450px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.serti1:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.gambarsertif {
    width: 80%;
    height: 80%;
    border-radius: 2%;
}

.modal {
    display: none; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}
.modal:hover {
    transform: scale(1.2);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.modal img {
    max-width: 90%;
    max-height: 90%;
}

.modal.show {
    display: flex;
}

#achiv{
    text-align: center;
    padding: 50px 10px;
    background: #f4f4f4;
    border-radius: 10px;
}

.pencapaian {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 60px;
}

.ach {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.ach img {
    width: 25%;
    border-radius: 10px;
}

.ach h2 {
    font-size: 18px;
    margin-top: 10px;
}

.ach p {
    font-size: 14px;
    color: #666;
    margin: 10px 0;
}

.lihat {
    display: inline-block;
    padding: 10px 15px;
    background: gold;
    color: black;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;

}

.lihat:hover {
    background: orange;
    transform: scale(1.2); 
    filter: brightness(0.8);
}

#contactme {
    max-width: 900px;
    margin: 10px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

#contactme h1 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

#contactme form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

#contactme label {
    font-weight: bold;
    text-align: left;
}

#contactme input,
#contactme textarea {
    width: 98%;
    padding: 9px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

#contactme textarea {
    resize: none;
}

#contactme button {
    background: #2c3e50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

#contactme button:hover {
    background: #1a252f;
}

#contak {
   padding-top: 50px;
   justify-content: center;
   display: flex;
   list-style: none;
   flex-grow: 1;
   gap: 35px;
}

.animasi2 img {
    transition: transform 0.3s ease, filter 0.3s ease;
    border-radius: 10px;
    cursor: pointer;
}
.animasi2:hover img {
    transform: scale(1.2); 
    filter: brightness(0.8);
}
.menuu {
    gap: 20px;
    margin-bottom: 30px;
    padding: 0 190px;
    z-index: 1;
}
.menuu button {
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px 20px;
}
.menuu button.active {
    border-bottom: 2px solid #34495e;
    color: #34495e ;
}
.divskill {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    padding: 0 180px;
}
.hidden {
    display: none;
}
.copy {
    text-align: center;
}
</style>
<body>
<script>
  AOS.init();

  function openModal(imageSrc) {
    var modal = document.getElementById("imageModal");
    var modalImage = document.getElementById("modalImage");
    

    modalImage.src = imageSrc;

    modal.classList.add("show");
  }
  
  function closeModal() {
    var modal = document.getElementById("imageModal");
    modal.classList.remove("show");
  }
</script>

    <div class="sidebar">       
        <div class="logo">
            <img src="cofoto.jpeg">
        </div>
        <a href="#menu" class="menu">
            <img src="home.png">
            <span>Beranda</span>
        </a>
        <a href="#profil" class="menu">
            <img src="user.png">
            <span>Profil</span>
        </a>
        <a href="#achiv" class="menu">
            <img src="project.png">
            <span>Projek</span>
        </a>
        <a href="#contactme" class="menu">
            <img src="contact.png">
            <span>Kontak</span>
        </a>
    </div>

    <section id="menu">
        <div class="konten" >
            <img src="b.png" width="600px" data-aos="fade-up" data-aos-duration="1000">
            <div data-aos="fade-left" data-aos-duration="1000">
                <h1>Abraham Azka Rizky Putra Hardianto</h1>
            <div data-aos="fade-up-left"data-aos-duration="1000"> 
                <p>Saya adalah seorang siswa yang lahir pada tanggal 23 Juli 2009. Saat ini, saya menempuh pendidikan di SMKN 1 Surabaya, sebuah sekolah menengah kejuruan ternama di kota surabaya. Saya memilih menjadi siswa jurusan Rekayasa Perangkat Lunak (RPL), sebuah jurusan yang fokus pada pengembangan dan pembuatan perangkat lunak. Sebagai bagian dari jurusan ini, saya mempelajari berbagai keterampilan dalam pemrograman komputer, analisis sistem, serta pembuatan aplikasi dan perangkat lunak lainnya yang berguna dalam dunia industri teknologi.</p>
            </div>
            </div>
    </section>
    
    <section id="profil">
        <div class="konten2" data-aos="fade-left" data-aos-duration="1000">
        <h1>Tentang saya</h1>
        <div  data-aos="fade-right" data-aos-duration="2000">
        <p>"Saya berdomisili di Gunung Sari Indah Blok FF/49 dan memiliki minat yang mendalam dalam bidang teknologi, khususnya komputer dan pengembangan perangkat lunak. Oleh karena itu, saya memilih jurusan Rekayasa Perangkat Lunak (RPL) untuk memperdalam pemahaman dan keterampilan di bidang tersebut. Selain itu, saya juga memiliki hobi bermain game, yang tidak hanya menjadi hiburan, tetapi juga sarana untuk mengasah strategi, ketangkasan, serta kreativitas.Saya juga suka memecahkan masalah yang rumit, baik dalam dunia pemrograman maupun dalam kehidupan sehari-hari. Tantangan bagi saya bukanlah hambatan, melainkan peluang untuk berpikir lebih dalam, menemukan solusi, dan mengembangkan keterampilan analitis. Saya selalu tertarik mencari cara terbaik untuk menyelesaikan suatu permasalahan dengan pendekatan yang efisien dan inovatif."</p>
        </div>
        </div>
        <div id="skills" >
         <div data-aos="fade-left" data-aos-duration="1000">
           <div class="menuu">
           <button class="active" onclick="showCategory('kemam', this)">Kemampuan</button>
           <button onclick="showCategory('puan', this)">Aplikasi</button>
           </div>
            <div id="kemam" class="divskill">
                <div class="list" data-aos="zoom-out-up" data-aos-duration="1000">
                    <div class="skill" ><img src="html.png"> HTML </div>
                    <div class="skill"><img src="css.png"> CSS </div>
                    <div class="skill"><img src="javascript.png"> JavaScript</div>
                    <div class="skill"><img src="php.png"> PHP</div>
                </div>
            </div>

            <div id="puan" class="divskill hidden">
                <div class="list" data-aos="zoom-out-up" data-aos-duration="1000">
                    <div class="skill" ><img src="vsc.png"> Vscode </div>
                    <div class="skill"><img src="xampp.png"> Xampp</div>
                    <div class="skill"><img src="github.png"> Github</div>
                    <div class="skill"><img src="valo.jpg"> Adobe Valorant</div>
                </div>
            </div>


         </div>
        </div>
        <h1 style="text-align: center; margin-top: 100px ; margin-bottom: 30px;">Sertifikat</h1>
    <div class="sertifikat">
        <div class="serti1" data-aos="fade-right" data-aos-duration="1500">
            <img src="ABRAHAM AZKA RIZKY PUTRA HARDIANTO-copy-0_page-0001.jpg" class="gambarsertif" onclick="openModal('ABRAHAM AZKA RIZKY PUTRA HARDIANTO-copy-0_page-0001.jpg')">
            <h4>KURSUS PEMROGRAMAN LEVEL 1</h4>
        </div>
        <div class="serti1" data-aos="fade-left" data-aos-duration="1000">
            <img src="ABRAHAM AZKA RIZKY PUTRA HARDIANTO_page-0001.jpg" class="gambarsertif" onclick="openModal('ABRAHAM AZKA RIZKY PUTRA HARDIANTO_page-0001.jpg')">
            <h4>KURSUS PEMROGRAMAN LEVEL 2</h4>
        </div>
    </div>
    </section>

    <div id="imageModal" class="modal" onclick="closeModal()">
    <img id="modalImage">
    </div>

    <section id="achiv">
        <div class="konten2" data-aos="zoom-in" data-aos-duration="1000">
            <h1>Projek Saya</h1>
            <div class="pencapaian">
                <div class="ach" data-aos="fade-up" data-aos-anchor-placement="center-bottom">  
                    <img src="scratch-logo.jpg">
                    <h2>Proyek 1 - Scratch</h2>
                    <p>Sebuah permainan sederhana yang dibuat untuk menghibur dan juga untuk mempelajari dasar-dasar pemrograman dengan menggunakan Scratch.</p>
                    <a href="07_17_30_35_EFAA DEV2.sb3" class="lihat" target="_blank">Lihat Projek</a>
                </div>
                <div class="ach" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <img src="c++.png">
                    <h2>Proyek 2 - Mesin kasir Sederhana</h2>
                    <p>Sebuah kode sederhana yang dibuat untuk mempelajari dasar-dasar pemrograman dengan menggunakan bahasa pemrograman C++.</p>
                    <a href="https://replit.com/@ezuuna/Mesin-kasir-sederhana" class="lihat" target="_blank">Lihat Projek</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contactme" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" >
        <h1>Hubungi Saya</h1>
        <form action="process.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Gmail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Kirim</button>

            <div id="contak">
        <div class="animasi2">
        <li><a href="https://www.instagram.com/azka_dah?igsh=bmVncDJnOGx5ejRt" target="_blank"><img src="instagram.png" width="70px" ></a> </li>
        </div>
        <div class="animasi2">
        <li><a href="https://wa.me/qr/6SOM4WCLDDEGL1" target="_blank"><img src="whatsapp.png" width="70px" ></a> </li>
        </div>
        <div class="animasi2">
        <li><a href="https://github.com/Abrahamazka" target="_blank"><img src="github.png" width="70px" ></a> </li>
        </div>

    </div>
        </form>
    </section>
    <p class="copy">© 2025 Kararmelia. All rights reserved.</p>
</body>
<script>
function showCategory(categoryId, clickedButton) {

  document.getElementById("kemam").classList.add("hidden");
  document.getElementById("puan").classList.add("hidden");

  document.getElementById(categoryId).classList.remove("hidden");

  document.querySelectorAll(".menuu button").forEach(btn => {
    btn.classList.remove("active");
  });

  clickedButton.classList.add("active");
}
</script>

</html>
