<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:39
 */

require "StrUtils2.php";

$utils = new StrUtils2();
$utils->setText("New text to change");

Echo "Bold : ".$utils->bold();

Echo "<br><br>";

Echo "Italic : ".$utils->italic();

Echo "<br><br>";

Echo "Underline : ".$utils->underline();

Echo "<br><br>";

Echo "Capitalize : ".$utils->capitalize();

Echo "<br><br>";

Echo "Bold, Italic, Underline, Capitalize : ".$utils->uglify();