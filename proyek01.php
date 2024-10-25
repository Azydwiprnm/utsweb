<?php 
include 'koneksi.php'; // Pastikan koneksi berhasil

$poyek01 = [
    [
        'paragraf1' => 'Perkenalkan, saya Azi Dwipurnama, mahasiswa Universitas Pembangunan Jaya, Program Studi Informatika, dan salah satu pendiri aplikasi HealthBuddy, bersama dua rekan saya, Gardavi Nabhan Gussasy dan Frans Alero Hutapea. Kami bertiga memiliki visi yang sama: menciptakan aplikasi yang dapat menjadi teman setia dalam menjaga kesehatan Anda sehari-hari. Kami memahami bahwa di era digital ini, akses ke layanan kesehatan yang cepat dan tepat adalah hal yang sangat penting. Dari situlah ide HealthBuddy lahir.',
        'paragraf2' => 'Selanjutnya, ada fitur note. Fitur ini memungkinkan pengguna mencatat informasi penting terkait kesehatan mereka, seperti catatan dari kunjungan dokter, perkembangan gejala, atau bahkan hasil pemeriksaan kesehatan. Note ini berfungsi sebagai jurnal kesehatan digital, yang bisa diakses kapan saja dan di mana saja, sehingga memudahkan pengguna untuk selalu mengetahui riwayat kesehatan mereka. Catatan ini juga bisa sangat membantu ketika berkunjung ke dokter, karena semua informasi terkait kondisi kesehatan sudah terdokumentasi dengan rapi di dalam aplikasi.',
        'paragraf3' => 'Namun, yang membuat HealthBuddy benar-benar berbeda dan unggul dibanding aplikasi kesehatan lainnya adalah fitur HealthPoint. Fitur ini adalah solusi inovatif untuk menemukan layanan kesehatan terdekat dengan lebih cepat dan efisien. Dalam beberapa ketukan di layar ponsel Anda, HealthPoint memungkinkan pengguna menemukan puskesmas atau rumah sakit terdekat di sekitar lokasi Anda. Bukan hanya menemukan, tapi fitur ini juga menyediakan berbagai informasi penting secara real-time.',
        'paragraf4' => 'Misalnya, dengan HealthPoint, Anda bisa melihat apakah ada kamar kosong di rumah sakit pilihan Anda, sehingga Anda tidak perlu lagi cemas saat membutuhkan rawat inap dalam keadaan darurat. Selain itu, fitur ini juga menampilkan apakah dokter yang Anda butuhkan siap menerima pasien atau tidak. Bagi Anda yang membutuhkan layanan UGD, HealthPoint juga memberikan informasi tentang ketersediaan kuota UGD di fasilitas kesehatan terdekat. Dengan demikian, Anda bisa merencanakan kunjungan ke rumah sakit atau puskesmas dengan lebih baik dan terhindar dari ketidakpastian yang sering kali terjadi dalam situasi darurat.',
        'paragraf5' => 'Selain itu, HealthPoint juga memungkinkan Anda untuk melakukan booking online. Fitur ini sangat bermanfaat bagi mereka yang ingin menghindari antrean panjang di fasilitas kesehatan. Dengan memesan tempat terlebih dahulu, Anda bisa memastikan bahwa layanan yang Anda butuhkan tersedia ketika Anda tiba di lokasi, mengurangi waktu tunggu dan membuat pengalaman Anda jauh lebih efisien. Ini adalah langkah kami untuk membantu memodernisasi cara masyarakat mengakses layanan kesehatan, dengan menggabungkan kenyamanan teknologi dan informasi yang akurat.',
        'paragraf6' => 'Sebagai mahasiswa di bidang Informatika, saya dan tim selalu berkomitmen untuk terus mengembangkan aplikasi ini. Kami menyadari bahwa teknologi adalah kunci dalam memecahkan banyak masalah dalam dunia kesehatan saat ini. Dengan HealthBuddy, kami berharap dapat membawa perubahan nyata dalam cara masyarakat mendapatkan layanan kesehatan. Kami berencana untuk terus memperbarui aplikasi ini dengan fitur-fitur baru yang sesuai dengan kebutuhan pengguna, serta terus bekerja sama dengan fasilitas kesehatan untuk memberikan layanan yang semakin baik.',
        'paragraf7' => 'Dengan demikian, HealthBuddy bukan hanya sekedar aplikasi kesehatan biasa. Kami berupaya menghadirkan solusi digital yang komprehensif untuk masalah-masalah kesehatan sehari-hari, mulai dari pengelolaan jadwal, pencatatan informasi penting, hingga akses real-time ke layanan kesehatan. Kami percaya bahwa dengan inovasi ini, kami dapat membantu Anda menjaga kesehatan dengan lebih mudah, efisien, dan tepat waktu.',
        'gambar' => 'image/proyek01foto.jpg',
        'paragraf8' => 'Jadi, jangan ragu untuk mencoba HealthBuddy dan rasakan bagaimana aplikasi ini bisa menjadi mitra terpercaya dalam perjalanan kesehatan Anda.'
    ]
];

// Memasukkan data ke dalam tabel proyek01
foreach ($poyek01 as $proyek) {
    $gambar = $proyek['gambar'];
    $paragraf1 = $proyek['paragraf1'];
    $paragraf2 = $proyek['paragraf2'];
    $paragraf3 = $proyek['paragraf3'];
    $paragraf4 = $proyek['paragraf4'];
    $paragraf5 = $proyek['paragraf5'];
    $paragraf6 = $proyek['paragraf6'];
    $paragraf7 = $proyek['paragraf7'];
    $paragraf8 = $proyek['paragraf8'];

    // Menyiapkan SQL untuk memasukkan data
    $stmt = $conn->prepare("INSERT INTO proyek01 (gambar, paragraf1, paragraf2, paragraf3, paragraf4, paragraf5, paragraf6, paragraf7, paragraf8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
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
        <h1 class="judulberita1page" style="color: #2c3e50; text-align: center;">Penurunan Nilai Saham pada 2024</h1>
        <div style="text-align: center; margin-top: 20px;">
            <img src="image/proyek01foto.jpg" alt="Thumbnail Berita" class="fotoberita1" style="max-width: 100%; height: auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
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

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>