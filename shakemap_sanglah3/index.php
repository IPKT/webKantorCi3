<?php
	$url = "https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml";
	$content_Url = file_get_contents($url, False);
	$xml = simplexml_load_string($content_Url);

	$url = "https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml";
	$content_Url = file_get_contents($url, False);
	$xml = simplexml_load_string($content_Url);
	//pecah tanggal
	$tanggal = explode(' ', $xml->gempa->Tanggal);
	$bulan = substr($tanggal[1],0,3);
	$tahun = substr($tanggal[2],2,2);

	echo "Info Gempa Mag:".
	$xml->gempa->Magnitude." SR, ".
	$tanggal[0]."-".$bulan."-".$tahun." ".
	$xml->gempa->Jam.", Lok:".
	$xml->gempa->Lintang.",".
	$xml->gempa->Bujur." (".
	$xml->gempa->Wilayah."), Kedlmn:".
	$xml->gempa->Kedalaman." ::BMKG";
?>