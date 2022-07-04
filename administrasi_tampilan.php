<?php
include "administrasi.php"
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit/Hapus Data</title>
  </head>
  <body>
    <table align="center">
      <form action="administrasi_edit.php" method="post">
        <tr>
          <td> Masukkan Pilihan(Update/Delete)    <input style="text-transform:lowercase; "type="text" name="pilihan"></td>
        </tr>
        <tr>
          <td> Masukkan Nama Tabel    <input style="text-transform:lowercase; "type="text" name="tabel"></td>
        </tr>
        <tr>
          <td> Masukkan Username    <input style="text-transform:lowercase; "type="text" name="username"></td>
        </tr>
        <tr>
          <td> Masukkan Kolom   <input style="text-transform:lowercase; "type="text" name="kolom"></td>
        </tr>
        <tr>
          <td> Masukkan Data Yang Akan Diubah   <input style="text-transform:lowercase; "type="text" name="data"></td>
        </tr>
        <tr>
          <td> <input type="submit" name="submit" value="submit"> </td>
        </tr>
      </form>

    </table>
  </body>
</html>
