<?php
use &&\CategorieDAO;


global $CONFIG;
$compte = new CategorieDAO($CONFIG);

$tabcat = $compte ->selectAll()
?>