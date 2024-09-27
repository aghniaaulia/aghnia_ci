<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Halaman Login</h1><br>
  <?= $this->session->flashdata('message'); ?>
  
  <form action="<?= base_url() ?>login/verivikasi" method="post">
    <input type="text" placeholder="masukkan username" name="username"><br><br>
    <input type="password" placeholder="masukkan password" name="password"><br><br>
    
    <input type="submit" value="lOGIN">
  </form>

  <p>Belum Punya Akun ? <a href="<?= base_url() ?>daftar">daftar</a></p>

</body>
</html>