<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  
         <?php
         $ifTall= false;
        $ifMale = true;
        if  ($ifMale && $ifTall){
        echo "you are tall male";
        }elseif($ifMale && !$ifTall){
          echo "You are a short male";  
        }
        elseif(!$ifMale && $ifTall){
          echo "You are not male but are tall";  
       }
          else{
          echo "You are not male and not tall";
        }
       ?>


 

    
</body>
</html>