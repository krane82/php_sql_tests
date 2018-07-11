<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11.07.2018
 * Time: 23:44
 */
//
$stringsArr = ['first', 'second', 'third'];
//Функция для добавления записей
function addStrings(array $stringsArr)
{
    $con = mysqli_connect('localhost','root','','strings');
    $i = 0;
    $sql = "INSERT IGNORE INTO strings (string) VALUES ";
    foreach ($stringsArr as $item) {
        $sql .= "('$item'),";
        if(++$i === 5000) {
         $sql = substr($sql, 0, -1);
         $con->query($sql);
         $i = 0;
        }
    }
}
//функция для поиска строки
function searchString(string $str) {
    $con = mysqli_connect('localhost','root','','strings');
    $result = $con->query("SELECT * FROM strings WHERE string = '$str'");
    return ($result->num_rows()>0);
}