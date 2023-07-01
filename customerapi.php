<?php  

if(isset($_POST['add']))
{

    $con  = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"login");
    $sql = "INSERT INTO  `login`.`customer` VALUES( 
        
        $_POST[cid],
     '$_POST[orderdate]',
      '$_POST[company]',
    '$_POST[owner]',
    $_POST[item],
     $_POST[quantity],
    $_POST[weight],
    '$_POST[requestforshipment]',
    '$_POST[trackingid]',
   '$_POST[shipmentsize]',
    $_POST[boxcount],
    '$_POST[specification]',
     $_POST[checklistquantity]


     )";
    $sql_run = mysqli_query($con, $sql);
    


echo '<script type="text/JavaScript"> 
alert("Updated Successfully...");
window.location.href="userdashboard.php";
</script>'
;
}



?>