<?php 
include 'koneksi.php'; // Pastikan koneksi berhasil

$poyek02 = [
    [
        'gambar' => 'image/proyek02fotoo.jpg',
        'paragraf1' => 'Perkenalkan, saya Azi Dwipurnama, bersama tim saya yang terdiri dari Muhammad Aulia Rifki, Frans Alero Hutapea, Gardavi Nabhan Gussasy, dan Dava Pangestu Putera, kami menjalankan sebuah program pemeliharaan lingkungan di lingkungan RT 01 RW 07, dengan fokus pada pengelolaan sampah di lapangan PJMI. Program ini muncul dari keprihatinan kami terhadap kondisi lapangan yang sering kali penuh dengan sampah bertebaran, terutama di area sekitar pengajian anak-anak yang terletak di samping lapangan.',
        'paragraf2' => 'Masalah utama yang kami temukan adalah overload-nya tempat sampah yang ada, yang mengakibatkan sampah meluber dan berserakan di sekitar lapangan. Padahal, area tersebut sering digunakan oleh anak-anak untuk kegiatan pengajian, dan kondisi yang kotor tentu tidak mendukung lingkungan yang sehat dan nyaman bagi mereka.',
        'paragraf3' => 'Namun, yang membuat HealthBuddy benar-benar berbeda dan unggul dibanding aplikasi kesehatan lainnya adalah fitur HealthPoint. Fitur ini adalah solusi inovatif untuk menemukan layanan kesehatan terdekat dengan lebih cepat dan efisien. Dalam beberapa ketukan di layar ponsel Anda, HealthPoint memungkinkan pengguna menemukan puskesmas atau rumah sakit terdekat di sekitar lokasi Anda. Bukan hanya menemukan, tapi fitur ini juga menyediakan berbagai informasi penting secara real-time.',
        'paragraf4' => 'Oleh karena itu, kami memutuskan untuk mengambil langkah konkret dengan membagikan dan memasang tempat sampah tambahan di sekitar lapangan PJMI. Harapan kami, dengan adanya tempat sampah yang lebih memadai, masyarakat dapat lebih mudah membuang sampah pada tempatnya, sehingga kebersihan area ini tetap terjaga. Tidak hanya demi kenyamanan, tapi juga demi kesehatan anak-anak yang beraktivitas di sana, serta seluruh warga sekitar.',
        'paragraf5' => 'Program ini bukan hanya tentang menyediakan fasilitas, tapi juga menjadi langkah kami dalam meningkatkan kesadaran lingkungan di kalangan warga setempat. Kami percaya bahwa upaya kecil seperti ini dapat membawa perubahan besar, terutama jika dilakukan secara konsisten dan melibatkan seluruh elemen masyarakat.',
        'paragraf6' => 'Kami berharap, melalui program ini, lapangan PJMI dapat menjadi ruang publik yang lebih bersih dan nyaman bagi semua orang, terutama anak-anak yang sering beraktivitas di sana. Mari bersama-sama menjaga lingkungan kita agar tetap asri dan bersih.',
        
    ]
];

// Memasukkan data ke dalam tabel proyek01
foreach ($poyek02 as $proyekk) {
    $gambar = $proyekk['gambar'];
    $paragraf1 = $proyekk['paragraf1'];
    $paragraf2 = $proyekk['paragraf2'];
    $paragraf3 = $proyekk['paragraf3'];
    $paragraf4 = $proyekk['paragraf4'];
    $paragraf5 = $proyekk['paragraf5'];
    $paragraf6 = $proyekk['paragraf6'];
    
    // Menyiapkan SQL untuk memasukkan data
    $stmt = $conn->prepare("INSERT INTO proyek02 (gambar, paragraf1, paragraf2, paragraf3, paragraf4, paragraf5, paragraf6) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $gambar, $paragraf1, $paragraf2, $paragraf3, $paragraf4, $paragraf5, $paragraf6);
    if ($stmt->execute()) {
        
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close(); // Menutup statement
}

$conn->close(); // Menutup koneksi
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tentang Kami</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Piena's Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contactUs.php">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projects.php">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="aboutUs.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="hobby.php">Hobi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 class="judulberita1page" style="color: #2c3e50; text-align: center;">Program Pemeliharaan Lingkungan</h1>
        <div style="text-align: center; margin-top: 20px;">
            <img src="image/proyek02fotoo.jpg" alt="Thumbnail Berita" class="fotoberita1" style="max-width: 100%; height: auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
        </div>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf1; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf2; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf3; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf4; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf5; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf6; ?></p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
