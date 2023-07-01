<?php 
session_start();


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="./css/index_style.css">
  <title>LMS:Dashboard</title>

  <style>
      .dropdown-menu a{
          color:black;
        }
       #my
       {
        color:white;
       }
  </style>
</head>

<body>

  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid  style1_container">
      <a class="navbar-brand" href="dashboard.php"  style="color:white"> Product</a>
              <span  id="username"><strong  style="color:white">Welcome: <?php   echo   $_SESSION['name'];  ?></strong></span>
      <ul class="nav justify-content-end dropdowncolor">
       

        <li class="nav-item">
          <a href="logout.php" style="color:white" class="nav-link">Logout</a>
        </li>
        

      </ul>
    </div>
  </nav>
  <span>

  </span> <br> <br>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
    <form action="customerapi.php"  method ="post">
    <div class="form-group">
    <label for="">Customer Id:</label>
    <input type="text" class="form-control" name="cid" id=""  value="<?php   echo $_SESSION['id']  ?> "  required  >
     </div>

<div class="form-group">
    <label for="">Order Date:</label>
    <input type="date" class="form-control" name="orderdate" id=""  required  >
</div>
<div class="form-group">
    <label for="">Company:</label>
    <input type="text" class="form-control" name="company" id=""  required  >
</div>
<div class="form-group">
    <label for="">Owner:</label>
    <input type="text" class="form-control" name="owner" id=""   >
</div>
<div class="form-group">
    <label for="">Item:</label>
    <input type="text" class="form-control" name="item" id=""  >
</div>
<div class="form-group">
    <label for="">Quantity:</label>
    <input type="text" class="form-control" name="quantity" id=""  >
</div>
<div class="form-group">
    <label for="">Weight:</label>
    <input type="text" class="form-control" name="weight" id=""  >
</div>
<div class="form-group">
    <label for="">Request for Shipment:</label>
    <input type="text" class="form-control" name="requestforshipment" id=""  >
</div>

<div class="form-group">
    <label for="">Tracking Id:</label>
    <input type="text" class="form-control" name="trackingid" id=""  >
</div>

<div class="form-group">
    <label for="">Shipment Size:</label>
    <input type="text" class="form-control" name="shipmentsize" id=""  >
</div>
<div class="form-group">
    <label for="">Box Count:</label>
    <input type="text" class="form-control" name="boxcount" id=""  >
</div>

<div class="form-group">
    <label for="">Specification:</label>
    <input type="text" class="form-control" name="specification" id=""  >
</div>

<div class="form-group">
    <label for="">Checklist Quantity:</label>
    <input type="text" class="form-control" name="checklistquantity" id=""  >
</div>


<button class="btn btn-primary" name="add"  >Add</button>
</form>
        </div>

        
    </div>
   
    <div class="col-md-3"></div>

   
    
 </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>






