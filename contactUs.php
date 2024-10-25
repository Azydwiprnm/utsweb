<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kontak Kami</title>
</head>
<style>
    .content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
</style>
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
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contactUs.php">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Proyek</a>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Konten Kontak Kami -->
    <div class="content">
        <div class="text-dark text-center">
            <h1 class="mb-4">Halo, Saya Azi Dwipurnama!</h1>
            <p class="mb-4 fs-2">Ingin ngobrol? Temukan saya di sini!</p>
            <div class="social-links mb-4">
                <a href="https://www.facebook.com/muhammadazy.dwi/about?locale=id_ID" class="text-dark me-3"><i class="fa-brands fa-facebook fa-4x"></i></a>
                <a href="https://www.youtube.com/@azydwipurnama4670" class="text-dark me-3"><i class="fa-brands fa-youtube fa-4x"></i></a>
                <a href="https://www.instagram.com/azydwiprnm/profilecard/?igsh=MTdvMnAxY3FwMzh4aA==" class="text-dark me-3"><i class="fa-brands fa-instagram fa-4x"></i></a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
