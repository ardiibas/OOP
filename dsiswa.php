<?php

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	$id = $_GET['id'];
	
	if(!is_numeric($id))
	{
		exit("ora pareng nakal");
	}
	
	$siswa = new Siswa();
	$data = $siswa->readSiswa($id);
	
	//$dt = $data[0];
	
	/*print '<pre>';
	print_r($data);
	print '</pre>';*/

?>
	
<table border = 1>

	<tr>
		<td>Id Siswa</td>
		<td><?php echo $dt['id_siswa']?></td>
	</tr>
	
	<tr>
		<td>Full name</td>
		<td><?php echo $dt['full_name']?></td>
	</tr>
	
	<tr>
		<td>Nationality</td>
		<td><?php echo $dt['nationality']?></td>
	</tr>

</table>

<br />

<a href = "siswa.php">Back Gengs</a>
