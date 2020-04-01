<?php

error_reporting(E_ERROR);
ini_set('display_errors', 'On');

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = "localhost";
$config['db']['user']   = "root";
$config['db']['pass']   = "";
$config['db']['dbname'] = "";

define('PATH', 'http://'.$_SERVER['SERVER_ADDR']."/NOMEDOPROJETO");