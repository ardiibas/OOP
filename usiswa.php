<?php

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/m_nationality.php');
	
	$id = $_GET['a'];
	
	if(!is_numeric($_POST['a']));
	
	if(!is_numeric($id))
	{
		exit("ora pareng nakal");
	}
	
	$siswa = new Siswa();
	$data = $siswa->readSiswa($id);
	$nation = new Nationality();
	
	if(empty($data))
	{
		exit("kosong");
	}
	
	$dt = $data[0];
	
	$data_nation = $nation->readAllNationality();
	
?>

<h1>Edit Data Siswa</h1>

<form action="usiswa.php?a = <?php echo $id?>" method="post">
	NIS :<br /><br />
	<input type="text" value="<?php echo $dt['id_siswa']?>" 
			name="in_nis" readonly="true"><br /><br />
	Nama Lengkap :<br /><br />
	<input type="text" value="<?php echo $dt['full_name']?>" 
			name="in_name"><br /><br />
	Email :<br /><br />
	<input type="text" value="<?php echo $dt['email']?>" 
			name="in_email"><br /><br />
	Kewarganegaraan :<br /><br />
	<select name="in_war"> 
		<option value="">--pilih negara--</option>
		<?php foreach($data_nation as $n): ?>
		<?php $s = ($dt['id_nationality'] == $n['id_nationality'])?"selected":""?>
		<option value="<?php echo $n['id_nationality']?>">
			<?php echo $n['nationality']?>
		</option>
		<?php endforeach?>
	</select><br /><br />
	<input type="submit" name="Kirim" value="Simpan">
</form>

<a href = "siswa.php">Back Gengs</a>
