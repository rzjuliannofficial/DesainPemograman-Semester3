<?php
$menu = [
    ["nama" => "Beranda"],
    ["nama" => "Berita", 
        "subMenu" => [
            ["nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}"; // Tampilkan item menu
        
        // Periksa apakah ada sub-menu
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            // Panggil fungsi itu sendiri secara rekursif untuk sub-menu
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>