<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Halaman Alamat</h1>

  <h5>Tabel Data Alamat</h5>
  
  <a href="<?php echo base_url('alamat/tambah_alamat'); ?>">tambah data</a>

  <table border="1" id="siswa">
    <tr>
      <th>ID</th>
      <th>Alamat</th>
      <th>Kode Pos</th>
      <th colspan="2">Aksi</th>
    </tr>
      <?php foreach($alamat as $al) : ?>
     <tr>
        <td><?=$al['id']?></td>
        <td><?=$al['alamat']?></td>
        <td><?=$al['kode_pos']?></td>
        <td><a href="<?= base_url(); ?>alamat/edit/<?= $al['id'] ?>">edit</a></td>
        <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>alamat/hapus/<?= $al['id'] ?>">hapus</a></td>
     </tr>
     <?php endforeach; ?>
    </tr>
  </table>

</body>
</html>