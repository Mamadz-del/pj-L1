<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tolong</h1>

    <form action="<?= base_url() ?>Login/verifikasi" method="post">
        <input type="text" name="username" placeholder="username">
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <input type="submit" value="LOGIN">
    </form>
    <a href="<?= base_url('Registrasi') ?>">Daftar</a></p>
</body>
</html>