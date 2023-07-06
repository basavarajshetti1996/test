<!DOCTYPE html>
<html>
<head>
<title>Display records</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CodeIgniter Simple CRUD Tutorial</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <style>
 font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  body{

  background-color: #3164ff;
}
.container {
  width: 90vw;
  max-width: 600px;
  padding: 2em 1.5em;
  background-color: #ffffff;
  margin: 1em auto;
  border-radius: 0.5em;
}
h4 {
  font-size: 1.5em;
}
.input-section {
  margin: 0.5em 0;
}
label,
.error-message {
  display: block;
  font-size: 1em;
}
label {
  margin-bottom: 0.5em;
  font-weight: 500;
}
.error-message {
  margin-top: 0.2em;
}
input,
button {
  display: block;
  outline: none;
  width: 100%;
  padding: 0.5em;
  border-radius: 0.3em;
}
input {
  padding: 1em 0.5em;
  border: 1.5px solid #d0d0d0;
}
button {
  font-size: 1em;
  background-color: #3164ff;
  border: none;
  color: #ffffff;
  padding: 0.8em 0;
  margin-top: 2em;
}
.required-color {
  color: #ff4747;
}
.error {
  border-color: #ff4747;
}
.valid {
  border-color: #37a137;
}
.hide {
  display: none;
}
@media only screen and (max-width: 450px) {
  .container {
    font-size: 14px;
  }

</style>

<div class="container">
  <h1 class="page-header text-center">Add stock</h1>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <a href="<?php echo base_url(); ?>index.php/Users/view" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a><br><br>
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
            <td><?php echo $user->discount_price; ?></td>
            <td><?php echo $user->total; ?></td>
              
              

               
            </tr>
          
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
