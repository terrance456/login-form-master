<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?
family=Material+Icons+Outlined" rel="stylesheet">
 
  <title>Sign-up Form</title>
</head>
<body>
  <div class="login-wrapper">


    <form action="includes/signup.inc.php" class="form" method="POST">
      <img src="img/avatar.png" alt="">
      <h2>Sign-Up</h2>



      <?php
      $signupMessage = isset($_GET['signup']) ? $_GET['signup'] : null;
     

    if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {

        echo'<p class="signuperror">Fill in all fields !</p>';      
      }
      else if($_GET["error"] == "invaliduidmail") {
        echo'<p class="signuperror">Invalid username and e-mail !</p>'; 

      }
       else if($_GET["error"] == "invaliduid") {
        echo'<p class="signuperror">Invalid username !</p>'; 

      }
       else if($_GET["error"] == "invalidmail") {
        echo'<p class="signuperror">Invalid e-mail !</p>'; 

      }
       else if($_GET["error"] == "passwordcheck") {
        echo'<p class="signuperror">Your password do not match !</p>'; 

      }
       else if($_GET["error"] == "usertaken") {
        echo'<p class="signuperror">Username is already taken !</p>'; 

      }
    }
   
  else if($signupMessage == "success"){
    echo '<p class="signupsuccess" >signup successful!</p>';
  }

  ?>

  <style>
          .signuperror{

            position: relative;
            text-align: center;
            margin: 20px;
            color:yellow;
             font-weight:300;


          }



  </style>







      <div class="input-group">
        <input type="text" name="uid" id="loginUser" required="">
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="Email" name="mail" id="Enter email id" required="">
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <input type="password" name="pwd" id="password" required="">
        <label for="loginPassword">Password</label>
         <span id="togglePassword" 
          class="material-icons-outlined">
           visibility</span>
           <div class="pw-strength">
      <span>Weak</span>
      <span></span>
    </div><br>

<script>

function getPasswordStrength(password){
  let s = 0;
  if(password.length > 6){
    s++;
  }
  if(password.length > 10){
    s++;
  }
  if(/[A-Z]/.test(password)){
    s++;
  }
  if(/[0-9]/.test(password)){
    s++;
  }
  if(/[^A-Za-z0-9]/.test(password)){
    s++;
  }
  return s;
}
document.querySelector(".input-group #password").addEventListener("focus",function(){
  document.querySelector(".input-group .pw-strength").style.display = "block";
});

document.querySelector(".input-group #password").addEventListener("keyup",function(e){
  let password = e.target.value;
  let strength = getPasswordStrength(password);
  let passwordStrengthSpans = document.querySelectorAll(".input-group .pw-strength span");
  strength = Math.max(strength,1);
  passwordStrengthSpans[1].style.width = strength*20 + "%";
  if(strength < 2){
    passwordStrengthSpans[0].innerText = "Weak";
    passwordStrengthSpans[0].style.color = "white";
    passwordStrengthSpans[1].style.background = "red";
  } else if(strength >= 2 && strength <= 4){
    passwordStrengthSpans[0].innerText = "Medium";
    passwordStrengthSpans[0].style.color = "white";
    passwordStrengthSpans[1].style.background = "yellow";
  } else {
    passwordStrengthSpans[0].innerText = "Strong";
    passwordStrengthSpans[0].style.color = "white";
    passwordStrengthSpans[1].style.background = "#20a820";
  }
});


</script>


<style>

.input-group .pw-strength {
  position:relative;
  border-radius: 0 0 5px 5px;
  height:5px;
  margin-top:-30px;
  text-align:center;
  background:#7d7d7d;
  display:none;
}


.input-group .pw-strength span:nth-child(1) {
  position:relative;
  font-size:12px;
  color:#fff;
  top:3px;
  font-weight:600;

}

.input-group .pw-strength span:nth-child(2) {
  position:absolute;
  top:0px;
  left:0px;
  width:0%;
  height:100%;
  border-radius: 0 0 5px 5px;
  z-index:1;
  transition:all 300ms ease-in-out;
}


  </style>



       
        
      </div>
       <div class="input-group">

        <input type="password" name="pwd-repeat" id="Re-EnterPassword" required="">

        <label for="loginPassword">Re-Enter Password</label>
         
      
      </div>
      <input type="submit" name= "signup-submit" id="submit" value="register" class="submit-btn"><br><br>
      <a href="index.php" class="forgot-pw">Already have an account?</a> 
    </form>




    <?php

    if(isset($_GET["newpwd"])) {
      if($_GET["newpwd"] == "passwordupdated") {
        echo '<p class="signupsuccess">Your password has been reset!</p>';
      }
    }
    ?>
    <a href="index.php">Forget your password?</a>

  </div>


<script>

const pass = document.querySelector('#password')
        const btn = document.querySelector('#togglePassword')

        btn.addEventListener('click', () => {
            if (password.type === "text") {
                password.type = "password";
                btn.innerHTML = "visibility";
            } else {
                password.type = "text";
                btn.innerHTML = "visibility_off";

            }
        })

        </script>


  <style>

.material-icons-outlined{

 position: absolute;
  color: grey;
  cursor: pointer;
  margin: 0 -20px;

}


  </style>


</body>
</html>