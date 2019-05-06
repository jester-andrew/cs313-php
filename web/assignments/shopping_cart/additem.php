<?php
session_start();

$data = filter_input(INPUT_GET, 'data');

if( isset($_SESSION['cart']) ){
    array_push($_SESSION['cart'], $data);
}else{
    $_SESSION['cart'] = array(data);
}

