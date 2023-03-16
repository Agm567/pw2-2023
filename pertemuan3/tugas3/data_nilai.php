<?php
include_once("header.php");
?>

<div class="container">
	<h2>Data Mahasiswa</h2>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>Mata Kuliah</th>
				<th>UTS</th>
				<th>UAS</th>
				<th>Tugas</th>
				<th>Rerata</th>
				<th>Grade</th>
				<th>Predikat</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Agung Gunara Ma'mun</td>
				<td>Statistika dan Probabilitas</td>
				<td>90</td>
				<td>95</td>
				<td>98</td>
				<td>94.3</td>
				<td>A</td>
				<td>Sangat Memuaskan</td>
				<td>Lulus</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Anzen Nara</td>
				<td>Pemrograman Web</td>
				<td>78</td>
				<td>82</td>
				<td>80</td>
				<td>80</td>
				<td>B</td>
				<td>Memuaskan</td>
				<td>Lulus</td>
			</tr>

			<?php
			

			include_once('libfungsi.php');
                $no = 10; {
				$nama =  $_POST['nama'];
				$mk =  $_POST['matkul'];
				$uts =  $_POST['uts'];
				$uas =  $_POST['uas'];
				$tugas =  $_POST['tugas'];
				$total_nilai = ($uts + $uas + $tugas) / 3;
				$kelulusan = kelulusan($total_nilai);
				$grade = grade($total_nilai);
				$predikat = predikat($grade);
				$matkul = get_matkul($mk);

			?>


				<tr>
					<td>3</td>
					<td><?= $nama ?></td>
					<td><?= $mk ?></td>
					<td><?= $uts ?></td>
					<td><?= $uas ?></td>
					<td><?= $tugas ?></td>
					<td><?= $total_nilai ?></td>
					<td><?= $grade ?></td>
					<td><?= $predikat ?></td>
					<td><?= $kelulusan ?></td>
				</tr>

			<?php
			}
			?>
		</tbody>
	</table>
</div>