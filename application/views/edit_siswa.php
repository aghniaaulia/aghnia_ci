<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Edit Data Siswa</h1>
  <div class="tambah">
  <form action="<?= base_url() ?>admin/update" method="post">
    <input placeholder="masukkan nis" type="hidden" name="nis" value="<?= $edit ['nis']?>">
    <input placeholder="masukkan nama" type="text" name="nama" value="<?= $edit ['nama']?>"><br><br>
    <select name="alamat">
        <option value="">--pilih alamat--</option>
        <?php foreach($alamat as $al) : ?>
          <?php if($al == $edit['alamat']) : ?>
            <option value="<?=$al; ?>" selected><?=$al; ?></option>
        <?php else : ?>
          <option value="<?=$al; ?>"> <?=$al; ?> </option>
        <?php endif; ?>
        <?php endforeach; ?>
    </select><br><br>
    <input placeholder="masukkan no tlp" type="text" name="no_tlp" value="<?= $edit ['no_tlp']?>"><br><br>
    <input type="submit" value="EDIT">
  </form>
</div>
</body>
</html>