<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            $nilailulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(',', $nilailulus);
?>