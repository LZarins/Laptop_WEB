<html>
<head>
<!-- Sets the icon for the webpage -->	
<link rel="shortcut icon" href="https://icon-library.com/images/icon-for-laptop/icon-for-laptop-28.jpg">	
<!-- Title of the page -->	
<title>Velmju saraksts</title>
<!-- Character encoding and responsive design meta tags -->	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><br>
  <?php
require_once "upgrade.php"; // include navigation bar
require_once "dataB.php"; // include database connection
?>
  <style>
    /* Style for product images */ 	  
    .product-img{
      width:100%;
      height:auto;
    }
    /* Style for shadow effect around cards */ 	  
    .card-shadow{
      box-shadow: 5px 5px 2px #696969;
    }
    /* Style for the "z-index" positioning of elements */	  
    .z-10{
    z-index:100000;
    position: absolute;
    bottom: 0;
    left: 0;
  }
    </style>
</head>
<body style="background: lightgrey">	
			<!-- Header for the wishlist page -->
			<h1 class="container" style="text-align: center">Velmju saraksts</h1>
	    		<!-- Horizontal line divider -->
			<div class="container">
                        <hr style="height:1px; width:100%; border-width:0; background-color:grey">

<?php
// Add a laptop to the wishlist if the 'add' parameter is set
if (!empty($_GET["add"])) {
  $sql = 'INSERT INTO wish_list (Laptop_ID) VALUES ('. $_GET["add"].')';
  if ($conn->query($sql) == TRUE) {
    echo '<div class="alert alert-success" role="alert"><strong>';
    echo ' Laptops tika pievienots velmjus sarakstam!</strong></div>';
  } else{
    echo $conn->query($sql);
  }
}
// Remove a laptop from the wishlist if the 'remove' parameter is set
if ( !empty($_GET["remove"])) {
    $sql = 'DELETE FROM wish_list WHERE Laptop_ID = '.$_GET["remove"];
    if ($conn->query($sql) == TRUE) {
      echo '<div class="alert alert-danger" role="alert">
      <strong>Tika dzēsts ieraksts no velmju saraksta</strong>
    </div>';
    } else {
      echo "Kļūda dzēšot ierakstu: " . $conn->error;
    }
}



        // Fetch all laptops in the wishlist
	$sql = 'SELECT DISTINCT * FROM wish_list JOIN Laptop ON Laptop.Laptop_ID = wish_list.Laptop_ID';
  $result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // Loop through each laptop and display its details		
    while($row = $result->fetch_assoc()) {
      echo '
      <div class="row">
      <div class="col-md-3 mb-2" style="color: blue">
         <div class="card-deck h-100">
          <div class="card border-secondary">
          <div class="card-img-overlay">
          <a href="single_laptop.php?Laptop=' .$row['Laptop_ID'] .'">
           <h6 class="text-light bg-success text-center rounded p-1">
           '.$row['Nosaukums'].'</h6>
          </div>
          <br>
           <img src="'.$row['Bilde'].'" class="card-img-top">           
          <div class="card-body">
           <p>
           Procesors : '.$row['Procesors'].'<br>
           Videokarte : '.$row['Videokarte'].'<br>
           RAM : '.$row['RAM'].'<br>
           </p>
	   <!-- Button to remove the laptop from the wishlist -->
           <a href="wish_list.php?remove='.$row['Laptop_ID'].'" class="btn btn-info btn-block z-10">Noņemt no velmju saraksta</a>
          </div>
         </div>
        </div> 
        </div>
        </div>
      ';
    }    
    } else{
      // Display a message if the wishlist is empty		
      echo '<div class="alert alert-danger" role="alert">
        <strong>Velmju saraksts pašlaik ir tukšs!</strong>
      </div>';
    }
?>

</body>
</html>
