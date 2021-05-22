<!doctype html>
<html lang="tr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet"  href="css/bootstrap.min.css">   
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<title>Murat Küçük Web Sitesi</title>
  </head>
  <body>


    <!--Menü Giriş-->
    <nav class="navbar navbar-expand-lg navbar-dark bg1">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">KucukMurat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link "  href="index.html">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmis.html">Özgeçmişim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Memleketim.html">Memleketim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Takımm">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İletişim</a>
              </li>
             
            </ul>
          </div>
          
        </div>
      </nav>
<!--Menü bitiş--> 

<!--İletişim Başlangıç-->
<section class="p-5 text-center iletisim">
  <div class="container ">

      <h2 class="mb-5 font-weight-bold "> İletişim</h2>
      <hr class="ayrac "><i class="fab fa-pagelines ibeyaz "></i>

  </div>
</section>
<form action="iletisim.php" class="col-md-6 m-auto" method="post"  name="form-user"  onsubmit="return USERFORM()">
  <div class="m-3  ">
      <label for="name" class="form-label">Ad</label>
      <input type="text" name="isim" class="form-control" id="name" >
      
    </div>
    <div class="m-3  ">
      <label for="surname" class="form-label">Soyad</label>
      <input type="text" name="soyadi" class="form-control" id="surname">
     
    </div>
  <div class="m-3  ">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="name@example.com"  >
   
  </div>
 
  
 
  <div class="m-3">
  <label for="city" class="form-label">Şehir</label>
  <select class="form-select" name="sehir" aria-label="Default select example">
  <option value="0">------</option>
  <option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
<option value="Ağrı">Ağrı</option>
<option value="Amasya">Amasya</option>
<option value="Ankara">Ankara</option>
<option value="Antalya">Antalya</option>
<option value="Artvin">Artvin</option>
<option value="Aydın">Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bilecik">Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkâri">Hakkâri</option>
<option value="Hatay">Hatay</option>
<option value="Isparta">Isparta</option>
<option value="Mersin">Mersin</option>
<option value="İstanbul">İstanbul</option>
<option value="İzmir">İzmir</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Mardin">Mardin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
<option value="Aksaray">Aksaray</option>
<option value="Bayburt">Bayburt</option>
<option value="Karaman">Karaman</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Batman">Batman</option>
<option value="Şırnak">Şırnak</option>
<option value="Bartın">Bartın</option>
<option value="Ardahan">Ardahan</option>
<option value="Iğdır">Iğdır</option>
<option value="Yalova">Yalova</option>
<option value="Karabük">Karabük</option>
<option value="Kilis">Kilis</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Düzce">Düzce</option>
  </select>
</div>

<div class=" m-3 ">

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="cinsiyet" id="inlineRadio1" value="Erkek">
<label class="form-check-label" for="inlineRadio1">Erkek</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="cinsiyet" id="inlineRadio2" value="Kadın">
<label class="form-check-label" for="inlineRadio2">Kadın</label>
</div>
</div>



<div class=" m-3 ">
    <label for="floatingTextarea"  class="form-label ">Mesaj</label>
    <textarea class="form-control" name="mesaj" cols="30 "rows="10" placeholder="Mesajnızı buraya yazınız.." id="floatingTextarea"></textarea>
    
  </div>
  <div class=" m-3 ">

<label for="customRange1" class="form-label">Değerlendirme Puanı</label>
<input type="range" name="puan" min="0" max="100" onchange="updateTextInput(this.value);">
<input type="text"  id="textInput" value="50">
</div>
  
  <button type="submit" class=" m-3 btn btn-primary">Gönder</button>
  <button type="reset" class=" m-3 btn btn-succes">Temizle</button>
</form>


<footer class=" pt-2 bg-light">
  <div class=" text-light text-center bg1">
    <p class="align-middle p-3 mb-0">
      <span> Tüm hakları saklıdır &copy; | 2021</span>
    </p>
  </div>
  </footer>

  <!-- Veritabana eklemek için PHP  Kodları  -->
  <?php 

  include("baglanti.php"); //VERİTABANI BAĞLANTI DOSYASI
  
  if(isset($_POST["isim"],$_POST["soyadi"],$_POST["mail"],$_POST["sehir"],$_POST["mesaj"],$_POST["cinsiyet"],$_POST["puan"]))
  {
  $ad=$_POST["isim"];
  $soyad=$_POST["soyadi"];
  $email=$_POST["mail"];
  $sehir=$_POST["sehir"];
  $mesaj=$_POST["mesaj"];
  $cinsiyet=$_POST["cinsiyet"];
  $puan=$_POST["puan"];
  
  $ekle="INSERT INTO kisiselwebsitem (id, ad,soyad, email, sehir, mesaj,cinsiyet,puan) VALUES ('".$id."','".$ad."','".$soyad."','".$email."','".$sehir."','".$mesaj."','".$cinsiyet."','".$puan."')";
  
  if($db->query($ekle)===TRUE)
  
  {
  
    echo "<script> alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";
  }
  else{
  
    echo "<script> alert('Mesajınız gönderilirken bir hata oluştu')</script>";
  
  }
  }
  ?>

  <!-- Değerlendirme puanı için Javascript Kodu  -->
  <script>
    function updateTextInput(val) {
              document.getElementById('textInput').value=val; 
            }
    </script>
    
    


<script>
    function USERFORM() {
        var isim = document.forms["form-user"]["isim"];
        var mail = document.forms["form-user"]["mail"];
        var soyadi = document.forms["form-user"]["soyadi"];
       
  
        if (isim.value == "") {
            window.alert("Lütfen adınızı boş bırakmayınız.");
            isim.focus();
            return false;
        }
  
        if (soyadi.value == "") {
            window.alert("Lütfen soyadınızı boş bırakmayınız.");
            soyadi.focus();
            return false;
        }
  
        if (mail.value == "") {
            window.alert(
              "Lütfen geçerli email adresinizi yazınız.");
            mail.focus();
            return false;
        }
  
       
  
        return true;
    }
</script>


</body>
</html>