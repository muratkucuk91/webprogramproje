<?php
include 'simple_html_dom.php';

$html= file_get_html('http://www.okuryatar.com/category/edebiyat/');

?>



<!doctype html>
<html lang="tr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet"  href="css/bootstrap.min.css">   
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<title> Murat Küçük Web Sitesi</title>

<style>
.table-content{
       margin-top:55px;
}
</style>
  </head>
  <body>


    <!--Menü Giriş-->
    <nav class="navbar navbar-expand-lg navbar-dark bg1">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">KucukMurat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
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
                <a class="nav-link" href="ilgi.php">Kitaplarım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
              </li>
             
            </ul>
          </div>
          
        </div>
      </nav>
<!--Menü bitiş-->


<div class=" p-5 mb-auto ">

      <div class="container text-center hakkimizda">

    <h3 class="mb-5 font-weight-bold">İlgi Alanım</h3>
    <hr class="ayrac"><i class="fab fa-pagelines ibeyaz"></i>
  
     
      
      </div>


<div class="table-content">

  <table class="table ">
    <thead>
      <tr>
         <th scope="col">Resim</th>
         <th scope="col">Kitap ve Yazar</th>
         <th scope="col">Hakkında</th>
  
      </tr>
   </thead>
  <tbody>
    <?php foreach($html->find('div[class="post-block archive"] div ') as $ret): ?>
       <tr>
      <!-- img elementleri çekmek için Resim  -->
     <?php foreach($ret->find('img ') as $div): ?>
      <th scope="row">
          <img src="<?php echo       $div->src; ?>">
     <?php endforeach ?>
      </th> 
      <!-- h2 elementleri çekmek için Kitap adı ve Yazar--> 
     <?php foreach($ret->find('h2 ') as $div): ?>
     <td>   <?php echo       $div->innertext; ?>  </td>
     <?php endforeach ?>

      <!-- p elementleri çekmek için Hakkında-->
     <?php foreach($ret->find('p ') as $div): ?>
     <td>   <?php echo       $div->innertext; ?>  </td>
     <?php endforeach ?>


   <?php endforeach ?>
  </tbody>
</table>


</div>
</div>
<div class=" text-light text-center bg1">
  <p class="align-middle p-3 mb-0">
    <span> Tüm hakları saklıdır &copy; | 2021</span>
  </p>
</div>


  </body>
</html>





