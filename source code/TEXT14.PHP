<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama"><br><br>
        <label>Tanggal Lahir: </label>
        <input type="text" name="tanggal_lahir"><br><br>
        <label>Pekerjaan: </label>
        <input type="text" name="pekerjaan"><br><br>
        <input type="submit" value="Kirim">
    </form><br>
    <?php
    echo 'Selamat Datang ' . $_POST['nama']
    ?><br>
    <?php
    echo 'Tanggal Lahir Anda ' . $_POST['tanggal_lahir']
    ?><br>
    <?php
    echo 'Pekerjaan Anda Sebagai ' . $_POST['pekerjaan']
    ?>
</body>
</html>