<html>
<head>
<link rel="shortcut icon" href="https://icon-library.com/images/icon-for-laptop/icon-for-laptop-28.jpg">
<?php
 require 'dataB.php';
 include "upgrade.php" ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laptop vaikals</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .z-10{
    z-index:100000;
    position: absolute;
    bottom: 0;
    left: 0;
  }  
  .t2 {
  text-align: right;
}
.burbul {
  position: relative;
  display: inline-block;
  cursor: pointer;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
}

.burbul .burbultext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -180px;
}

.burbul .burbultext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: 45px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.burbul .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
  </style>
</head>
<body style="background: lightgrey">
  <h3 class="text-center text-light bg-success p-2">Laptopu veikals</h3>
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-3">
      <font size="+1"><b>Produkta filtrs</b></font>
      <hr>
      
       <h6 class="text-success">Portatīvā tips<h6>
      <ul class="list-group">
      <?php
        $sql="SELECT DISTINCT Tips FROM Laptop ORDER BY Tips";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
       <li class="list-group-item">
        <div class="form-check">
         <label class="form-check-label">
          <input type="checkbox" class="form-check-input product_check" 
          value="<?= $row['Tips']; ?>" id="Tips"><?= $row['Tips']; ?>
         </label>
        </div> 
       </li>
       <?php } ?>
      </ul>
      
      
      <h6 class="text-success">Modelis<h6>
      <ul class="list-group">
      <?php
        $sql="SELECT DISTINCT Modelis FROM Laptop ORDER BY Modelis";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
       <li class="list-group-item">
        <div class="form-check">
         <label class="form-check-label">
          <input type="checkbox" class="form-check-input product_check" 
          value="<?= $row['Modelis']; ?>" id="Modelis"><?= $row['Modelis']; ?>
         </label>
        </div> 
       </li>
       <?php } ?>
      </ul>
      
      
      <h6 class="text-success">Ram<h6>
      <ul class="list-group">
      <?php
        $sql="SELECT DISTINCT RAM FROM Laptop ORDER BY RAM";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
       <li class="list-group-item">
        <div class="form-check">
         <label class="form-check-label">
          <input type="checkbox" class="form-check-input product_check" 
          value="<?= $row['RAM']; ?>" id="RAM"><?= $row['RAM']; ?>
         </label>
        </div> 
       </li>
       <?php } ?>
      </ul>
      
      
      <h6 class="text-success">Procesors<h6>
      <ul class="list-group">
      <?php
        $sql="SELECT DISTINCT Procesors FROM Laptop ORDER BY Procesors";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
       <li class="list-group-item">
        <div class="form-check">
         <label class="form-check-label">
          <input type="checkbox" class="form-check-input product_check" 
          value="<?= $row['Procesors']; ?>" id="Procesors"><?= $row['Procesors']; ?>
         </label>
        </div> 
       </li>
       <?php } ?>
      </ul>
      
      
      
      <h6 class="text-success">Videokarte<h6>
      <ul class="list-group">
      <?php
        $sql="SELECT DISTINCT Videokarte FROM Laptop ORDER BY Videokarte";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
       <li class="list-group-item">
        <div class="form-check">
         <label class="form-check-label">
          <input type="checkbox" class="form-check-input product_check" 
          value="<?= $row['Videokarte']; ?>" id="Videokarte"><?= $row['Videokarte']; ?>
         </label>
        </div> 
       </li>
       <?php } ?>
      </ul>
      
      
      </div>
      <div class="col-lg-9">
        <font size="+1"><b><span id="textChange">Visi produkti</span></b></font>
        <span style="float: right" class="burbul" onclick="myFunction()">Uzklikšķiniet priekš info
        <span class="burbultext" id="burbul">Uzklikšķiniet uz laptopa nosaukuma lai aplūkotu to sīkāk</span></span>
        <hr>
        <div class="text-center">
          <img src="loader.gif" id="loader" width="200" style="display:none;">
        </div>
        <div class="row" id="result">
        <?php
          $sql="SELECT * FROM Laptop";
          $result=$conn->query($sql);
        if ($result-> num_rows > 0) {
          while($row=$result->fetch_assoc()){
          $Laptop_ID = $row['Laptop_ID'];
        ?>
         
        <div class="col-md-3 mb-2" style="color: blue">
         <div class="card-deck h-100">
          <div class="card boarder-secondary">
          <div class="card-img-overlay">
          <?php echo "<a href='single_laptop.php?Laptop=" . $Laptop_ID ."'>" ?>
           <h6 class="text-light bg-success text-center rounded p-1">
           <?= $row['Nosaukums']; ?></h6>
          </div>
          <br>
           <img src="<?= $row['Bilde']; ?>" class="card-img-top">            
          <div class="card-body">
           <p>
           Procesors : <?= $row['Procesors']; ?><br>
           Videokarte : <?= $row['Videokarte']; ?><br>
           RAM : <?= $row['RAM']; ?><br>
           </p>
           <?php echo '<a href="wish_list.php?add='.$row['Laptop_ID'].'" class="btn btn-info btn-block z-10">Pievienot velmju sarakstam</a>'?>
         </div>
         </div>
        </div> 
        </div>
       <?php } 
       }else {
        echo "nav rezultātu";
}?> 
    </div>
   </div>
  </div>
  <script type"text/javascript">
   $(document).ready(function(){
   
     $(".product_check").click(function(){
      $("#loader").show();
      
      var action = 'data';
      var Tips = get_filter_text('Tips');
      var Modelis = get_filter_text('Modelis');
      var RAM = get_filter_text('RAM');
      var Procesors = get_filter_text('Procesors');
      var Videokarte = get_filter_text('Videokarte');
      
      $.ajax({
       url:'action.php',
       method:'POST',
       data:{action:action,Tips:Tips,Modelis:Modelis,RAM:RAM,Procesors:Procesors,Videokarte:Videokarte},
       success:function(response){
        $("#result").html(response);
        $("#loader").hide();
        $('#textChange').text("Filtra produkti");
       
       }
      });
     });
   
    function get_filter_text(text_id){
     var filterData = [];
     $('#'+text_id+':checked').each(function(){
     filterData.push($(this).val());
     })
     return filterData;
     }
     });
     
     function myFunction() {
  var popup = document.getElementById("burbul");
  popup.classList.toggle("show");
}
  </script>
</body>
</html>