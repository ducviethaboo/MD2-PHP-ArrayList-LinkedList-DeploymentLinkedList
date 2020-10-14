<?php
include_once 'Arraylist.php';

$listarray = new Arraylist();
$listarray->add(10);
$listarray->add(15);
$listarray->add(20);
$listarray->add(35);
$listarray->add(120);
//echo $listarray->get(2);
echo '<pre>';
$listarray->showArraylist();
 var_dump($listarray->remove(1));