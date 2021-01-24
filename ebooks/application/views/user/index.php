<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testing User</title>
</head>
<body>
    <table cellpadding="10" border="1">
        <tr>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php foreach ($data as $key => $value) { ?>
        <tr>
            <td><?= $value ?></td>
            <td><?= $key ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>