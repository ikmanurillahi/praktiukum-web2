<?php
// buat array
$animals = ["kucing","badak","rusa","gajah"];
echo $animals[0] . "<br>";
echo $animals[3]. "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}
//buat array asosiatif
$mahasiswa = ["nama"=>"Ikma","jurusan"=>"SI", "semester"=>2];
echo $mahasiswa["jurusan"]. "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "Key nya adalah" . $key . "value:" . $value . "<br>";
}

// buat array multidimensi
$dosen = [
    ["pak rojul", "web"], 
    ["Pak nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0];
echo $dosen[0][1];

?>