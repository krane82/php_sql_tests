<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.07.2018
 * Time: 0:19
 */
//Возможно я не все понял в задании, но такое удаление можно произвезти одним запросом
function delOldLogs()
{
    $con = mysqli_connect('localhost', 'root', '', 'strings');
    $con->query("DELETE FROM logs
    WHERE created_at < UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 1 MONTH))");
}