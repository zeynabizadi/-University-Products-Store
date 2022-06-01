<?php

session_start();

include('../resources/config/config.php');
include('../resources/routes/routes.php');

if (isset($_SESSION['loggedin'])) {
  if (isset($_SESSION['isuser'])) header('location:' . $path . '/user');
  else if (isset($_SESSION['isadmin'])) header('location:' . $path . '/admin');
}

?>

<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://blackiq.github.io/cdn-university-bookstore/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://blackiq.github.io/cdn-university-bookstore/css/style.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>ورود به حساب کاربری</title>
</head>

<body>
  <?php include('../resources/widgets/navbar.php'); ?>
  <main class="container" style="text-align: center; padding-top: 5%;">
    <h1>ورود</h1>
    <br>
    <?php
    if (count($errors) != 0) {
    ?>
      <ul>
        <?php
        foreach ($errors as $error) {
        ?>
          <li><?php echo $error; ?></li>
        <?php
        }
        ?>
      </ul>
      <br>
    <?php
    }
    ?>
    <form action="login.php" method="post">
      <div class="mb-3 col-md-4">
        <label for="exampleInputEmail1" class="form-label">آدرس ایمیل (با حروف کوچک وارد کنید)</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 col-md-4">
        <label for="exampleInputPassword1" class="form-label">رمز عبور</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <br>
      <div class="mb-3 col-md-4">
        <button name="login" type="submit" class="btn btn-dark w-100">ورود به حساب کاربری خود </button>
      </div>
      <br>
      <label class="form-check-label" for="Check1">کاربر جدید هستید؟ <a style="color: #990033; text-decoration: none;" href="register.php">ثبت نام کنید</a></label>
    </form>
    <br>
  </main>
  <?php include('../resources/widgets/modal-navbar.php'); ?>
  <?php include('../resources/widgets/footer.php'); ?>

  <script src="../resources/js/jquery-3.6.0.min.js"></script>
  <script src="../resources/js/script.js"></script>
  <script src="../resources/js/mdb.min.js"></script>
</body>

</html>