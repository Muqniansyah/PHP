<?php

// json_encode() untuk mengubah array associative menjadi JSON

$data = [
    "a" => 1,
    "b" => 2,
    "c" => 3
];

echo json_encode($data);

echo "<br>";

$mahasiswa = [
    [
        "nama"=>"Muqniansyah",
        "nip" => "089766282",
        "email"=> "muni@gmail.com"
    ],
    [
        "nama"=>"aca",
        "nip" => "09873787",
        "email"=> "aca@gmail.com"
    ]
];

$result = json_encode($mahasiswa);
echo $result;

?>