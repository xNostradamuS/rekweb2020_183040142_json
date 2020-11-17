<?php 

$mahasiswa = [
    "nama" => "Andi Rachman Z",
    "nrp" => "183040142",
    "email" => "xNostradamuS@gmail.com",
    [
        "nama" => "STARS-Luxury",
        "nrp" => "183040xxx",
        "email" => "Downstairs@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;

?>