<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>


    <!---header-->
    <header>
        
        
    </header>

 <!---sidebar-->
    
 <div class="sidebar">
           
            <a href="dashboard.php"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="admininsert.php"><i class="fa fa-cogs" aria-hidden="true"></i><span>Add Food</span></a>
            <a href="admin_edt_dlt.php"><i class="fa fa-table" aria-hidden="true"></i><span>Update Food</span></a>
            <a href="tradition_user.php"><i class="fa fa-th" aria-hidden="true"></i><span>Tradition User</span></a>
            <a href="showofferlist.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Offer List</span></a>
            <a href="employee_reg.php"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Employee</span></a>
           
            
        </div>
    



<div class="content">
    <div class="formtable">
        <h1>Traditional offer List</h1>
<form action="editdata_core.php" method="post">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">

<table class="table table-bordered table-striped mb-0">
  <thead>
    <tr>
      <th scope="col">picture</th>
      <th scope="col">Item Name</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Days</th>
      <th scope="col">User Id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
require_once("connection.php");

$myquery = "SELECT * FROM addoffer;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
    <tr>
    <td ><center><img width="60px" src="traditional_item/offerimg/<?php echo $mydata["picture"]; ?>"></center> </td>
   <td><?php echo $mydata["itemname"]; ?> </td>
   <td><?php echo $mydata["title"]; ?> </td>
   <td ><?php echo $mydata["price"]; ?> </td>
   <td><?php echo $mydata["description"]; ?> </td>
   <td><?php echo $mydata["days"]; ?> </td>
   <td><?php echo $mydata["user_id"]; ?> </td>
   <td> <a href="offerlist_edit.php?id=<?php echo $mydata["id"]; ?>" >Add this</a></td>
    </tr>
<?php } ?>
  </tbody>
</table>

</div>

     
    </div>
    </div>

    
</body>
</html>