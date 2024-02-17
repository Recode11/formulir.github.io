<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "ggrignionrendo@gmail.com"; // Ganti dengan alamat email tujuan Anda

    // Ambil data dari formulir
    $ide_budaya = $_POST["ide_budaya"];
    $keterangan_budaya = $_POST["keterangan_budaya"];

    $ide_wisata = $_POST["ide_wisata"];
    $keterangan_wisata = $_POST["keterangan_wisata"];

    $ide_sejarah = $_POST["ide_sejarah"];
    $keterangan_sejarah = $_POST["keterangan_sejarah"];

    // Kirim email Budaya
    $subject_budaya = "Formulir Pengisian Budaya";
    $body_budaya = "Ide: " . $ide_budaya . "\nKeterangan: " . $keterangan_budaya;
    mail($to_email, $subject_budaya, $body_budaya);

    // Kirim email Wisata
    $subject_wisata = "Formulir Pengisian Wisata";
    $body_wisata = "Ide: " . $ide_wisata . "\nKeterangan: " . $keterangan_wisata;
    mail($to_email, $subject_wisata, $body_wisata);

    // Kirim email Sejarah
    $subject_sejarah = "Formulir Pengisian Sejarah";
    $body_sejarah = "Ide: " . $ide_sejarah . "\nKeterangan: " . $keterangan_sejarah;
    mail($to_email, $subject_sejarah, $body_sejarah);

    echo "Formulir telah terkirim.";
}
?>