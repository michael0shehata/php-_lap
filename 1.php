
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
      
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
    
      <img src="img/ITI_logo.png" style="width: 100px;" alt="">
      
      
    </nav>   
    <div class="clear"></div>
<div class="div1">
  <table class="t1" border=".1">    
    <tr class="tr2">
      <td colspan="2" class="td7">Register- Create Account</td>
    </tr>
    <tr>
      <td colspan="2" class="td6" >Field marked With * ar compulsorry fields </td>
    </tr>
    <tr>
      <td class="td4">Your name:</td>
      <td><input type="text" name="Your_name" size="40"></td>
    </tr>
    <tr>
      <td class="td4">E-Mail ID:</td>
      <td><input type="email" name="E-Mail_ID" size="50"></td>
    </tr>
    <tr>
      <td class="td4">Group#:</td>
      <td><input type="number_format" name="group" size="20"></td>
    </tr>
    
    <tr>
      <td class="td4">Class deatails:</td>
      <td class="td8"><textarea  name="Class_deatails"></textarea></td>
    </tr>
    <td class="td4">Gender</td>
    <td>
      
        <input type="radio" name="Gender" value="Male"><br>Male<br>
        <input type="radio" name="Gender" value="Female"><br>Female<br>
     
    </td>

   




    <tr>
      <td class="td4">select course:</td>
      <td>  
      
  <div class="form-check form-switch">
  <input name= "php" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">php</label>
</div>
<div class="form-check form-switch">
  <input name= "html"   class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
  <label class="form-check-label" for="flexSwitchCheckChecked">html</label>
</div>
<div class="form-check form-switch">
  <input  placeholder="123-45-678" name= "MYSQL"  class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">MYSQL</label>
</div>
<div class="form-check form-switch">
  <input name= "JS"  class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
  <label class="form-check-label" for="flexSwitchCheckChecked">JS</label>
</div>
    </tr>
    

    <tr>
      <td class="td4">Agree <br> <input type="submit" name="submit" value="Confirm"></td>
      <td>   <input type="checkbox" name="checkAgree"> <a href=""></a> 
      
    </tr>


</table>

</div>
        
      </form>
   
   </body>
</html>



<?php
#
   if( isset( $_POST["Your_name"]) && isset( $_POST["E-Mail_ID"] )&& isset ($_POST["group"]) && isset( $_POST["Class_deatails"]) &&  isset ($_POST["Gender"]) && isset( $_POST["course"] ) )
    {
      
      echo "Your name is  ". $_POST['Your_name']. "<br/>";
      echo "Your E-mail is ". $_POST['E-Mail_ID']. "<br/>";
      echo "Your group is ". $_POST['group']. "<br/>";
      echo "Your class is ". $_POST['Class_deatails']. "<br/>";
      echo "Your Gender is ". $_POST['Gender']. "<br/>";
      echo "Your course is ". $_POST['course']. "<br/>";
   }
?>




    <footer>
      <hr>
      <P style="text-align:center; font-weight:bold ;color:rgb(38, 89, 133)  ;">Copyright 2021 by Noha Salah ®. All Rights Reserved.</P>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>