<?php
$pd = explode("PERINGATAN DINI CUACA" , $pd);
$pd = $pd[1];
$nomor = explode("NOMOR " , $pd);
$nomor = $nomor[1];
$nomor = explode("," , $nomor);
$nomor = $nomor[0];
$mulai = explode("BERLAKU TANGGAL  " , $pd);
$mulai = $mulai[1];
$mulai = explode(" SAMPAI DENGAN " , $mulai);
$mulai = $mulai[0];


$akhir = explode("SAMPAI DENGAN " , $pd);
$akhir = $akhir[1];
$akhir = explode(". BERDASARKAN" , $akhir);
$akhir = $akhir[0];

$pengamatan = explode("PENGAMATAN JAM " , $pd);
$pengamatan = $pengamatan[1];
$pengamatan = explode("," , $pengamatan);
$pengamatan = $pengamatan[0];

$peringatan = explode($pengamatan.", " , $pd);
$peringatan = $peringatan[1];
$peringatan = explode("." , $peringatan);
$peringatan = $peringatan[0];

$prakiraan = explode($peringatan.". " , $pd);
$prakiraan = $prakiraan[1];
$prakiraan = explode("." , $prakiraan);
$prakiraan = $prakiraan[0];
echo "<br>";
echo $nomor;
echo "<br>";
echo $mulai;
echo "<br>";
echo $akhir;
echo "<br>";
echo $pengamatan;
echo "<br>";
echo $peringatan;
echo "<br>";
echo $prakiraan;


$isi =
"<?xml version=\"1.0\" encoding=\"US-ASCII\" standalone=\"yes\"?>
<!DOCTYPE peringatanDini [ <!ELEMENT peringatanDini EMPTY>
<!ATTLIST peringatanDini nomor ID #REQUIRED mulai CDATA #REQUIRED akhir CDATA #REQUIRED pengamatan CDATA #REQUIRED
    peringatan CDATA #REQUIRED prakiraan CDATA #REQUIRED>
    ]>
    <peringatanDini nomor=\"$nomor\" mulai=\"$mulai\" akhir=\"$akhir\" pengamatan=\"$pengamatan\"
        peringatan=\"$peringatan\" prakiraan=\"$prakiraan\" />";


    //$buka = fopen("home/sysop/Music/event.xml", "w+");
    $fileXML = base_url('gambar/event.xml');
    $buka = fopen('PeringatanDini.xml','w');
    if (!$buka)
    {
    echo "<p><b>Data belum terproses. Mohon dicoba lagi</b>
    <p>
        <html>";
        exit;
        }

        fwrite($buka, $isi);
        fclose($buka);

        $url = base_url('PeringatanDini.xml');
        header("Location: $url");

        ?>