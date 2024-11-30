<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Page</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .container {
            margin-top: 100px;
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-container {
            background: linear-gradient(to right, #9089CA, #7A64C7);
            color: white;
            padding: 30px;
            width: 50%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .form-container textarea {
            height: 120px;
        }

        .form-container button {
            background-color: #e74c3c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #7A64C7
    }
    
    .image-container {
        width: 50%;
        background-image: url('path/to/your/image.jpg'); 
        background-size: cover;
        background-position: center;
    }
    </style>
</head>
<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="asset/img/luarsekolah-logo.png" alt="logo" >
            </a>

            <div class="dropdown">
                <button class="dropbtn">
                        Program <img src="asset/icon/chevron-down.png" alt="Panah" class="arrow"> 
                </button>                
                <div class="dropdown-content">
                    <a href="#">Prakerja</a>
                    <a href="#">Belajar Bekerja</a>
                    <a href="#">Indonesia Skills Week</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                        Layanan <img src="asset/icon/chevron-down.png" alt="Panah" class="arrow"> 
                </button> 
                <div class="dropdown-content">
                    <a href="#">Tentang kami</a>
                    <a href="#">Promo</a>
                    <a href="#">Blog</a>
                    <a href="#">Komunitas</a>
                </div>
            </div>
            <div class="auth-links">
                <button class="auth-link1-btn">
                    <a href="login.html" class="auth-link1">Masuk</a> 
                </button>
                <button class="auth-link2-btn">
                    <a href="login.html" class="auth-link2">Daftar</a> 
                </button>
            </div>
    </header>

    <main>
        <section class="about">
            <div class="about-luarsekolah">
                <h1><span class="highlight-h1">Tentang</span> Kami</h1>
                <p>
                “Kenali lebih dekat Luarsekolah, platform edukasi vokasi digital yang mendampingi generasi muda Indonesia belajar hingga 
                <span class="highlight-p">#sampaijadibisa</span>
                </p>
            </div>
        </section>


        <section class="story">
    <div class="slideshow">
        <div class="slide" style="background-image: url('asset/animation/slide 1.png');">
            <div class="content-slide">
                <h1>Luarsekolah</h1>
                <p>
                    Luarsekolah adalah platform edukasi vokasi dan pengembangan diri yang menggabungkan teknologi digital 
                    dengan materi-materi dari pengajar berpengalaman. Kami hadir untuk mendampingi generasi muda Indonesia belajar dan berkembang.
                </p>
            </div>
        </div>
        <div class="slide" style="background-image: url('asset/animation/slide 2.png');">
            <div class="content-slide">
                <h1>Berawal Dari Kenyataan Pendidikan Saat Ini</h1>
                <p>•  Kurikulum formal sering kali tidak sejalan dengan kebutuhan industri.</p>
                <p>•  Banyak perusahaan di Indonesia kesulitan menemukan talenta yang siap bersaing.</p>
                <p>•  Hal ini menciptakan kesenjangan keterampilan yang signifikan antara lulusan dan tuntutan dunia kerja.</p>
            </div>
        </div>
        <div class="slide" style="background-image: url('asset/animation/slide 3.png');">
            <div class="content-slide">
                <h1>Maka Demikian...</h1>
                <p>kami hadirkan platform pendidikan vokasi untuk membantu Generasi Indonesia siap bersaing di industri modern.</p>
            </div>
        </div>
    </div>
</section>


        <section class="visi-misi">
            <div class="title-visimisi">
                <h1>Tujuan Kami</h1>
                <h4>Perencanaan Luarsekolah untuk mencapai tujuan</h4>
            </div>

            <div class="content-visimisi">

                <div class="animation-visi">
                    <img src="asset/animation/visi-animation-right.png" alt="Animasi Visi">
                </div>


                <div class="visi-right">
                    <h2>
                        <img src="asset/icon/visi-icon.png" alt="Ikon Visi">
                        Visi
                    </h2>
                    <p>
                        Menjadi platform pendidikan non-formal berbasis teknologi yang mencetak generasi muda unggul, berkarakter, berpengetahuan, terampil, dan berdaya saing.
                    </p>
                </div>

                <div class="misi-left">
                    <h2>
                        <img src="asset/icon/misi-icon.png" alt="Ikon Misi">
                        Misi
                    </h2>
                    <ul>
                        <li>Merancang program pendidikan yang sesuai kebutuhan industri.</li>
                        <li>Menyediakan platform teknologi untuk mendukung pembelajaran dan pengembangan diri.</li>
                        <li>Menyelenggarakan pelatihan berkualitas yang relevan dengan tantangan global.</li>
                        <li>Mendorong kolaborasi melalui pembelajaran kelompok.</li>
                        <li>Menanamkan budaya belajar sepanjang hayat dengan pendampingan aktif.</li>
                    </ul>
                </div>

                <div class="animation-misi">
                    <img src="asset/animation/misi-animation-left.png" alt="Animasi Misi">
                </div>
            </div>
        </section>

        <section class="value">
            <div class="title-value">
                <h1>Value</h1>
                <h4>Nilai-Nilai Inti yang Mendorong Misi dan Visi Kami</h4>
            </div>

            <div class="content-value">
                <div class="value-1">
                    <img src="asset/animation/value-1.png" alt="icon-value1">
                    <p>Relevan Dengan Zaman</p>
                </div>
                <div class="value-2">
                    <img src="asset/animation/value-2.png" alt="icon-value2">
                    <p>Berani Untuk Memulai</p>
                </div>
                <div class="value-3">
                    <img src="asset/animation/value-3.png" alt="icon-value3">
                    <p>Terbaharu dan Terkurasi</p>
                </div>
            </div>

        </section>




        
        
        
        <div class="container">
            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </div>
            <div class="image-container"></div>
        </div>
    </main>

    <footer class="footer">
        <div class="container-footer">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="asset/img/luarsekolah-logo.png" alt="" width="80px">
                </div>
                <div class="footer-info" >
                    <p>
                    Luarsekolah merupakan wadah belajar dan mengajar pelajaran non-formal/alternatif dengan cara menyediakan kelas pengajaran dalam bentuk online dasn offline
                    </p>
                    <P>PT Teknologi Edukasi Indonesia</P>
                
                    <div class="footer-social">
                    <a href="https://www.linkedin.com/">
                        <img src="asset/icon/linkedin.png" alt="LinkedIn">
                    </a>
                    <a href="https://www.tiktok.com/">
                        <img src="asset/icon/tiktok.png" alt="TikTok">
                    </a>
                    <a href="https://www.instagram.com" >
                        <img src="asset/icon/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/" >
                        <img src="asset/icon/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://www.twitter.com" >
                        <img src="asset/icon/twitter.png" alt="Twitter">
                    </a>
                    <a href="https://www.youtube.com" >
                        <img src="asset/icon/youtube.png" alt="YouTube">
                    </a>

                    </div>
                    <div class="footer-playstore">
                        <a href="https://play.google.com/" target="_blank"><img src="asset/icon/PlayStore.png"></a>
                    </div>
                </div>
            </div>

            <div class="footer-content-tentang">
                <ul>
                    <li><a href="#"><b>Tentang</b></a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Blog</a></li>   
                    <li><a href="#">Komunitas</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Kegiatan</a></li>
                </ul>
            </div>
            <div class="footer-content-program">
            <ul>
                    <li><a href="#"><b>Program</b></a></li>
                    <li><a href="#">Prakerja</a></li>
                    <li><a href="#">Belajar Bekerja</a></li>   
                    <li><a href="#">ISW (Indonesia Skill Week)</a></li>
                </ul>
            </div>
            <div class="footer-content-dukungan">
            <ul>
                    <li><a href="#"><b>Dukungan</b></a></li>
                    <li><a href="#">Bantuan</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>   
                    <li><a href="#">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
        <p>&copy; 2024 All Rights Reserved</p>
        </div>

    </footer>

    <script src="asset/js/script.js"></script>
</body>
</html>
 