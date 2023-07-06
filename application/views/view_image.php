<!doctype html>  
<html>  
  <head>  
   <title>  </title>  
  </head>  
<body>  
    <h1> Upload Multiple file and image in Codeigniter </h1>    
    <strong><?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." files"; ?></strong>  
         
    
    <form method="POST" action="<?php echo base_url(); ?>index.php/Users/uploadimage">  
   <label >Upload the file</label>
    <input type='file' name='picture' id="picture" > <br/>
    </div>
    <div class="form-group">
    <input type='submit' > <br/>
 </div> 
  </form>  
     
</body>  
</html>
         

