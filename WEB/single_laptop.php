<html>
<head>
<!-- Adding a icon to the page -->  
<link rel="shortcut icon" href="https://icon-library.com/images/icon-for-laptop/icon-for-laptop-28.jpg">
<br>
<?php include "upgrade.php" // include navigation bar ?>
  <!-- Setting the title of the webpage -->
  <title>Viens laptops</title>
  <!-- Setting character encoding and viewport for responsive design -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body style="background: lightgrey">
<!-- PHP: Check if 'Laptop' parameter exists in the URL -->
<?php
if(isset($_GET['Laptop'])){
$Laptop = $_GET['Laptop'];
}
// Include database connection
include 'dataB.php'; 

        // Fetch details for the laptop using the provided Laptop_ID
        $sql = "SELECT * FROM Laptop WHERE Laptop_ID like $Laptop";
        $result = $conn->query($sql);

        // Check if any result is returned from the query
        if ($result->num_rows > 0) {

        // Fetch each row and extract details
        while($row = $result->fetch_assoc()) {
        $Nosaukums = $row['Nosaukums'];
        $Info = $row['Info'];
        $Bilde = $row['Bilde'];
        $Bilde1 = $row['Bilde1'];
        $Bilde2 = $row['Bilde2'];
        $Procesors = $row['Procesors'];
        $RAM = $row['RAM'];
        $Videokarte = $row['Videokarte'];
        $Kur_atrast = $row['Kur_atrast'];
        $Kur_atrast_A = $row['Kur_atrast_A'];
        $Ekrana_izmers = $row['Ekrana_izmers'];
        $Ekrana_izskirtspeja = $row['Ekrana_izskirtspeja'];
        $Procesora_kodoli = $row['Procesora_kodoli'];
        $Video_kartes_atmina = $row['Video_kartes_atmina'];
        
       
       
   ?>
          <!-- Display the laptop's name as a centered heading -->
          <h1 style="text-align: center"><?php echo $Nosaukums ?></h1><?php
   ?>
  <!-- Main container for the content -->        
  <div class="container">
   <hr style="height:1px; width:100%; border-width:0; background-color:grey">
  <!-- Bootstrap carousel for displaying multiple images -->  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">   
    <div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important; background-color: white">
      <div class="item active">
        <center><img src="<?php echo $Bilde ?>" alt="<?php echo $Nosaukums ?>" width="500"></center>
      </div>
      <div class="item">
        <center><img src="<?php echo $Bilde1 ?>" alt="<?php echo $Nosaukums ?>" width="500"></center>
      </div>   
      <div class="item">
        <center><img src="<?php echo $Bilde2 ?>" alt="<?php echo $Nosaukums ?>" width="500"></center>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Iepriekšējais</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Nākamais</span>
    </a>
  </div>
</div><br><?php

        ?>
  <!-- Panel for displaying laptop details -->        
  <div class="container">      
        <div class="panel panel-default">
        <div class="panel-body">
        <!-- General information about the laptop -->  
        <p><h3>Info: </h3><br><h4> <?php echo $Info ?></h4></p>
        <!-- Laptop specifications -->  
        <h3>Specifikācijas:</h3><div><div><?php
        ?><h4><div class="panel panel-default">
        <div class="panel-body">Ekrana_izmers: <?php echo $Ekrana_izmers ?></div>
        <div class="panel-body">Ekrana_izskirtspeja: <?php echo $Ekrana_izskirtspeja ?></div></div><?php
        ?><div class="panel panel-default">
        <div class="panel-body">Procesors: <?php echo $Procesors ?></div>
        <div class="panel-body">Procesora_kodoli: <?php echo $Procesora_kodoli ?></div></div><?php
        ?><div class="panel panel-default">
        <div class="panel-body">RAM: <?php echo $RAM ?></div></div><?php
        ?><div class="panel panel-default">
        <div class="panel-body">Videokarte: <?php echo $Videokarte ?>
        </div>
        <div class="panel-body">Video_kartes_atmina: <?php echo $Video_kartes_atmina ?>
        </div>
        </div><h4>
        <!-- Disclaimer -->  
        <div class="panel-body"><h4>Dažas specifikācijas var atšķirties citos veikalos</h4>
        <!-- Links to external stores -->  
        <div class="panel-body"><h4>Apskatīties vai ir pieejams Latvijas veikalos - <a href = "<?php  echo $Kur_atrast ?>" target="_blank"><?php echo "salīdzini.lv" ?></a></h4>
        <div class="panel-body"><h4>Apskatīties vai ir pieejams Amazon internet veikalā - <a href = "<?php  echo $Kur_atrast_A ?>" target="_blank"><?php echo "Amazon.co.uk" ?></a></h4>
        <!-- Button to add the laptop to the wishlist -->  
        <?php echo '<a href="wish_list.php?add='.$row['Laptop_ID'].'" class="btn btn-info btn-block z-10">Pievienot velmju sarakstam</a>'?>
        </div>
          <?php
        
        }
}
?>
<!-- Creating a data array for potential use -->          
<?php

$data = array(
        'Laptop_ID' => $Laptop_ID,
        'Nosaukums' => $Nosaukums,
        'RAM' => $RAM
 );
 
 ?>
</body>
</html>
