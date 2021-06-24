<?php
// membaca data dari form
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jabatan = $_POST['jabatan'];
$perjalanan = $_POST['perjalanan'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$tgl_kembali = $_POST['tgl_kembali'];

// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("sppd.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#NAMA", $nama, $document);
$document = str_replace("#NIP", $nip, $document);
$document = str_replace("#JABATAN", $jabatan, $document);
$document = str_replace("#PERJALANAN", $PERJALANAN, $document);
$document = str_replace("#BERANGKAT", $BERANGKAT, $document);
$document = str_replace("#TUJUAN", $TUJUAN, $document);
$document = str_replace("#HARI", $HARI, $document);
$document = str_replace("#TANGGAL", $TANGGAL, $document);
$document = str_replace("#TGL_KEMBALI", $TGL_KEMBALI, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=sppd.doc");
header("Content-length: ".strlen($document));
echo $document;
?>