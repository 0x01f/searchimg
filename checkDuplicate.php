<?php

include_once "db.php";

$db = new functionalDB();

$duplicateName = $_POST['duplicatename'];

$db->deleteItem($duplicateName);
unlink('images/' . $duplicateName);
unlink('img_grey/' . $duplicateName);

echo 'Файл ' . $duplicateName . ' являлся дубликатом и был удален.' . '</br>';