<?php
  include "config.php";

$result = mysqli_query($conn,"SELECT * FROM pengguna");

echo "<table align='center' border='1'>
<h1 align='center'>Tabel Pengguna</h1>
<tr>
<th>ID</th>
<th>Email</th>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table> <br> <br>";

$result = mysqli_query($conn,"SELECT * FROM komentar");

echo "<table align='center' border='1'>
<h1 align='center'>Tabel Komentar</h1>
<tr>
<th>Username</th>
<th>Komentar</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['komentar'] . "</td>";
echo "</tr>";
}
echo "</table> <br> <br>";

$result = mysqli_query($conn,"SELECT * FROM pesanan");

echo "<table align='center' border='1'>
<h1 align='center'>Tabel Pesanan</h1>
<tr>
<th>Username</th>
<th>Lokasi</th>
<th>Jumlah Customer</th>
<th>Arrival</th>
<th>Leaving</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['lokasi'] . "</td>";
echo "<td>" . $row['jumlah'] . "</td>";
echo "<td>" . $row['arrival'] . "</td>";
echo "<td>" . $row['leaving'] . "</td>";
echo "</tr>";
}
echo "</table> <br> <br>";

mysqli_close($conn);
?>
