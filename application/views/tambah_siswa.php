<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Tambah Data Siswa</h1>
  <div class="tambah">
  <form action="tambah_siswa/tambah" method="post">
    <input placeholder="masukkan nama" type="text" name="nama"><br><br>
    <select name="alamat">
      <option value="">--pilih alamat--</option>
        <option value="pekalongan">pekalongan</option>
        <option value="batang">batang</option>
        <option value="pemalang">pemalang</option>
        <option value="tegal">tegal</option>
    </select><br><br>
    <input placeholder="masukkan no tlp" type="text" name="no_tlp"><br><br>
    <input type="submit" value="SIMPAN">
  </form>
</div>
</body>
</html>