<?php
echo "welcome to my game\n";
echo "====== Game Tebak Angka ======\n";
echo "Tebak sebuah angka antara 1 dan 9!\n";
$computer = rand(1,9);
echo "masukan tebakanmu :";
$player = trim(fgets(STDIN));
if ($player == $computer){
    echo "Menang\n";
}else{
    echo "Kalah\n";
}


while(true){
echo "====== Game Tebak Angka ======\n";
echo "Tebak sebuah angka antara 1 dan 9!\n";
$computer = rand(1,9);
echo "masukan tebakanmu :";
$player = trim(fgets(STDIN));
if ($player == $computer){
    echo "Menang\n. angka komputer $computer.\n";
    exit;
}else{
    echo "Kalah\n. angka komputer $computer.\n";
}
}