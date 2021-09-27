<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssforsofa/sofa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet"> 
</head>
<body>
    <!-- Patient details posted from index1.php-->
    <div class ="patient-details">
<p class="patient-head"> Patient Information </p>
<p>First Name : <?= $_POST['username'] ?></p>
<p>Last Name : <?= $_POST['password'] ?></p>
<p>NHI Num : <?= $_POST['NHI'] ?></p>
</div>
    <h1> SOFA (Sequential Organ Failure Assessment) score </h1>
    <form method="get"> 
    <!-- Labels + checkbox alongside inputs  -->
             <label for="num1">Respiratory system PaO2 + FiO2</label>
            <input type ="number" name="num1" placeholder="Number 1">
            
    <input type="checkbox" id="check" name="check"
         checked>
  <label for="check">Is the patient ventilated?</label>
<br>

            <label for="num2">Nervous System (Glasgow coma scale) </label>
            <input type ="number" name="num2" placeholder="Number 2">
<
<br>
            <label for="num3"> Liver (Bilirubin (mg/dl)) </label>
            <input type ="number" name="num3" placeholder="Number 3" step=".001">
            <br>
            <label for="num4"> Coagulation (Platelets×103/μl) </label>
            
            <input type ="number" name="num4" placeholder="Number 4" step=".001">
            <br>
            <label for="num5"> Kidneys (Creatinine (mg/dl) [μmol/L]) </label>
            <input type ="number" name="num5" placeholder="Number 5"step=".001">
            <!-- Create operator with only add as an option  -->
            <select name="operator"> 
                
                <option> Add</option>
                
                
                
</select> 
<br>
<button type = "submit" name="submit" value= "submit"> Calculate </button>

    </form>
<p> SOFA SCORE: </p>
    <?php
    // if submit is actually submit variables are now = inputs that the user put in 
        if(isset($_GET['submit'])){
            $result1 = $_GET['num1'];
           
            $result2 = $_GET['num2'];
            $result3 = $_GET['num3'];
            $result4 = $_GET['num4'];
     
           $result5 = $_GET['num5'];
// calculations
 // Respiratory system
 
 if(intval($_GET['num1']) > 400 )
 {
   $result1 = 0;
 }
 if( intval($_GET['num1'])>=300 && intval($_GET['num1']) < 400)
 {
     $result1 = 1;
 }
 if( intval($_GET['num1']) >=200 && intval($_GET['num1']) < 300 )
 {
     $result1 = 2;
 }
 if(intval($_GET['num1'])>= 100  && intval($_GET['num1']) < 200 )
 {
     $result1 = 3;
 }
 if(intval($_GET['num1']) >= 0  && intval($_GET['num1']) < 100 )
 {
     $result1 = 4;
 }


  //  Respiratory system        
  // nervous system
  if(intval($_GET['num2']) == 15 )
  {
    $result2 = 0;
  }
  if( intval($_GET['num2'])>=13 && intval($_GET['num2']) <= 14 )
  {
      $result2 = 1;
  }
  if( intval($_GET['num2']) >=10 && intval($_GET['num2']) <= 12 )
  {
      $result2 = 2;
  }
  if(intval($_GET['num2']) >= 6 && intval($_GET['num2']) <= 9)
  {
      $result2 = 3;
  }
  if(intval($_GET['num2']) < 6 )
  {
      $result2 = 4;
  }
 // nervous system 

 // liver system
 if(intval($_GET['num3']) < 1.2 )
 {
   $result3 = 0;
 }
 if( intval($_GET['num3']) >=1.2 && intval($_GET['num3']) <= 1.9 )
 {
     $result3 = 1;
 }
 if( intval($_GET['num3']) >=2 && intval($_GET['num3']) <= 5.9 )
 {
     $result3 = 2;
 }
 if(intval($_GET['num3']) >= 6 && intval($_GET['num3']) <= 11.9)
 {
     $result3 = 3;
 }
 if(intval($_GET['num3']) > 12 )
 {
     $result3 = 4;
 }

 // liver system
//  Coagulation 
if(intval($_GET['num4']) >= 150 )
 {
   $result4 = 0;
 }
 if( intval($_GET['num4']) < 150  )
 {
     $result4 = 1;
 }
 if( intval($_GET['num4']) < 100 )
 {
     $result4 = 2;
 }
 if(intval($_GET['num4']) < 50 )
 {
     $result4 = 3;
 }
 if(intval($_GET['num3']) > 20)
 {
     $result4 = 4;
 }
//  Coagulation
// Kidneys
if(intval($_GET['num5']) < 1.2 )
{
  $result3 = 0;
}
if( intval($_GET['num5']) >=1.2 && intval($_GET['num5']) <= 1.9 )
{
    $result3 = 1;
}
if( intval($_GET['num5']) >=2 && intval($_GET['num5']) <= 3.4 )
{
    $result3 = 2;
}
if(intval($_GET['num5']) >= 3.5 && intval($_GET['num5']) <= 4.9)
{
    $result3 = 3;
}
if(intval($_GET['num5']) > 5 )
{
    $result3 = 4;
}


// Kidneys


            $operator = $_GET['operator'];
            switch ($operator){
                
                    case "Add": 
                        echo $result1 + $result2 + $result3 + $result4 + $result5;
                        break;
                      
                           
                           

            }
            
        }
?>
</body>
</html>