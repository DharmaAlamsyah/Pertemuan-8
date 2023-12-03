<?php
$konek = mysqli_connect("localhost","root","","sekolahan");
// ->>> "server","user","password","nama database"
if (!$konek) {
    die("koneksi gagal: " . mysqli_connect_error());
}
echo "koneksi berhasil";
mysqli_close($konek);
?>