<!DOCTYPE html>
<html>
<head>
<title>Data Siswa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script> 
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
     </script>
</head>
<body>
<h2><strong>Data Siswa</strong></h2>
<div id="flip">Click to show database</div>

<!-- Panel untuk menampilkan data siswa -->
<div id="panel">
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
            // Data siswa       
            $nama = ['Andi', 'Siti', 'Budi', 'Anton'];
            $umur = [15, 16, 15, 25];
            $kelas = ['10A', '10B', '10A', '15A'];
            $alamat = ['Malang', 'Batu', 'Dinoyo', 'Dinoyo'];

            for ($i = 0; $i < count($nama); $i++) {
                echo "<tr>";
                echo "<td>{$nama[$i]}</td>";
                echo "<td>{$umur[$i]}</td>";
                echo "<td>{$kelas[$i]}</td>";
                echo "<td>{$alamat[$i]}</td>";
                echo "</tr>";
            }

           
            $totalUmur = array_sum($umur); 
            $jumlahSiswa = count($umur); 
            $rataRataUmur = $totalUmur / $jumlahSiswa; 
        ?>
    </table>
    
    <p><strong>Rata-rata umur siswa: <?php echo number_format($rataRataUmur, 2); ?> tahun</strong></p>
</div>

</body>
</html>
