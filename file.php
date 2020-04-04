<?php

echo '<pre>';

$f = $_FILES; //показываем что глобальном массиве файл есть наш файл csv

foreach($f as $files => $v){
    Print_r ($v);
}
//ниже присоединяем класс для импорта csv файла

require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");

$csvFile = new CCSVData('R', true); //После подключения файла с классом, создаём объект – экземпляр класса CCSVData

$csvFile->LoadFile($_FILES['name']); // CSV-файл, который мы хотим импортировать.

$csvFile->SetDelimiter(';','\t'); //указываем разделители

while ($arRes = $csvFile->Fetch()){ // запускаем цикл чтобы вывести наш результат
    echo '<pre>'; print_r ($arRes); echo '</pre>';
}