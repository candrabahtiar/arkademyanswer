<!DOCTYPE html>
<html>
<head>
	<title>Tampilan data karyawan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<h1>ARKADEMY BOOTCAMP</h1>
	<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>work</th>
				<th>salary</th>
			</tr>
		</thead>
		<tbody>
			<?php
		include "koneksi.php";
		$sql = "SELECT tabel_nama.id, tabel_nama.nama, tabel_work.name, kategori.salary FROM tabel_nama, tabel_work, kategori
				WHERE tabel_nama.id_work=tabel_work.id && tabel_nama.id_salary = kategori.id";
		$hasil = $con->query($sql);
		$no = 1;
		if ($hasil->num_rows > 0) {
                foreach ($hasil as $row) { ?>
                  <tr>     
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['salary']; ?></td>
                  
                  </tr>
                  <?php 
            $no++; 
            } 
              } else { 
            echo "0 results"; 
              } $con->close(); 
            ?>
		</tbody>
	</table>
</div>
</body>
</html>