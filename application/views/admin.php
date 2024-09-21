<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Halaman Admin</h1>

  <h5>Tabel Data Siswa</h5>
  
  <a href="<?php echo base_url('tambah_siswa'); ?>">tambah data</a>

  <table border="1" id="siswa">
    <tr>
      <th>NIS</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>No telp</th>
      <th colspan="2">Aksi</th>
    </tr>
      <?php foreach($siswa as $ssw) : ?>
     <tr>
        <td><?=$ssw['nis']?></td>
        <td><?=$ssw['nama']?></td>
        <td><?=$ssw['alamat']?></td>
        <td><?=$ssw['no_tlp']?></td>
        <td><a href="<?= base_url(); ?>admin/edit/<?= $ssw['nis'] ?>">edit</a></td>
        <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>admin/hapus/<?= $ssw['nis'] ?>">hapus</a></td>
     </tr>
     <?php endforeach; ?>
    </tr>
  </table>

</body>
</html>