<?php
include 'koneksi.php';

$tentang = [
    [
        'paragraf1' => 'Website ini, yang saya beri nama Piena s Web, memiliki makna khusus bagi saya. Nama Piena diambil dari kata Purnama yang merupakan bagian dari nama saya, Azi Dwipurnama. Dalam bahasa Italia, Piena berarti purnama, yang melambangkan cahaya penuh dan kesempurnaan. Saya memilih nama ini sebagai simbol dari harapan saya untuk selalu memberikan yang terbaik dan menerangi jalan menuju pencapaian di bidang yang saya tekuni, khususnya di dunia informatika.',
        'paragraf2' => 'Perkenalkan, saya Azi Dwipurnama, mahasiswa Universitas Pembangunan Jaya dari Program Studi Informatika. Sebelumnya, saya adalah lulusan SMA jurusan IPA, dan ketika memutuskan untuk melanjutkan studi di bidang informatika, saya belum memiliki pengalaman apapun terkait teknologi dan pemrograman. Meskipun begitu, saya melihat jurusan ini sebagai tantangan sekaligus peluang untuk mempelajari hal-hal baru di dunia yang semakin digital ini. Dengan semangat belajar dan keinginan untuk berkembang, saya siap mengeksplorasi dan menguasai ilmu yang relevan dengan bidang informatika.'
    ]
];

// Memasukkan data ke dalam tabel aboutus
if ($conn) {
    foreach ($tentang as $tentangkamihome) {
        $paragraf1 = $conn->real_escape_string($tentangkamihome['paragraf1']);
        $paragraf2 = $conn->real_escape_string($tentangkamihome['paragraf2']);

        $sql = "INSERT  INTO about (paragraf1, paragraf2) VALUES ('$paragraf1', '$paragraf2')";
        $conn->query($sql);
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
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
                        <a class="nav-link" href="projects.php">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="aboutUs.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="hobby.php">Hobi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <div class="container mt-5 box-container">
        <h1 class="text-center tentangUPJ mb-4">Tentang Kami</h1>
        <br>
        <br>
        <?php foreach ($tentang as $tentangkamihomekami): ?>
            <p class="text-center isitentangupj"><?= $tentangkamihome['paragraf1'] ?></p>
            <br>
            <br>
            <p class="text-center isitentangupj"><?= $tentangkamihome['paragraf2'] ?></p>
        <?php endforeach; ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!-- Footer -->
    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
