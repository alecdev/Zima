<?php
/***************************************************************************
 *                             Zima System
 *                          -------------------
 *   copyright            : (C) 2013 The Zima System - Pars Ertebat
 *   email                : info@parsertebat.ir
 *   email                : younes.eshani@gmail.com
 *   programmer           : Younes Eshani
 ***************************************************************************/

function mytime($type,$TheTime,$TimeZone){
    $mtime = $TheTime;
    $mtime += $TimeZone * 3600;
    return jdate($type, $mtime);
}


?>
