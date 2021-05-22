<?php
   include('session.php');
?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet"  href="css/bootstrap.min.css">   
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<title>Murat Küçük Admin</title>
  </head>
<body>
     <h3>Hoşgeldiniz <?php echo $login_session; ?></h3>
   <a href="logout.php" class="btn btn-danger ml-3">Çıkış Yap</a><br/>
<div class="container">
    <h3>iletişim Formu</h3>
    <table class="table ">
    <thead>
      <tr >
        <th scope="col">#</th>
        <th scope="col">Ad</th>
        <th scope="col">Soyad</th>
        <th scope="col">Email</th>
        <th scope="col">Şehir</th>
        <th scope="col">Cinsiyet</th>
        <th scope="col">Mesaj</th>
        <th scope="col">Puan</th>
      </tr>
    </thead>




    <?php

   

require 'baglanti.php';
  
  
  
  

  $sec="Select * From kisiselwebsitem";
  $sonuc=$db->query($sec);
  
  if($sonuc->num_rows>0)
  
  {
    while($cek=$sonuc->fetch_assoc())
  
    {
      echo"
      <tr>
      <td>".$cek['id']."</td>
      <td>".$cek['ad']."</td>
      <td>".$cek['soyad']."</td>
      <td>".$cek['email']."</td>
      <td>".$cek['sehir']."</td>
      <td>".$cek['cinsiyet']."</td>
      <td>".$cek['mesaj']."</td>
      <td>".$cek['puan']."</td>
    </tr>
      ";
    }
  }
  else{
  echo "Veritabanında hiçbir veri bulunamamıştır.";
  }
?>
   
  </table>
  <div class="container">
    <h3>Kullanıcılar</h3>
    <table class="table ">
    <thead>
      <tr >
        <th scope="col">#</th>
        <th scope="col">Kullanıcı Adı</th>
        <th scope="col">Şifre</th>
   
      </tr>
    </thead>
<?php
    
    
require 'baglanti.php';
  $sec="Select * From admin";
  $sonuc=$db->query($sec);
  if($sonuc->num_rows>0)
  
  {
    while($cek=$sonuc->fetch_assoc())
  
    {
      echo"
      <tr>
      <td>".$cek['id']."</td>
      <td>".$cek['username']."</td>
      <td>".$cek['passcode']."</td>
      
    </tr>
  
      ";
  
  
  
    }
  }
  else{
  echo "Veritabanında hiçbir veri bulunamamıştır.";
  }







?>
   
  </table>
  
  
  
  

</div>
</body>

