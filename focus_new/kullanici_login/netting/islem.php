<?php  
include "../../netting/baglan.php";

// kullanici_login klasöründeki kayitOl.php, kontrol + ekleme 
if (isset($_POST['btn_kayitOl'])) {

	$adSoyad=$_POST['txt_kayitAdSoyad'];
	$kullaniciAdi=$_POST['txt_kayitKullaniciAdi'];
	$md5Sifre=md5($_POST['txt_kayitSifre']);
	$mail=$_POST['txt_kayitMail'];

	$kontrol=$conn->prepare("SELECT * from uyeler WHERE uye_mail=?");
	$kontrol->execute([$mail]);
	$row_kontrol=$kontrol->rowCount();

	if($row_kontrol>0){
		header("Location:../kayitOl.php?off");
	}
	else{
		$kayit=$conn->prepare("INSERT INTO uyeler(uye_adSoyad,uye_kullaniciAdi,uye_sifre,uye_durum,uye_mail) VALUES(?,?,?,?,?)");
		$kayit->execute([$adSoyad,$kullaniciAdi,$md5Sifre,0,$mail]);

		if($kayit){
			header("Location:../index.php?on");
		}
		else{
			header("Location:../kayitOl.php?off");
		}
	}
}

// kullanici_login klasöründeki index.php, kontrol + giris 
if (isset($_POST['btn_girisYap'])) {
	session_start();

	$kontrol2=$conn->prepare("SELECT * from uyeler");
	$kontrol2->execute();
	$row_listele2=$kontrol2->fetch(PDO::FETCH_ASSOC);

	$giris_uyeDurum=$row_listele2['uye_durum'];

	$giris_kullaniciAd=$_POST['txt_girisKullaniciAd'];
	$giris_sifre=md5($_POST['txt_girisSifre']);


	$kontrol=$conn->prepare("SELECT * from uyeler WHERE uye_kullaniciAdi=? and uye_sifre=? and uye_durum='1'");
	$kontrol->execute([$giris_kullaniciAd,$giris_sifre]);
	$row_listele=$kontrol->fetch(PDO::FETCH_ASSOC);

	$row_kontrol=$kontrol->rowCount();

	if($row_kontrol){
		$_SESSION['kullanici_ID']=$row_listele['uye_id'];
		$_SESSION['kullanici_adi']=$giris_kullaniciAd;
		header("Location:../../index.php?on");
	}
	else{
		header("Location:../index.php?off");
	}
}

// admin giris index.php 
if (isset($_POST['btn_adminGirisYap'])) {
	session_start();

	$sql_admin=$conn->prepare("SELECT * from admin");
	$sql_admin->execute();
	$row_listAdmin=$sql_admin->fetch(PDO::FETCH_ASSOC);

	$admin_girisKullaniciAd=$_POST['txt_mail'];
	$admin_girisSifre=$_POST['txt_sifre'];


	$kontrol=$conn->prepare("SELECT * from admin WHERE admin_mail=? and admin_sifre=?");
	$kontrol->execute([$admin_girisKullaniciAd,$admin_girisSifre]);
	$row_listele=$kontrol->fetch(PDO::FETCH_ASSOC);

	$row_kontrol=$kontrol->rowCount();

	if($row_kontrol){
		$_SESSION['admin_id']=$row_listele['admin_id'];
		$_SESSION['admin_adi']=$row_listele['admin_kullaniciAd'];
		header("Location:../../an_admin/nice-html/ltr/index.php?on");
	}
	else{
		header("Location:../../an_admin?girisOff");
	}
}




?>