<html>
<head>
<title>Summer camp Registration Page</title>
</head>
<body>
  <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<meta name="viewport" content="width=11">
<style>
 font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  background: #555;
}

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

</head>
<body>

<div class="container">
 
    <div class=”form_box”>
 
    </div>

         <form action="<?PHP echo base_url(). 'index.php/student5/register/' ?>" method="POST" name="registration12">
        <h2>Summer camp Registration Page</h2>
        <div class="input-group">
          <form name="registration" class="registartion-form" >
          <div class="form-group">
 <label for="firstName">FirstName</label>
  <input type="text" name="firstName" placeholder="enter the name" onkeypress="return allowOnlyLetters(event,this);" required />
  
</div>
<div class="form-group">
<label for="lastName">LastName</label>
  <input type="text" name="lastName" placeholder="enter the Name" onkeypress="return allowOnlyLetters(event,this);" required />
</div>
<div class="form-group">
 <label for="age">Age</label>
 <input type="text" name="age" value="" id="extra7" name="extra7" onkeypress="return isNumber(event)" />

</div>

<div class="dropdown">  
 <label for="course">Course</label>
 <input list="browsers" name="course">
  <datalist id="browsers">
<select>  
<option value = "painting">painting   
</option>  
<option value = "swimming">swimming   
</option>  
<option value = "drawing">drawing  
</option>  
<option value = "dancing">dancing  
</option> 
<option value = "singing">singing  
</option>  
</datalist>  
</select>  
            
</div>



<!-- Phone Number -->
<div class="form-group">
  <label for="contactNumber">ContactNumber</label>
  <input type="contactNumber"  numbers must be start with number= "8,7,9" reg="^[789]\d{9}$" minlength="10" maxlength="10" id="mobile" name="contactNumber" title="10 digit  contact number" reg="^[789]\d{9}$"  onkeypress="return isNumber(event)" />
</div>
  
        <br>
        <button id="submit-button">Submit</button> 
         <p><a class="btn btn-lg btn-primary btn-block" href="<?PHP echo base_url(). 'index.php/student5/view/' ?>"> 'view the users' ?>" </a></p> 
        <br>

         
         <script>
    function allowOnlyLetters(e, t)   
{    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
   else { return true; }    
   if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))    
       return true;    
   else  
   {       
      return false;    
   }           
} 

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function OnlyNumbers(e){
  var Asciicode=(e.which)? e.which: e.keyCode
  if(Asciicode> 31 && (Asciicode< 48 || Asciicode > 57)){
    return false;
  }
  return true;
  }

function validate(){
  var password=document.getElementbyId("password");
   var conformPassword=document.getElementbyId("conformPassword");
   if(password!=conformPassword){
    alert("password did not match");
    return false;
   }
   return true;
 }



</script>
</form>
    </div>

  </div>


</div>
</body>
</html>