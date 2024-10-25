<?php
include 'koneksi.php'; // Koneksi ke database

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

// Loop untuk memasukkan data hobi ke tabel jika belum ada
foreach ($hobi as $hobihome) {
    $gambar = $hobihome['gambar'];
    $judul = $hobihome['judul'];
    $deskripsi = $hobihome['deskripsi'];

    // Cek apakah data sudah ada
    $sql_check = "SELECT * FROM hobby WHERE judul = '$judul' AND gambar = '$gambar'";
    $result = $conn->query($sql_check);

    if ($result->num_rows == 0) {
        // Jika data belum ada, masukkan ke dalam tabel
        $sql_insert = "INSERT INTO hobby (gambar, judul, deskripsi) VALUES ('$gambar', '$judul', '$deskripsi')";
        
        // Eksekusi query
        $conn->query($sql_insert);
    }
}

// Tutup koneksi setelah selesai
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Hobi</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Piena's Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
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
                        <a class="nav-link active" href="hobby.php">Hobi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">My Hobbies</h1>

        <div class="row">
            <?php
            include 'koneksi.php'; // Koneksi database

            // Mengambil data dari tabel hobby
            $sql = "SELECT gambar, judul, deskripsi FROM hobby";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Menampilkan data dari setiap baris
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-12 mb-3">
                        <div class="card shadow-sm d-flex justify-content-center">
                            <img src="<?= $row['gambar'] ?>" class="card-img-top mx-auto" alt="<?= $row['judul'] ?>" style="height: 500px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $row['judul'] ?></h5>
                                <p class="card-text"><?= $row['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center'>Tidak ada hobi yang ditemukan.</p>";
            }
            $conn->close(); // Menutup koneksi
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

