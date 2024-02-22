<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Here</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap">
    <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-bootstrap.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/09bad159f4.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 JS (and Popper.js, which is included in the "bootstrap.bundle.min.js") -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--Header-->
    <section class="position-relative pb-10 bg-light-light overflow-hidden">
      <nav class="navbar mb-12 navbar-expand-lg navbar-light py-4">
        <div class="container">
          <a class="navbar-brand" href="/default.php">
            <img class="img-fluid" style="height: 21px;" src="images/logo-noCursor-1.png" alt="">
          </a>
          <button class="d-lg-none navbar-burger btn px-0 rounded-pill" style="border: none;" type="button"
            data-bs-toggle="collapse" data-bs-target="#nav01" aria-controls="nav01" aria-expanded="false">
            <svg width="44" height="16" viewbox="0 0 44 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="44" height="2" rx="1" fill="black"></rect>
              <rect y="14" width="44" height="2" rx="1" fill="black"></rect>
            </svg>
          </button>
          <div class="collapse navbar-collapse" id="nav05">
            <ul class="navbar-nav ms-lg-auto me-4">
              <li class="nav-item me-4"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
              <li class="nav-item me-4"><a class="nav-link" href="#">Projects</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
            </ul>
            <div>
              <a class="btn btn-outline-dark fw-medium d-flex align-items-center rounded-pill" href="#">
                <span class="me-3">Get consulation</span>
                <svg class="rotate-45" width="10" height="11" viewbox="0 0 10 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 1.5L1 9.5" stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M9 8.83571V1.5H1.66429" stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </nav>
      <!---->
      <div class="d-none navbar-menu position-fixed top-0 start-0 bottom-0 w-75 mw-xs" style="z-index: 9999;">
        <div class="navbar-close navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-dark"
          style="opacity: 75%;"></div>
        <nav
          class="position-relative h-100 w-100 d-flex flex-column justify-content-between py-8 px-8 bg-white overflow-auto">
          <div class="d-flex align-items-center">
            <a class="me-auto h4 mb-0 text-decoration-none" href="#">
              <img class="img-fluid" style="height: 16px;" src="asitrastudio-assets/logos/logo-asi.svg" alt="">
            </a>
            <a class="navbar-close" href="#">
              <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
          <div class="py-12">
            <ul class="nav flex-column">
              <li class="nav-item mb-6"><a class="nav-link text-dark" href="#">About</a></li>
              <li class="nav-item mb-6"><a class="nav-link text-dark" href="#">Services</a></li>
              <li class="nav-item mb-6"><a class="nav-link text-dark" href="#">Projects</a></li>
              <li class="nav-item"><a class="nav-link text-dark" href="#">Contact us</a></li>
            </ul>
          </div>
          <div>
            <a class="btn btn-outline-dark mb-3 w-100 rounded-pill" href="#">Login</a><a
              class="btn btn-primary w-100 rounded-pill" href="#">Sign in</a>
          </div>
        </nav>
      </div>
    </section>
    <!---->


<?php
$host = '127.0.0.1:3306';
$db   = 'u425772716_users';
$user = 'u425772716_lruiz';
$pass = 'Athenarubyvargas1!';  // REPLACE WITH YOUR PASSWORD, but do not share it here!
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
    try {
        $stmt->execute([$email]);
        echo '<div class="container"><h1>Email saved successfully! Thank you for providing us your email. We will keep you updated with details on the website when it re-Launches. STAY TUNED! :)</h1></div>';
    } catch (\PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
</body>
</html>