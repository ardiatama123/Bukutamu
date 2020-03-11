<link rel="stylesheet" type="text/css" href="css.css">
<?php
include "connec.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$sql = "INSERT INTO tbl_bukutamu ( nama, email, isi)
VALUES  ('$nama','$email','$isi')";

if (mysqli_query($con, $sql)) {
	echo "<center><h3>New record</h3></center>";
} else {
	echo "Erorr : " . $sql . "<br>" .  mysqli_error($con);
}

mysqli_close($con);
?>
<body>
	<center><button><a href="bukutamu.php">KEMBALI</a></button></center>
</body>