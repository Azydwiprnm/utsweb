<?php 
include 'koneksi.php'; // Pastikan koneksi berhasil

$proyek3 = [
    [
        'gambar' => 'image/proyek03foto.jpg',
        'paragraf1' => 'Perkenalkan, saya Azi Dwipurnama, bersama dua rekan saya, Muhammad Fadhil Mulyana dan Frans Alero Hutapea, mahasiswa Universitas Pembangunan Jaya, Program Studi Informatika. Kami bertiga mengembangkan sebuah proyek DLANS Apparel sebagai bagian dari tugas akhir semester 1. Dalam proyek ini, kami memilih untuk bergerak di bidang clothing, yang bertujuan memberikan kebebasan bagi pelanggan dalam mengekspresikan gaya mereka melalui pakaian yang sesuai dengan selera dan kebutuhan masing-masing.',
        'paragraf2' => 'DLANS Apparel berfokus pada dua jenis layanan utama yang kami tawarkan kepada konsumen. Pertama, kami menyediakan opsi pemesanan baju custom satuan, di mana pelanggan dapat membuat baju dengan desain yang sepenuhnya personal. Layanan ini memungkinkan setiap individu untuk memiliki pakaian yang benar-benar unik dan sesuai dengan kepribadian mereka. Pelanggan bebas untuk mengirimkan desain mereka sendiri, atau meminta tim kreatif kami untuk membantu mengembangkan konsep desain yang diinginkan. Kami percaya bahwa setiap orang memiliki gaya yang berbeda-beda, dan melalui layanan custom ini, kami memberi kesempatan kepada mereka untuk memiliki baju yang hanya mereka miliki.',
        'paragraf3' => 'Selain layanan custom, kami juga menawarkan koleksi baju siap pakai. Koleksi ini terdiri dari baju dengan desain yang sudah kami siapkan, yang mengikuti tren mode terkini, sekaligus mempertahankan ciri khas DLANS Apparel yang unik. Setiap desain dipikirkan dengan matang untuk menggabungkan unsur kenyamanan, kualitas bahan, dan estetika yang menarik. Ini membuat koleksi baju kami tidak hanya stylish, tapi juga cocok untuk berbagai aktivitas sehari-hari. Kami memastikan bahwa setiap produk yang kami tawarkan berkualitas tinggi, baik dari segi bahan maupun jahitan, sehingga pelanggan selalu mendapatkan yang terbaik.',
        'paragraf4' => 'Kami memilih untuk fokus di bidang clothing karena kami melihat potensi besar dalam industri fashion yang terus berkembang, terutama dalam hal personalisasi dan custom clothing. Banyak orang yang ingin tampil beda dan memiliki pakaian yang mencerminkan identitas mereka, dan DLANS Apparel hadir untuk memenuhi kebutuhan itu. Kami ingin menjadi platform di mana setiap pelanggan bisa menemukan pakaian yang sesuai dengan karakter dan kebutuhan mereka, baik untuk acara formal, kasual, hingga gaya sehari-hari.',
        'paragraf5' => 'Sebagai mahasiswa Informatika, kami juga memanfaatkan teknologi dalam pengembangan usaha ini. Proses pemesanan di DLANS Apparel kami rancang agar mudah diakses secara online, sehingga pelanggan dapat dengan cepat memilih atau memesan baju sesuai keinginan mereka. Dalam waktu dekat, kami berencana untuk mengembangkan lebih lanjut fitur-fitur yang memungkinkan pelanggan mendesain baju mereka secara langsung melalui platform digital, sehingga pengalaman memesan baju custom menjadi lebih mudah dan interaktif.',
        'paragraf6' => 'Meski DLANS Apparel adalah tugas akhir semester 1 kami, usaha ini bukan hanya sekedar proyek akademis. Kami melihatnya sebagai peluang nyata untuk memasuki dunia wirausaha dengan menghadirkan produk yang relevan dan berkualitas bagi pasar yang lebih luas. Melalui DLANS Apparel, kami berharap dapat belajar lebih banyak tentang industri fashion, pengelolaan bisnis, dan tentunya, bagaimana menciptakan produk yang benar-benar dibutuhkan oleh masyarakat.',
        'paragraf7' => 'Kami percaya bahwa kunci sukses dalam usaha ini adalah inovasi, kreativitas, dan komitmen terhadap kualitas. DLANS Apparel bukan sekadar bisnis clothing, tapi juga wujud dari semangat kami untuk menciptakan sesuatu yang bermakna bagi masyarakat. Kami ingin terus berkembang, mengasah kemampuan wirausaha kami, dan tentunya, memberikan kontribusi nyata dalam industri fashion melalui produk yang kami tawarkan.',
        'paragraf8' => 'Dengan demikian, DLANS Apparel adalah langkah awal kami dalam dunia wirausaha, di mana kami menggabungkan kreativitas dengan teknologi untuk menciptakan produk yang unik dan berkualitas. Kami mengundang Anda untuk bergabung dengan kami dalam perjalanan ini, menemukan pakaian yang sesuai dengan karakter Anda, dan merasakan pengalaman berbelanja yang berbeda di DLANS Apparel.',
    ]
];

// Memasukkan data ke dalam tabel proyek01
foreach ($proyek3 as $proyekkk) {
    $gambar = $proyekkk['gambar'];
    $paragraf1 = $proyekkk['paragraf1'];
    $paragraf2 = $proyekkk['paragraf2'];
    $paragraf3 = $proyekkk['paragraf3'];
    $paragraf4 = $proyekkk['paragraf4'];
    $paragraf5 = $proyekkk['paragraf5'];
    $paragraf6 = $proyekkk['paragraf6'];
    $paragraf7 = $proyekkk['paragraf7'];
    $paragraf8 = $proyekkk['paragraf8'];
    
    // Menyiapkan SQL untuk memasukkan data
    $stmt = $conn->prepare("INSERT INTO proyek3 (gambar, paragraf1, paragraf2, paragraf3, paragraf4, paragraf5, paragraf6, paragraf7, paragraf8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $gambar, $paragraf1, $paragraf2, $paragraf3, $paragraf4, $paragraf5, $paragraf6, $paragraf7, $paragraf8);
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
        <h1 class="judulberita1page" style="color: #2c3e50; text-align: center;">Program Interpreneurship</h1>
        <div style="text-align: center; margin-top: 20px;">
            <img src="image/proyek03foto.jpg" alt="Thumbnail Berita" class="fotoberita1" style="max-width: 100%; height: auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
        </div>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf1; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf2; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf3; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf4; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf5; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf6; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf7; ?></p>
        <p style="text-align: justify; margin-top: 20px;"><?= $paragraf8; ?></p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
