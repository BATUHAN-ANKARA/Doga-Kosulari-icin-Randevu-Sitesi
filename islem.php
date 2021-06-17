<?php 
ob_start();
session_start();

require_once 'baglan.php';


if (isset($_POST['kullanicigiris'])) {

	
	$kullanici_mail=$_POST['kullanici_mail'];
	($kullanici_sifre=md5($_POST['kullanici_sifre']));


	$kullaniciask=$db->prepare("SELECT * from kullanici where kullanici_mail=:mail and kullanici_sifre=:sifre");
	$kullaniciask->execute(array(

		'mail' => $kullanici_mail,
		'sifre' => $kullanici_sifre

	));

	$say=$kullaniciask->rowCount();


	if($say = 0){
		
		header("Location:login.php");
	}

	else{

		header("Location:user.php");
	}



}



if (isset($_POST['kayitislemi'])) {
	
	echo "giriş";

	$kaydet=$db->prepare("INSERT into kullanici set
		kullanici_isim=:kullanici_isim,
		kullanici_soyisim=:kullanici_soyisim,
		kullanici_mail=:kullanici_mail,
		kullanici_telefon=:kullanici_telefon,
		kullanici_sifre=:kullanici_sifre
		");

	$insert=$kaydet->execute(array(

		'kullanici_isim' => $_POST['kullanici_isim'],
		'kullanici_soyisim' => $_POST['kullanici_soyisim'],
		'kullanici_mail' => $_POST['kullanici_mail'],
		'kullanici_telefon' => $_POST['kullanici_telefon'],
		'kullanici_sifre' => $_POST['kullanici_sifre']
	));


	if ($insert) {
		header("Location:login.php");
		exit;
	}
	else{

		echo "Kayıt Başarısız";
	}


}






?>