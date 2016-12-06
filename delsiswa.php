<?php

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	$id = $_GET['a'];
	
	if(!is_numeric($id))
	{
		exit("ora pareng nakal");
	}
	
	$siswa = new Siswa();
	$data = $siswa->deleteSiswa($id);
	
	if(empty($data))
	{
		echo "Data dah dihapus...";
	}
?>

<br />

<a href = "siswa.php">Back Gengs</a>
