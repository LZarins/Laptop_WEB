<?php
 require 'dataB.php';
 
 if(isset($_POST['action'])){
   $sql = "SELECT * FROM Laptop WHERE Modelis !=''";
   
   if(isset($_POST['Modelis'])){
     $Modelis = implode("','", $_POST['Modelis']);
     $sql .="AND Modelis IN('".$Modelis."')";
   }
   if(isset($_POST['Tips'])){
     $Tips = implode("','", $_POST['Tips']);
     $sql .="AND Tips IN('".$Tips."')";
   }
   if(isset($_POST['RAM'])){
     $RAM = implode("','", $_POST['RAM']);
     $sql .="AND RAM IN('".$RAM."')";
   }
   if(isset($_POST['Procesors'])){
     $Procesors = implode("','", $_POST['Procesors']);
     $sql .="AND Procesors IN('".$Procesors."')";
   }
   if(isset($_POST['Videokarte'])){
     $Videokarte = implode("','", $_POST['Videokarte']);
     $sql .="AND Videokarte IN('".$Videokarte."')";
   }
   
   $result = $conn->query($sql);
   $output='';   
               
   if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
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
      $output = "<h3>Prece netika atrasta<h3>";
    }
    echo $output;
  }  
?>