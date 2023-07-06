<!DOCTYPE html>
<html>
<head>
<title>Display records</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage design</title>
</head>

</head>
<body>
    <div class="banner-area">
    <header>
           <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Serrvices</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Users/view">Contact</a></li>
                </ul>
            </div>

        </header>
        
<div class="container">
  <h1 class="page-header text-center">Stock Table</h1>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> </a><br><br>
      <table class="table table-bordered table-striped">
        <thead>
          <table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
            <th>Id</th>
            <th>SKU</th>
            <th>Product Name</th>
            <th>Product Desc</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Get Total</th>
            <th>File</th>
            

          </tr>
        </thead>
        <tbody>
          <?php
          foreach($result as $user){

            ?>
            <tr>
              <td><?php echo $user->id; ?></td>
            <td><?php echo $user->sku; ?></td>
            <td><?php echo $user->product_name; ?></td>
            <td><?php echo $user->product_desc; ?></td>
            <td><?php echo $user->qty; ?></td>
            <td><?php echo $user->price; ?></td>
            <td><?php echo $user->discount; ?></td>
            <td><?php echo $user->total; ?></td>
            <?php
          if(strtoupper(substr($user->sku, 0, 2))==strtoupper(substr($user->product_name, 0, 2))){

            ?>
            <td><img src="<?php echo base_url('uploads/images/'.$user->file); ?>" width="100" height="100"> </td>
            <?php
                }
            ?>
            </tr>
          
            <?php
          }
          ?>
        </tbody>
      </table>
 

    </div>
</body>


</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CodeIgniter Simple CRUD Tutorial</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">


 
 *{
    margin: 0;
    padding: 0;
}
.banner-area{
    background-image: url('https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNzU5MjE4OA&ixlib=rb-1.2.1&q=85');
    background-position: center center;
    background-size:cover ;
    /* -webkit-background-size:cover ; */
    height: 3600vh;
    width: auto;
    margin: auto;
}
.menu{
    float: right;
    list-style: none;
    margin-top:30px;
}
.menu ul li{
    display: inline-block;
}
.menu ul li a{
    color: #fff;
    text-decoration: none;
    padding: 5px 20px;
    font-family: 'poppins' ,sans-serif;
    font-size: 16px;
}
.menu ul li a:hover{
    color: rgb(199, 139, 255);
}
/* .logo{
    height: 20%;
    float: left;
    color: azure;
    list-style: none;
    
} */
.banner-text{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 20% 30%;
    text-align: center;
}
.banner-text h1{
    text-align: center;
    color:rgb(233, 185, 255);
    
    text-transform: uppercase;
    font-size: 60px;
    font-family: 'poppins' , sans-serif;
}
.banner-text p{
    color: #fff;
    font-size: 18px;
}
.banner-text a{
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    margin-top: 20px;
    display: inline-block;
    color: #fff;
}
.banner-text a:hover{
    background-color: white;
    color: rgba(68, 25, 109, 0.623);
    font-weight: bold;
}
</style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CodeIgniter Simple CRUD Tutorial</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <style>
 
</style>

    </div>
  </div>
</div>
</body>
</html>
