<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Fun Learning</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
    body {
      background-color: #f0f8ff;
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      background-color: #ffffff;
    }
    .card-body {
      padding: 2rem;
    }
    .logo-img img {
      border-radius: 10px;
      margin-bottom: 1rem;
    }
    .form-label {
      color: #333;
      font-weight: bold;
    }
    .form-control {
      border-radius: 10px;
      border: 1px solid #ddd;
      padding: 10px;
    }
    .btn-primary {
      background-color: #ff8c00;
      border: none;
      border-radius: 10px;
      padding: 10px;
      color: #fff;
      font-size: 1.2rem;
    }
    .btn-primary:hover {
      background-color: #ffa500;
    }
    .text-center {
      color: #333;
      font-size: 1.2rem;
    }
    .footer-text {
      margin-top: 1rem;
      font-size: 0.9rem;
      color: #555;
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.png" width="120" alt="Logo">
                </a>
                <p class="text-center">Silakan login untuk melanjutkan!</p>
                <form action="proses_login.php" method="post">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" required class="form-control" id="username" aria-describedby="usernameHelp">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" required class="form-control" id="password">
                  </div>
                  <button type="submit" name="login" class="btn btn-primary w-100 py-2 mb-4">Login</button>
                  <!-- <p class="text-center footer-text">Belum punya akun? <a href="./register.php">Daftar di sini</a></p> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
