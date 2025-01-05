<?php
 // Include the database connection file
 require 'dataB.php';

 // Check if an action was sent using a POST request
 if(isset($_POST['action'])){
   // Initialize the SQL query to select all laptops from the "Laptop" table
   $sql = "SELECT * FROM Laptop WHERE Modelis !=''";

   // Add a filter for "Modelis" if it is set
   if(isset($_POST['Modelis'])){
     // Combine the selected "Modelis" values into a SQL IN clause
     $Modelis = implode("','", $_POST['Modelis']);
     $sql .="AND Modelis IN('".$Modelis."')";
   }
   // Add a filter for "Tips" if it is set
   if(isset($_POST['Tips'])){
     $Tips = implode("','", $_POST['Tips']);
     $sql .="AND Tips IN('".$Tips."')";
   }
   // Add a filter for "RAM" if it is set
   if(isset($_POST['RAM'])){
     $RAM = implode("','", $_POST['RAM']);
     $sql .="AND RAM IN('".$RAM."')";
   }
   // Add a filter for "Procesors" if it is set
   if(isset($_POST['Procesors'])){
     $Procesors = implode("','", $_POST['Procesors']);
     $sql .="AND Procesors IN('".$Procesors."')";
   }
   // Add a filter for "Videokarte" if it is set
   if(isset($_POST['Videokarte'])){
     $Videokarte = implode("','", $_POST['Videokarte']);
     $sql .="AND Videokarte IN('".$Videokarte."')";
   }
   // Execute the SQL query and get the results
   $result = $conn->query($sql);

   // Initialize a variable to store the output
   $output='';   

   // Check if any rows were returned
   if($result->num_rows>0){
   // Iterate over the results
   while($row=$result->fetch_assoc()){
    // Dynamically generate HTML to display the laptop's details
    $output .='      
        <div class="col-md-3 mb-2" style="color: blue">       
         <div class="card-deck h-100">
          <div class="card boarder-secondary">
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
           <a href="wish_list.php?add='.$row['Laptop_ID'].'" class="btn btn-info btn-block z-10">Pievienot velmju sarakstam</a>
          </div>
         </div>
        </div> 
        </div>';              
          }         
    } else { 
      // If no results were found, display a message
      $output = "<h3>Prece netika atrasta<h3>";
    }
    // Output the generated HTML
    echo $output;
  }  
?>
