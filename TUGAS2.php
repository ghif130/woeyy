<?php
$organisasi = array(
	$keamanan = array(
	"ketua" => "siti",
	"wakil" => "maryam",
	"anggota" => "husni"),
	
	$kebersihan = array(
	"ketua" => "aditya",
	"wakil" => '',
	"sekretaris" => "chulis"),

	$kemanusiaan = array(
	"ketua" => "pratama",
	"wakil" => "nugraha"));

	//for ($i=0;$i<2;$i++){echo $organisasi[$i]."<br><br>";}

for ($e=0;$e<3;$e++){
	foreach ($organisasi[$e] as $key => $value){
		echo $organisasi[$e][$key]."<br><br>";
	}
}
	//echo $organisasi;
	//print_r(%organisasi);
?>