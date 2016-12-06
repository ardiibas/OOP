<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$siswa = new Siswa();
$nation = new nationality();

$data_nation = $nation->readAllNationality();

if (isset($_POST['kirim'])) {
	$tambah = $siswa->createSiswa($_POST['in_nis'], $_POST['in_name'], $_POST['in_email'], $_POST['in_nation'], '');
	echo "data siswa berhasil ditambahkan <br /> <br />";
}

?>

<h1>Tambah Data Siswa</h1>
<form action="tsiswa.php" method="POST"> 
	NIS: <br />
	<input type="text" name="in_nis"> <br />
	Nama lengkap: <br />
	<input type="text" name="in_name"> <br />
	Email: <br />
	<input type="text" name="in_email"> <br />
	Kewarganegaraan: <br />
	<select name="in_nation">
		<option value="">--Pilih Negara--</option>
		<?php foreach($data_nation as $n): ?>
		<option value="<?php echo $n['id_nationality']?>">
			<?php echo $n['nationality']?>
		</option>
		<?php endforeach?>
	</select> <br /> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>