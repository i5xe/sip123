<?php 
 
 include 'koneksi.php';
  
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['username'])) {
     header("Location: index.php");
 }
  
 if (isset($_POST['submit1'])) {
     $email = $_POST['email'];
     $password = md5($_POST['password']);
  
     $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['username'] = $row['username'];
         header("Location: index.php");
     } else {
         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
     }
 }
  
 ?>
<?php
 
 if (isset($_POST['submit2'])) {
     $rusername = $_POST['username'];
     $remail = $_POST['email'];
     $rpassword = md5($_POST['password']);
     $rcpassword = md5($_POST['cpassword']);
  
     if ($rpassword == $rcpassword) {
         $sql = "SELECT * FROM users WHERE email='$email'";
         $result = mysqli_query($conn, $sql);
         if (!$result->num_rows > 0) {
             $sql = "INSERT INTO users (username, email, password)
                     VALUES ('$rusername', '$remail', '$rpassword')";
             $result = mysqli_query($conn, $sql);
             if ($result) {
                 echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                 $username = "";
                 $email = "";
                 $_POST['rpassword'] = "";
                 $_POST['rcpassword'] = "";
             } else {
                 echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
             }
         } 
          
     } else {
         echo "<script>alert('Password Tidak Sesuai')</script>";
     }
 }
  
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
    <link rel="stylesheet" href="assets/css/sign.css" />

<style>
  .gradient-custom {
/* fallback for old browsers */
background-image: url('login.jpeg');
height :100vh;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>

  </head>
  <body>
    <!-- Start your project here-->

    <section class="vh-100 gradient-custom bg-image img-fluid" alt="Wild Landscape">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white opacity-90" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-2 mt-md-4 pb-2">

<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="tab-login"
      data-mdb-toggle="pill"
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Login</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="tab-register"
      data-mdb-toggle="pill"
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Registrasi</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
  <form class="form-signin" method="POST">
      <div class="text-center mb-3">
        <p>Silahkan Masuk :</p>
      </div>

      <!-- Email input -->
      <div class="form-outline form-white mb-4">
        <input type="email" name="email" class="form-control-lg form-control" value="<?php echo $email; ?>" required />
        <label class="form-label">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline form-white mb-4">
        <input type="password" name="password" class="form-control form-control-lg" value="<?php echo $_POST['password']; ?>" required/>
        <label class="form-label">Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Ingat Password </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Lupa Password</a>
        </div>
      </div>

      <!-- Submit button -->
      <button name="submit1" class="btn btn-primary btn-block btn-lg mb-4">Login</button>
     

    </form>
  </div>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    <form class="form-signin" method="POST">
      <div class="text-center mb-3">
        <p>Silahkan Daftar :</p>
      </div>


      <!-- Username input -->
      <div class="form-outline form-white mb-4">
        <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $rusername; ?>" required />
        <label class="form-label" for="registerUsername">Username</label>
      </div>

      <!-- Email input -->
      <div class="form-outline form-white mb-4">
        <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $remail; ?>" required />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline form-white mb-4">
        <input type="password" class="form-control form-control-lg" name="password" value="<?php echo $_POST['rpassword']; ?>" required/>
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Password input -->
      <div class="form-outline form-white mb-4">
        <input type="password" class="form-control form-control-lg" name="cpassword" value="<?php echo $_POST['rpassword']; ?>" required />
        <label class="form-label" for="registerPassword"> Confirm Your Password</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="registerCheck"
          checked
          aria-describedby="registerCheckHelpText"
        />
        <label class="form-check-label" for="registerCheck">
          Saya membaca dan menyetujui semua persyaratan
        </label>
      </div>

      <!-- Submit button -->
      <button name="submit2" class="btn btn-primary btn-block btn-lg mb-3">Registrasi</button>

    </form>
  </div>
</div>
<!-- Pills content -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- End your project here-->


    <!-- MDB -->
    <script type="text/javascript" src="./assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
