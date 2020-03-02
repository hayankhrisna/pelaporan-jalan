<!DOCTYPE html>
<html>

<head>
  <title>INPUT CETAK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
</head>

<body>
  <div class="login-box">
  <form action="tambahsqlregister.php" class="inner-login" method="post">  
    <h1>REGISTER</h1>
    <div class="textbox">
      <input type="text" placeholder="Nama" name="nama" id="nama">
    </div>

    <div class="textbox">
      <input type="number" placeholder="No Telp" name="no_telp" id="no_telp">
    </div>

    <div class="textbox">
      <input type="text" placeholder="Username" name="username" id="username">
    </div>

    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder="password" name="password" id="password">
    </div>
    <br>
   
    <input type="submit" class="btn" name="register" id="register" value="Register">
    <p><a href="index.php">Cancel</p>
  </div>
</body>
<style>
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(../img/img.jpg) no-repeat;
    background-color: #333;
    background-size: cover;
  }

  .login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    background: rgba(0, 0, 0, 0.5);
    padding: 50px;
    border-radius: 20px;
  }

  .login-box h1 {
    float: left;
    font-size: 40px;
    border-bottom: 6px solid #fcaf50;
    margin-bottom: 50px;
    padding: 13px 0;
  }

  .textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #fcaf50;
  }

  .textbox i {
    width: 26px;
    float: left;
    text-align: center;
  }

  .textbox input {
    border: none;
    outline: none;
    background-color: transparent;
    color: #fff;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
  }

  .btn {
    width: 100%;
    background-color: transparent;
    border: 2px solid #fcaf50;
    color: #fff;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
  }

  .btn:hover {
    background-color: #fcaf50;
    color: #000;
    transition: .5s;
  }

  .btn:active {
    background-color: #000;
    color: #fcaf50;
  }
</style>

</html>