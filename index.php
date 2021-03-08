<?php

require 'functions.php';
$karyawan = query ("SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Halaman Tampil Karyawan </title>

<body>
    <h1> Daftar Karyawan </h1>

        <table border="1" cellpadding="10" cellspacing="0">

        <tr>
        <th>Company</th>
        <th>Department</th>
        <th>Name</th>
        <th>Title</th>
        <th>Sallary</th>
        </tr>

    <?php foreach ($karyawan as $row ) : ?>
        <tr>
        <td><?= $row["company"]; ?></td>
        <td><?= $row["department"]; ?></td>
        <td><?= $row["name"]; ?></td>
        <td><?= $row["title"]; ?></td>
        <td><?= $row["salary"]; ?></td>
        </tr>
    <?php endforeach; ?>

        </table>
</body>
</head>
</html>