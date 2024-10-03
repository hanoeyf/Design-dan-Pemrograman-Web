<?php
// function tampilkanHaloDunia(){
//     echo "halo dunia! <br>";
//      tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

for ($i=1; $i <=25; $i++){
    echo "perulangan ke-{$i} <br>";
}

function tampilkanAngka (int $jumlah, int $indeks = 1) { 
    echo "Perulangan ke-($indeks) <br>";
//panggil diri sendiri selama Sindeks $jumlah
    if ($indeks < $jumlah) {
     tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
$menu = [
    [ 
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita", 
        "subMenu" => [
            [ 
                "nama" => "Wisata", 
                "subMenu" => [
                    [ 
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [ 
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";

        // Cek apakah item memiliki subMenu
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            // Panggil fungsi  untuk subMenu
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        echo "</li>";
    }

    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

?>