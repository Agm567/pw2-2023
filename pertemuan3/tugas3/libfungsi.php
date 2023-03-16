<?php

function kelulusan($total_nilai)
{
	if ($total_nilai > 55) {
		return 'Lulus';
	} else {
		return 'Tidak Lulus';
	}
}

	
function grade($total_nilai)
{
	if ($total_nilai <= 35) {
		return "E";
	} elseif ($total_nilai <= 55) {
		return "D";
	} elseif ($total_nilai <= 69) {
		return "C";
	} elseif ($total_nilai <= 84) {
		return "B";
	} elseif ($total_nilai <= 100) {
		return "A";
	} else {
		return "I";
	}
}

	
function predikat($grade)
{
	switch ($grade) {
		case 'A':
			return "Sangat Memuaskan";
		case 'B':
			return "Memuaskan";
		case 'C':
			return "Cukup";
		case 'D':
			return "Kurang";
		case 'E':
			return "Sangat Kurang";

		default:
			return "Tidak Ada";
	}
}

$dict_matakuliah = ['pw' => "Pemrograman Web", 
										'ddp' => "Dasar-Dasar Pemrograman", 
										'sts' => "Statistika dan Probabilitas", ];



function get_matkul($matkul){
	global $dict_matakuliah;
	return $dict_matakuliah;
}

?>