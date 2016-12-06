<?php

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/age.php');
	
	$siswa = new Siswa();
	$age = new Age();
	$data = $siswa->readAllSiswa();

?>

<table border = 1>

	<tr>
		<th>Id Siswa</th>
		<th>Full name</th>
		<th>Date of Birth</th>
		<th>Umur</th>
		<th>Nationality</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php 
			if ($a['date_ob'] != NULL)
			{
				echo $a['date_ob'];
			}
			else
			{
				echo '0000-00-00';
			}?></td>
		<td><?php
				$tanggal = $a['date_ob'];
				$exec = $age->age($tanggal);
				echo $exec->y."tahun ".$exec->m." Bulan ".$exec->d."hari";
			?></td>
		<td><?php echo $a['nationality']?></td>
		<td><a href = "dsiswa.php?id=<?php echo $a['id_siswa']?>">Detail</a></td>
		<td><a href = "usiswa.php?id=<?php echo $a['id_siswa']?>">Edit</a></td>
		<td><a href = "delsiswa.php?id=<?php echo $a['id_siswa']?>">Delete</a></td>
		<td></td>
	</tr>
	<?php endforeach?>
	
</table>