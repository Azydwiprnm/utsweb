<?php include 'koneksi.php';
$sql = "CREATE TABLE IF NOT EXISTS projects (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    // Tabel berhasil dibuat
} else {
    echo "Error membuat tabel: " . $conn->error;
}

// Data proyek yang akan dimasukkan ke database
$projects = [
    [
        'title' => 'Proyek Pengembangan Aplikasi',
        'description' => 'Proyek ini melibatkan pembangunan gedung perkantoran baru di kawasan pusat bisnis Jakarta. Tujuan proyek ini adalah meningkatkan produktivitas di sektor bisnis.',
        'image' => 'image/proyek01foto.jpg',
        'link' => 'proyek01.php'
    ],
    [
        'title' => 'Proyek Pemeliharaan Lingkungan',
        'description' => 'Proyek ini bertujuan untuk menjaga kebersihan lingkungan dan meningkatkan kesadaran masyarakat.',
        'image' => 'image/proyek02fotoo.jpg',
        'link' => 'proyek02.php'
    ],
    [
        'title' => 'Proyek Pembelajaran Online',
        'description' => 'Proyek ini fokus pada pengembangan platform pembelajaran online yang interaktif.',
        'image' => 'image/proyek03foto.jpg',
        'link' => 'proyek03.php'
    ]
];

// Memasukkan data ke tabel
foreach ($projects as $project) {
    // Cek apakah data sudah ada untuk menghindari duplikasi
    $checkSql = "SELECT * FROM projects WHERE title = '{$project['title']}'";
    $result = $conn->query($checkSql);
    
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO projects (title, description, image, link) 
                VALUES ('{$project['title']}', '{$project['description']}', '{$project['image']}', '{$project['link']}')";

        if ($conn->query($sql) === TRUE) {
            // Proyek berhasil ditambahkan
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Proyek</title>
    <style>
        .btn-primary {
            background-color: #5c5c5c;
            border-color: #5c5c5c;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #4a4a4a;
            transform: scale(1.05);
        }
        footer {
            width: 100%;
            position: relative;
            bottom: 0;
            left: 0;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .card-img-top {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-left: 15px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
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
                        <a class="nav-link active" href="projects.php">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hobby.php">Hobi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Proyek Saya</h1>

        <div class="row">
            <?php
            // Ambil data proyek dari database
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-12 mb-4">
                        <div class="card shadow-sm d-flex flex-row">
                            <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['title'] . '</h5>
                                <p class="card-text">' . $row['description'] . '</p>
                                <a href="' . $row['link'] . '" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "Belum ada proyek.";
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </div>
    </div>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Azi Dwipurnama. All rights reserved</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>