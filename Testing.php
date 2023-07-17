<?php

//include file2 yang diperlukan
include 'service/TouristdestinationService.php';
include 'model/Touristdestination.php';
include 'helper/PDOUtil.php';

$list[]= new Touristdestination('1', 'Taman Nasional Komodo', 'Jl. Soekarno-Hatta', 'Labuan Bajo', 'Wisata Alam dan Konservasi Satwa', 'Indonesia');
$list[]= new Touristdestination('2', 'Borobudur', 'Jl. Badrawati', 'Magelang', 'Pariwisata Budaya', 'Indonesia');
$list[]= new Touristdestination('3', 'Pantai Kuta', 'Jl. Pantai Kuta', ' Kuta', 'Wisata Pantai', 'Indonesia');
$list[]= new Touristdestination('4', 'Raja Ampat', 'Kabupaten Raja Ampat', 'Sorong', 'Wisata Alam', 'Indonesia');

//insert data
foreach($list as $T){
(new TouristdestinationService())->insert($T);
}

//update data
// $T = new Touristdestination(4,"Taman Ayun", "Jl. Ayodya", "Mengwi", "Pariwisata Budaya dan Sejarah", "Indonesia");
// (new TouristdestinationService())->update($T);

//menampilkan data 1 data berdasar id
// print (new TouristdestinationService())->getATouristdestinationById(2);

// //menampilkan semua data
//     foreach((new TouristdestinationService())->getAllTouristdestination() as $T){
//     print $T . PHP_EOL;
// }

foreach ($list as $touristdestination) {
    echo "ID: " . $touristdestination->getId() . PHP_EOL;
    echo "Name: " . $touristdestination->getName() . PHP_EOL;
    echo "Address: " . $touristdestination->getAddress() . PHP_EOL;
    echo "City: " . $touristdestination->getCity() . PHP_EOL;
    echo "DestinationType: " . $touristdestination->getDestinationType() . PHP_EOL;
    echo "Country: " . $touristdestination->getCountry() . PHP_EOL;
    echo PHP_EOL;
}
?>