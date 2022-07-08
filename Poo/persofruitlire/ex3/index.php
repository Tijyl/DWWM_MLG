<?php

require("class/compte.class.php");

$c1 = new Compte(5000,10);
$c1->interets();
$c1->__toString();

$c2 = new Compte(1200,2);
$c2->interets();
$c2->__toString();
?>