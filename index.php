<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Modern Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>Beranda</title>
    <style>
        /* Modern achromatic background for the highlight section */
        .highlight-section {
            background-color: #333;
            color: #fff;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        /* Styling for the typing effect text */
        .typing-text-1,
        .typing-text-2 {
            font-size: 2.5rem;
            font-weight: 700;
            white-space: nowrap;
            overflow: hidden;
            border-right: 4px solid white;
            animation: typing 1.5s steps(30) 1 normal both, blink .5s step-end infinite;
            color: #f0c040; /* Highlight color for typing text */
        }
        .typing-text-2 {
            animation-delay: 1.5s;
        }
        /* Keyframes for typing and blink animations */
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }
        @keyframes blink {
            from { border-color: transparent; }
            to { border-color: white; }
        }
        .profile-card img {
            width: 150px;
            border-radius: 100%; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-card img:hover {
            transform: scale(1.05);
        }
        /* Styling for the card component */
        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-weight: 600;
            font-size: 1.5rem;
            color: #333; /* Darker color for card titles */
        }
        .card-text {
            font-size: 1.1rem;
            color: #555; /* Softer text color */
        }
        /* Hobi Section Styling */
        .tentangUPJ {
            font-weight: 700;
            font-size: 2.5rem;
            color: #333;
            margin-top: 20px;
        }
        .isitentangupj {
    font-size: 1.2rem;
    line-height: 1.8;
    max-width: 800px; /* Pastikan lebar maksimal untuk menjaga kerapian */
    color: #555;
    text-align: justify; /* Rata kanan-kiri */
    margin: 0 auto; /* Agar berada di tengah container */
}

        /* Button styling */
        .btn-primary {
            background-color: #5c5c5c;
            border-color: #5c5c5c;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-weight: 600; /* Bold text for buttons */
        }
        .btn-primary:hover {
            background-color: #4a4a4a;
            transform: scale(1.05);
        }
        .box-container {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }
        /* Additional styles for sections */
        .content {
            padding: 50px 0;
        }
    </style>
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
                        <a class="nav-link active" href="home.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="hobby.php">Hobi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Highlight Section with Typing Effect -->
    <section class="highlight-section">
        <div class="circle small"></div>
        <div class="circle large"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Text with Typing Effect -->
                <div class="col-lg-12">
                    <p class="typing-text-1">Dikulum-kulum, dikunyah-kunyah</p>
                    <p class="typing-text-2">Assalamuailaikum, semuanya</p>
                    <br>
                <br>
                <br>
                <br>
                </div>
                <!-- Image centered below the text -->
                <div class="col-lg-12 profile-card rounded-circle">
                    <img src="image/home01.jpg" alt="Gambar Hiasan">
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <?php
$proyek = [
    [
        'gambar' => 'image/proyek01foto.jpg',
        'judul' => 'Proyek Pengembangan Aplikasi',
        'deskripsi' => 'HealthBuddy hadir dengan berbagai fitur praktis.',
        'link' => 'proyek01.php'
    ],
    [
        'gambar' => 'image/proyek02fotoo.jpg',
        'judul' => 'Proyek Pemeliharaan Lingkungan',
        'deskripsi' => 'Program pemeliharaan lingkungan di RT 01 RW 07.',
        'link' => 'proyek02.php'
    ],
    [
        'gambar' => 'image/proyek03foto.jpg',
        'judul' => 'Program Interpreneursip',
        'deskripsi' => 'DLANS Apparel fokus pada dua jenis layanan.',
        'link' => 'proyek03.php'
    ]
];
foreach ($proyek as $proyekhome) {
    $gambar = $proyekhome['gambar'];
    $judul = $proyekhome['judul'];
    $deskripsi = $proyekhome['deskripsi'];
    $link = $proyekhome['link'];
    // Menyiapkan SQL untuk memasukkan data
    $sql = "INSERT INTO projects (gambar, judul, deskripsi, link) VALUES ('$gambar', '$judul', '$deskripsi', '$link')";
}
?>

<div class="container content box-container">
    <h1 class="text-center mt-5 mb-4">Proyek Saya</h1>
    <div class="row mt-4">
        <?php foreach ($proyek as $p): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="<?= $p['gambar'] ?>" class="card-img-top" alt="<?= $p['judul'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['judul'] ?></h5>
                        <p class="card-text"><?= $p['deskripsi'] ?></p>
                        <a href="<?= $p['link'] ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
$hobi = [
    [
        'gambar' => 'image/home_hobi_maingame.jpg',
        'judul' => 'Bermain Game',
        'deskripsi' => 'Saya suka bermain game, terutama game bergenre aksi, strategi, dan multiplayer online.'
    ],
    [
        'gambar' => 'image/home_hobi_menontonbolaa.jpg',
        'judul' => 'Menonton Sepakbola',
        'deskripsi' => 'Sepakbola adalah olahraga favorit saya. Saya selalu mengikuti pertandingan-pertandingan besar, baik di liga lokal maupun internasional.'
    ],
    [
        'gambar' => 'image/home_hobi_olahragaa.jpg',
        'judul' => 'Olahraga',
        'deskripsi' => 'Olahraga membantu saya tetap sehat dan bugar. Saya suka berlari, bersepeda, dan home workout.'
    ]
];
foreach ($hobi as $hobihome) {
    $gambar = $hobihome['gambar'];
    $judul = $hobihome['judul'];
    $deskripsi = $hobihome['deskripsi'];
    // SQL untuk memasukkan data ke tabel hobi
    $sql = "INSERT INTO hobby (gambar, judul, deskripsi) VALUES ('$gambar', '$judul', '$deskripsi')";
}
?>
<!-- Hobi Section -->
<div class="container content box-container">
    <h1 class="text-center mt-5 mb-4">Hobi Saya</h1>
    <div class="row mt-4">
        <?php foreach ($hobi as $hobihome): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="<?= $hobihome['gambar'] ?>" class="card-img-top" alt="<?= $hobihome['judul'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $hobihome['judul'] ?></h5>
                        <p class="card-text"><?= $hobihome['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php 
$tentang = [
    [
        'paragraf1' => 'Website ini, yang saya beri nama Piena s Web, memiliki makna khusus bagi saya. Nama Piena diambil dari kata Purnama yang merupakan bagian dari nama saya, Azi Dwipurnama. Dalam bahasa Italia, Piena berarti purnama, yang melambangkan cahaya penuh dan kesempurnaan. Saya memilih nama ini sebagai simbol dari harapan saya untuk selalu memberikan yang terbaik dan menerangi jalan menuju pencapaian di bidang yang saya tekuni, khususnya di dunia informatika.',
        'paragraf2' => 'Perkenalkan, saya Azi Dwipurnama, mahasiswa Universitas Pembangunan Jaya dari Program Studi Informatika. Sebelumnya, saya adalah lulusan SMA jurusan IPA, dan ketika memutuskan untuk melanjutkan studi di bidang informatika, saya belum memiliki pengalaman apapun terkait teknologi dan pemrograman. Meskipun begitu, saya melihat jurusan ini sebagai tantangan sekaligus peluang untuk mempelajari hal-hal baru di dunia yang semakin digital ini. Dengan semangat belajar dan keinginan untuk berkembang, saya siap mengeksplorasi dan menguasai ilmu yang relevan dengan bidang informatika.'
    ]
];
if ($conn) {
    foreach ($tentang as $tentangkamihome) {
        $paragraf1 = $tentangkamihome['paragraf1'];
        $paragraf2 = $tentangkamihome['paragraf2'];

        $sql = "INSERT INTO aboutus (paragraf1, paragraf2) VALUES ('$paragraf1', '$paragraf2')";
}}
$conn->close();
?>
<div class="container mt-5  box-container">
    <?php foreach ($tentang as $tentangkamihomekami): ?>
    <h1 class="text-center tentangUPJ mb-4">Tentang Kami</h1>
    <p class="text-center  isitentangupj"><?= $tentangkamihome['paragraf1'] ?></p>
    <p class="text-center  isitentangupj"><?= $tentangkamihome['paragraf2'] ?></p>
    <?php endforeach; ?>
</div> 
    <?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>