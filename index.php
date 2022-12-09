<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
       .erro  {color: hotpink;
               }
       .auto {
            margin-left: 240px;
             margin-top: 70px;

            }
        </style>
    </head> 
 <body>
        
<?php 

  $nameErr = $emailErr = $websiteErr =$commentErr = $genderErr = "";
  
 $name=$email=$website=$comment=$gender="";
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
   if (empty($_POST["name"])) {
      $nameErr = "name is reqired";
     }else{
          $name = input_test($_POST["name"]);

          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                 $nameErr = "Only letters allowed";
                 }
                }
          if (empty($_POST["email"])) {
             $emailErr = "email is reqired";
           }else{
                $email = input_test($_POST["email"]);

          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                  } 
                }
          if (empty($_POST["website"])) {
                $websiteErr = "website is reqired";
            }else{
                $website = input_test($_POST["website"]);

          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
            {
              $websiteErr = "Invalid URL";
             } 
             }
          if (empty($_POST["comment"])) {
                $commentErr = "comment is reqired";
           }else{
                $comment = input_test($_POST["comment"]); 
             }
                
            }

 function input_test($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }


 ?>
            <div class="auto">
     <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">   

    Name:<input type="text" name="name">
    <span class="erro">*<?php echo $nameErr ?> </span><br><br>
    E-mail:<input type="text" name="email">
    <span class="erro">*<?php echo $emailErr ?> </span>
    <br><br>
    Website:<input type="text" name="website"> 
    <span class="erro">*<?php echo $websiteErr ?> </span>
    <br><br>
    Comment:<br> <textarea name="comment" rows="10" cols="50"></textarea>
    <span class="erro">*<?php echo $commentErr ?> </span>
     <br><br>
    fil the option=
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
    <span class="erro">*<?php echo $genderErr ?> </span>
    <br><br><br>
    <input type="submit" name="submit" value="submit">

  
</form>
</div>

 
    </body>
    </html>
   
    

