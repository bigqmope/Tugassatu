<?php
$judul = "Pontianak";
$asal = "Sejarah";
$libur = "Alun-Alun Kapuas";
$makan = "Kuliner Pontianak";
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset = "utf-8"> 
        <title>Halaman Profil <?php echo $judul?></title>
        <style>
            h1 { text-align: center;}
            body { font-family: verdana;
                 background-color: #FCEEED; }
            footer { background-color: #DC5648; }
            
        </style>
    </head>
    <body>
        <header>
            <h1><?php echo $judul?></h1>
            <p><?php echo $judul?> adalah ibu kota provinsi Kalimantan Barat, Indonesia. Kota ini dikenal sebagai Kota Khatulistiwa karena dilalui garis khatulistiwa.
            Di Utara Kota <?php echo $judul?> (Siantan) terdapat Tugu Khatulistiwa yang dibangun pada tempat yang dilalui garis khatulistiwa. Kota <?php echo $judul?> memiliki beberapa julukan,
            diantaranya adalah Kota Khatulistiwa, Kota Seribu Parit, dan <?php echo $judul?> Kota Bersinar.</p>

            <nav> <!-- konten serangkaian navigasi -->
                <ul>
                    <li><a href = "#sejarah"><?php echo $asal?></a></li>
                    <li><a href = "#wisata"><?php echo $libur?></a></li>
                    <li><a href = "#makan"><?php echo $makan?></a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div>
                <article id="sejarah">
                    <h2 id = "sejarah"><?php echo $asal?></h2>
                    <img src = "https://share.google/images/gKqjfSZDrwsLoLNDq" alt = "Bundaran Bambu Runcing Kota <?php echo $judul?>">
                    <p><?php echo $judul?> didirikan oleh Sultan Abdurrahman pada 14 Rajab 1185 H atau bertepatan pada 23 Oktober 1771. Kota ini pada mulanya dibangun dengan cara membuka hutan yang ada di tepi persimpangan tigas sungai, yaitu Sungai Kapuas Besar, Sungai Kapuas Kecil, dan Sungai Landak. Sekarang, kampung tersebut dikenal dengan nama Kelurahan Dalam Bugis, Tempat berdirinya Masjid Abdurrahman dan Istana Kadriyah.
                    Nama <?php echo $judul?> sendiri berasal dari cerita rakyat dan mitos yang berkembang di Kalimantan Barat, Indonesia. Dikatakan bahwa nama <?php echo $judul?> berasal dari nama hantu perempuan yang dikenal sebagai kuntilanak atau <?php echo $judul?> dalam budaya Melayu. Hantu ini dipercaya merupakan roh wanita yang meninggal saat melahirkan dan sering dikisahkan menaku-nakuti orang di daerah sepi atau di tepi sungai.</p>
                    <p>Menurut legenda, ketika Sultan Syarif Abdurrahman Alkadrie pertama kali tiba di tempat yang sekarang menjadi <?php echo $judul?>, dia dan rombongannya sering diganggu oleh kuntilanak. Untuk mengusir hantu-hantu tersebut, Sultan menembakkan meriam. Lokasi di mana meriam ditembakkan kemudian menjadi tempat berduirinya Istana Kadriah, yang menjadi pusat Kota <?php echo $judul?>.</p>
                    <p>Nama <?php echo $judul?> tidak hanya memiliki cerita mistis, tetapi juga mencerminkan pengaruh budaya Melayu yang kuat di daerah tersebut. Kisah-kisah hantu kuntilanak sangat populer dalam cerita rakyat Melayu dan sering dijadikan bahan cerita yang diceritakan turun-temurun.</p>
                </article>

                <article id="wisata">
                    <h2 id = "wisata"><?php echo $libur?></h2>
                    <img src = "https://share.google/images/W5UboFh3PgQ2FRbem" alt = "Alun-Alun Kapuas">
                    <p>Alun-Alun Kapuas seluas 3 hektar menyajikan pemandangan Sungai Kapuas yang menenangkan, dilengkapi area hijau, pepohonan rindang, air mancur, serta replika Tugu Khatulistiwa. Pengunjung dapat menikmati suasana sambil melihat kapal dan perahu yang melintas, atau mencoba kapal wisata dengan tarif terjangkau untuk berlayar di sungai.</p>
                    <p>Sebagai pusat kegiatan warga <?php echo $judul?>, tempat ini sering menjadi lokasi festival dan pertunjukan, seperti Festival Dragon Boat, perayaan Hari Bakcang, hingga konser musik lokal. 
                    Selain itu, Alun-Alun Kapuas juga menawarkan pengalaman kuliner khas Kalimantan Barat. Dari chai kue, sate <?php echo $judul?>, hingga aneka makanan di warung terapung dekat dermaga, pengunjung bisa merasakan keakraban khas <?php echo $judul?> lewat hidangan dan interaksi dengan masyarakatnya.</p>
                </article>
                    
                <article id="makan">
                    <h2 id = "makan"><?php echo $makan?></h2>
                    <img src = "https://share.google/images/Rw6SfdCux7vEgy0If" alt = "Chai Kue Kukus">
                    <p>Chai Kue adalah kudapan khas Tionghoa asal <?php echo $judul?> berbahan dasar tepung beras yang diisi tumisan sayur berbumbu ebi, seperti bengkuang, rebung, talas, kacang hijau, atau kucai. Dibentuk tipis dan dikukus, chai kue memiliki tekstur kenyal dan lembut, berbeda dengan pastel yang digoreng.</p>
                    <p>Biasanya disajikan hangat dengan bawang putih goreng dan saus asam manis, serta ditata di baki berisi 15–50 potong. Rasanya gurih dan lezat menjadikannya favorit wisatawan dan oleh-oleh khas <?php echo $judul?>.</p>
                </article>
                <p>Klik di bawah untuk melihat biodata Gubernur Kalimantan Barat!</p>
                <a href="gubernur.php">Biodata Gubernur Kalimantan Barat</a>
            </div>
        </main>
    <footer>
        <p>@Website ini dibuat oleh NIM H1101241034</p>
    </footer>
    </body>
</html>
