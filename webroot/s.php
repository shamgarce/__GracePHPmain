<?php
/**
 * https://github.com/shampeak/GracePhp
 */

error_reporting(E_ALL ^ E_NOTICE);      //抑制错误

include("../App/Seter/I.php");



$s = \Seter\Seter::getInstance();

\F\File::test();

echo \F\Sham::T();
echo 456;