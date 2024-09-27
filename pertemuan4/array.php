<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            $nilailulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(',', $nilailulus);

$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
    ];

    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarkaryawan as $karyawan) {
        if ($karyawan [1] > 5) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }
    echo "<br> Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(',', $karyawanPengalamanLimaTahun);
?>