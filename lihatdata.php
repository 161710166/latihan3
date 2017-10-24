	<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

	<body>
	<center><h1> Tabel Jurusan </h1></center>
	<center>
	<fieldset style="width: 50%; margin: auto;">
	<table class="table table-bordered">

		<th>nomor</th>
		<th>jurusan</th>
		<th colspan="3">opsi</th>
		<?php
			include('koneksi.php');
			$ma = mysqli_query($koneksi,"SELECT * FROM jurusan");
			$no = 1;
			foreach ($ma as $data) {
				echo "<tr>
				<td>$no</td>
				<td>".$data['jurusan']."</td>
				<td><a class='btn btn-primary' href = 'show.php?id=$data[id]'>show</a></td>
				<td><a class='btn btn-success' href = 'edit.php?id=$data[id]'>edit</a></td>
				<td><a class='btn btn-danger' href = 'delete.php?id=$data[id]'>delete</a></td>
				</tr>";
				$no++;
			}
		?>
	</center>
	</table>
	<br />
			<center><a href="tambah.php" class="btn btn-info">&Lt; Input Jurusan</a></center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>

	</body>
	</html>