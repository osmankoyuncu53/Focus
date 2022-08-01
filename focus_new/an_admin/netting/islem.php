<?php  
include 'baglan.php';
//ÜRÜN EKLEME
if(isset($_POST['btn_urunEkle']))
{
    try {
        session_start();
        $dosyaadi = $_FILES['img_urunResim']['name'];
        $gecici = $_FILES['img_urunResim']['tmp_name'];
        $klasor = "../../img/".$dosyaadi;

        $urunAd = $_POST["txt_urunAdi"];
        $urunFiyat = $_POST["txt_urunFiyati"];
        $urunCinsiyet = $_POST["txt_urunCinsiyet"];
        $urunBeden = $_POST["txt_urunBeden"];
        $urunAciklama=$_POST["txt_urunAciklamasi"];
        $urunMiktar=$_POST["txt_urunMiktar"];
        $urunKategori=$_POST["txt_urunKategori"];
        $urunMiktar=$_POST["txt_urunMiktar"];

        $urun_ekle = $db->exec("INSERT INTO urunler(urun_ad,urun_fiyat,urun_cinsiyet,urun_beden,urun_resim,urun_aciklama,urun_miktar,admin_id,kategori_id,satis_miktari) VALUES('$urunAd','$urunFiyat','$urunCinsiyet','$urunBeden','$dosyaadi','$urunAciklama','$urunMiktar',1,'$urunKategori',0)");


        if(($urun_ekle) && (move_uploaded_file($gecici,$klasor))){
            header("Location:../nice-html/ltr/urun_ekle.php?urunekle=on");  
        }
        else
        {
            ?>
            <script type="text/javascript">
               alert("Ürün Eklenirken Hata Meydana Geldi...."); 
            </script>
            <?php 
            header("Location:../nice-html/ltr/urun_ekle.php?urunekle=off"); 
        }

    } 
    catch (Exception $e) 
    {
        echo "Hata Mesajı :".$e->getMessage();
    }
}

//ÜRÜN SİLME
if(isset($_GET['btn_urunSil']))
{   
    $urunSil=$db->prepare("DELETE FROM urunler where urun_id=:id");
    $result_sil=$urunSil->execute(array("id"=>$_GET["urun_id"]));
    
    if($result_sil)
    {
       header("location:../nice-html/ltr/urun_listele.php?urun_sil=on");
    }
    else
    {
       header("location:../nice-html/ltr/urun_listele.php?urun_sil=off");
    }
}


//ÜRÜNLER LİSTELEME
$sql_urunListele=$db->prepare("SELECT * FROM urunler");
$sql_urunListele->execute();

// Satış LİSTELEME
$komut=$db->prepare("SELECT * FROM satis,urunler,uyeler WHERE urunler.urun_id=satis.satis_id and uyeler.uye_id=satis.uye_id");
$komut->execute();

//İLETİŞİM LİSTELEME
$sql_iletisimListele=$db->prepare("SELECT * FROM iletisim");
$sql_iletisimListele->execute();

//Mail Listele --> Abonelik
$sql_mailListele=$db->prepare("SELECT * FROM mail");
$sql_mailListele->execute();

//Üye Listele
$sql_uyeListele=$db->prepare("SELECT * from uyeler");
$sql_uyeListele->execute();

//aktif pasif ayarla

if(isset($_GET['btn_aktif']))
{   
    $aktif=$db->prepare("UPDATE uyeler SET uye_durum='0' WHERE uye_id=:a");
    $result_aktif=$aktif->execute(array("a"=>$_GET["uye_id"]));
    
    if($result_aktif)
    {
       header("location:../nice-html/ltr/uye_listele.php?pasif=on");
    }
    else
    {
       header("location:../nice-html/ltr/uye_listele.php?pasif=off");
    }
}

if(isset($_GET['btn_pasif']))
{   
    $pasif=$db->prepare("UPDATE uyeler SET uye_durum='1' WHERE uye_id=:a");
    $result_pasif=$pasif->execute(array("a"=>$_GET["uye_id"]));
    
    if($result_pasif)
    {
       header("location:../nice-html/ltr/uye_listele.php?aktif=on");
    }
    else
    {
       header("location:../nice-html/ltr/uye_listele.php?aktif=off");
    }
}


//GÜNCELLEME

if(isset($_POST['btn_urunGuncelle'])){
    
    session_start();
    $urun_id=$_POST['urun_id'];

    if(empty($_FILES['img_urunResim']['tmp_name'])){
        $komut=$db->prepare("UPDATE urunler SET 

            urun_ad=:a,
            urun_fiyat=:b,
            urun_cinsiyet=:c,
            urun_beden=:d,
            urun_aciklama=:f,
            urun_miktar=:g,
            admin_id=:h,
            kategori_id=:j,
            satis_miktari=:k

            WHERE urun_id={$_POST["urun_id"]}");

        $oku=$komut->execute(array(
            'a'=>$_POST['txt_urunaAdi'],
            'b'=>$_POST['txt_urunFiyati'],
            'c'=>$_POST['txt_urunCinsiyet'],
            'd'=>$_POST['txt_urunBeden'],
            'f'=>$_POST['txt_urunAciklamasi'],
            'g'=>$_POST['txt_urunMiktar'],
            'h'=>$_SESSION['admin_id'],
            'j'=>$_POST['txt_urunKategori'],
            'k'=>$_POST['txt_satisMiktari']
           
        )); 
    }else{
        $dosyaadi = $_FILES['img_urunResim']['name'];
        $gecici = $_FILES['img_urunResim']['tmp_name'];
        $klasor = "../../img/".$dosyaadi;

        $eskiResim=$_POST['img_urunResim'];
        unlink("../../img/".$eskiResim);
        move_uploaded_file($tmp_name,"$dosyaadi");

        $komut=$db->prepare("UPDATE urunler SET 

            urun_ad=:a,
            urun_fiyat=:b,
            urun_cinsiyet=:c,
            urun_beden=:d,
            urun_resim=:e,
            urun_aciklama=:f,
            urun_miktar=:g,
            admin_id=:h,
            kategori_id=:j,
            satis_miktari=:k

            WHERE urun_id={$_POST["urun_id"]}");

        $oku=$komut->execute(array(
            'a'=>$_POST['txt_urunaAdi'],
            'b'=>$_POST['txt_urunFiyati'],
            'c'=>$_POST['txt_urunCinsiyet'],
            'd'=>$_POST['txt_urunBeden'],
            'e'=>$dosyaadi,
            'f'=>$_POST['txt_urunAciklamasi'],
            'g'=>$_POST['txt_urunMiktar'],
            'h'=>$_SESSION['admin_id'],
            'j'=>$_POST['txt_urunKategori'],
            'k'=>$_POST['txt_satisMiktari']
        )); 
    }     
    if ($oku && (move_uploaded_file($gecici,$klasor))) {
            header("location:../nice-html/ltr/urun_listele.php?urunGuncelle=on");
        }
        else{
            header("location:../nice-html/ltr/urun_listele.php?urunGuncelle=off");
        }
}


if(isset($_POST['btn_updateProfil']))
{
    try {
        session_start();
        $dosyaadi = $_FILES['admin_resim']['name'];
        $gecici = $_FILES['admin_resim']['tmp_name'];
        $klasor = "../assets/images/users/".$dosyaadi;

        $eskiResim=$_POST['admin_resim'];
        unlink("../../assets/images/users/".$eskiResim);
        move_uploaded_file($tmp_name,"$dosyaadi");

        $admin_ad = $_POST["admin_ad"];
        $admin_kullaniciAd = $_POST["admin_kullaniciAd"];
        $admin_sifre = $_POST["admin_sifre"];
        $admin_mail = $_POST["admin_mail"];
        $admin_tel=$_POST['admin_tel'];

        $komut=$db->prepare("UPDATE admin SET 

            admin_adSoyad=:a,
            admin_kullaniciAd=:b,
            admin_sifre=:c,
            admin_mail=:d,
            admin_tel=:e,
            admin_resim=:f
            


            WHERE admin_id={$_SESSION["admin_id"]}");

        $oku=$komut->execute(array(
            'a'=>$admin_ad,
            'b'=>$admin_kullaniciAd,
            'c'=>$admin_sifre,
            'd'=>$admin_mail,
            'e'=>$admin_tel,
            'f'=>$dosyaadi
        )); 

        if($oku && (move_uploaded_file($gecici,$klasor))){
            header("Location:../nice-html/ltr/profil.php?profilGuncelle=on");  
        }
        else
        {
            ?>
            <script type="text/javascript">
               alert("Profil Güncellenmedi...."); 
            </script>
            <?php 
            header("Location:../nice-html/ltr/profil.php?profilGuncelle=off"); 
        }

    } 
    catch (Exception $e) 
    {
        echo "Hata Mesajı :".$e->getMessage();
    }
}



?>