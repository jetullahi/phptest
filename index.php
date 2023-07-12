<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="index.php" method = "post">
    <input type="text" name="student">

  <input type="submit" >
</form>
  
         <?php 
         $Notat = array("Jim"=>"A+", "Pam"=>"B-", "Oskar"=>"C+");
        // $Notat ["Jim"]="F";
         //echo $Notat["Jim"];
         echo $Notat[$_POST["student"]];
         
        
       ?>

 
<?php 
       // $Friends = array("Kevin" , "Karen", "Oskar", "Jim");
        //$Friends [0] = 400;
        //echo $Friends[0];
       // $Friends[4]= "Mike";
        //echo count($Friends);
       ?>

 

    
</body>
</html>