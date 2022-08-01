<?php  
	include 'baglan.php';
	
	//urunler tablosundaki verileri listeler--> urunler.php
	$sql_sorguListele=$conn->prepare("SELECT * FROM urunler");
    $sql_sorguListele->execute();

    //anasayfadaki 4 ürünü satış oranına göre listeler--> urunler.php
	$sql_top4Listele=$conn->prepare("SELECT * FROM urunler ORDER BY satis_miktari DESC LIMIT 4");
    $sql_top4Listele->execute();
	
    // index sayfasındaki kategorileri listeler ve o kategoriye ait kaç ürün olduğunu listeler-- index.php
	$sql_kategoriListele=$conn->prepare("SELECT kategoriler.kategori_id,kategoriler.kategori_adi,kategoriler.kategori_resim,COUNT(urunler.kategori_id) AS total from urunler INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.kategori_id
		GROUP BY urunler.kategori_id,kategoriler.kategori_adi,kategoriler.kategori_resim");
   	$sql_kategoriListele->execute();

   	// index sayfasında en altta bulunan abone ola basınca veritabanına ekleyecek -->index.php
   	try {
   		if(isset($_POST['btn_aboneOl'])){
   			session_start();
   			$mailAdres=$_POST['txt_indexMail'];
   			$uye_id=$_SESSION['kullanici_ID'];

   			$mailKontrol=$conn->prepare("SELECT * from mail WHERE mail_adresi=? or uye_id=?");
			$mailKontrol->execute([$mailAdres,$uye_id]);
			
			$row_mailKontrol=$mailKontrol->rowCount();

			if($row_mailKontrol){
				?>
					<script type="text/javascript"> 
						alert("Mail Adresi Sisteme Kayıtlı veya Üyenin Sistemde Kayıtlı Maili Mevcut... 'Yönlendirme Aktif'")
					</script>
				<?php  header("Refresh: 1; url=http://localhost/focus_new/"); 
			}
			else{
				$mail_kayit=$conn->prepare("INSERT INTO mail(mail_adresi,uye_id) VALUES(?,?)");
				$mail_kayit->execute([$mailAdres,$uye_id]);

				if($mail_kayit){
					header("Location:../index.php?on");
				}
				else{
					header("Location:../index.php?off");
				}
			}
   		}

   	} catch (Exception $e) {
   		echo $e->getMessage();
   	}

   	// veritabanına kayıt -->iletisim.php

   	if(isset($_POST['iletisimYolla'])){
   			$iletisimAd=$_POST['txt_iletisimAd'];
   			$iletisimEmail=$_POST['txt_iletisimEmail'];
   			$iletisimTelefon=$_POST['txt_iletisimTelefon'];
   			$iletisimMesaj=$_POST['txt_iletisimMesaj'];

			$iletisim_kayit=$conn->prepare("INSERT INTO iletisim(iletisim_ad,iletisim_mail,iletisim_telefon,iletisim_mesaj) VALUES(?,?,?,?)");
			$iletisim_kayit->execute([$iletisimAd,$iletisimEmail,$iletisimTelefon,$iletisimMesaj]);

			if($iletisim_kayit){
				?>
				<script type="text/javascript">
					alert("İletişim Talebiniz Gönderildi...");
				</script>
				<?php 
				header("Refresh: 0; url=http://localhost/focus_new/iletisim.php");
			}
			else{
				header("Location:../iletisim.php?off");
			}
   	}

if(isset($_POST['btn_satinAl'])){
	$komut4=$conn->prepare("SELECT * FROM urunler where urun_id=:id");
    $komut4->execute(array('id'=>$_POST['urun_id']));
   	$oku4=$komut4->fetch(PDO::FETCH_ASSOC);

   	$urunMiktar=$oku4['urun_miktar']-1;
   	$satisMiktar=$oku4['satis_miktari']+1;

	session_start();
   	$urun_id=$_POST['urun_id'];
   	$uye_id=$_SESSION['kullanici_ID'];

   	$sql_satis=$conn->prepare("INSERT INTO satis(urun_id,uye_id) VALUES(?,?)");
	$sql_satis->execute([$urun_id,$uye_id]);

	if($sql_satis){
		?>
		<script type="text/javascript">
			alert("Ürün Satıldı...");
		</script>
		<?php 
		$komut=$conn->prepare("UPDATE urunler SET 

            urun_miktar=:a,
            satis_miktari=:b
            

            WHERE urun_id={$_POST["urun_id"]}");

        $oku=$komut->execute(array(
            'a'=>$urunMiktar,
            'b'=>$satisMiktar
            
           
        )); 
			header("Refresh: 0; url=http://localhost/focus_new/urunler.php");
		}
		else{
			header("Location:../urunler.php?off");
		}
 }


   

?>