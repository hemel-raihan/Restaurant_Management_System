<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>


    <!---header-->
    <header>
        
        
    </header>

 <!---sidebar-->
    
 <div class="sidebar">
           
            <a href="profile.php"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="showfoodorder.php"><i class="fa fa-cogs" aria-hidden="true"></i><span>See Orderlist</span></a>
            <a href="admin_edt_dlt.php"><i class="fa fa-table" aria-hidden="true"></i><span>Update Food</span></a>
            <a href="tradition_user.php"><i class="fa fa-th" aria-hidden="true"></i><span>Tradition User</span></a>
            <a href="showofferlist.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Offer List</span></a>
            <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Settings</span></a>
           
            
        </div>
    



<div class="content">
    <div class="formtable">
        <h1>Customer Order List</h1>
<form action="editdata_core.php" method="post">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">

<table class="table table-bordered table-striped mb-0">
  <thead>
    <tr>
      <th scope="col">Food name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
      <th scope="col">Customer name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
require_once("connection.php");

$myquery = "SELECT * FROM foodorder;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
    <tr>
    
   <td><?php echo $mydata["foodname"]; ?> </td>
   <td><?php echo $mydata["quantity"]; ?> </td>
   <td ><?php echo $mydata["price"]; ?> </td>
   <td><?php echo $mydata["total"]; ?> </td>
   <td><?php echo $mydata["username"]; ?> </td>
   <td><?php echo $mydata["email"]; ?> </td>
   <td><?php echo $mydata["addr"]; ?> </td>
   <td><?php echo $mydata["phone"]; ?> </td>
   <td> <a href="#?id=<?php echo $mydata["id"]; ?>" >Send Email</a></td>
    </tr>
<?php } ?>
  </tbody>
</table>

</div>

     
    </div>
    </div>

    
</body>
</html>