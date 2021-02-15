<?php

$mahasiswa = [["nama" => "Riza", "NIK" => "3921", "jurusan" => "RPL"],
["nama" => "Ailsa", "NIK" => "2021", "jurusan" => "IPA"]

];

?>

<!DOCTYPE html>
<html>
<head>
    <tittle>GET</tittle

</head>

<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
  <a href="latihan1.php?nama=<?= $mhs["nama"]; ?>&NIK=
  <?= $mhs["NIK"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?> </a>
    </li>
<?php endforeach; ?>
</ul>


</body>
</html>
