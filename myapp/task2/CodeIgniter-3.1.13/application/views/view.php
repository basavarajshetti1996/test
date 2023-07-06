<html>
<head>
<title>Display records</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
 
<body>
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Age</td>
         <th>Course</th>
         <th>ContactNumber</th>
          
  
  </tr>
  <?php
  $i=1;
  foreach($result as $row)
  {
  ?>
  <td><?php echo $i;?></td> 
      
         <td><?php echo $row->firstName;?></td>  
         <td><?php echo $row->lastName;?></td>  
            <td><?php echo $row->age;?></td> 
            <td><?php echo $row->course;?></td>
            <td><?php echo $row->contactNumber;?></td>
  </tr>
  <?php
  $i++;
  }
   ?>
</table>
</body>
</html>