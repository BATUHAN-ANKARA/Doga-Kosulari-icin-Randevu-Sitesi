<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=serbest;charset=utf8",'root','23052305');

	//echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>