<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>TEST VIEWS CI</title>
</head>
<body>
      <table>
            <tr>
                 <td>Nama</td>
                 <td>Kelas</td>
            </tr>

            <?php
                 foreach ($data as $key => $value) {
            ?>
            <tr>
                 <td><?= $value ?></td>
                 <td><?= $key ?></td>
            </tr>
            <?php } ?>
      </table>
</body>
</html>