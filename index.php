<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="navbar">
        <h1>Logo</h1>
        <i class="fa-solid fa-bars" onclick="Display()"></i>
        <ul class="list">
            <li><a href="./signin.php"class="active">Home</a></li>
            <li><a href="./contact.php"class="active">Contact</a></li>
            <li><a href="./index.php" class="active">Sign up</a></li>
            <li><a href="./signin.php" class="active">Login</a></li>
        </ul>
    

    </div>
    <div class="Register">
   <div class="head"><h2>Sign Up</h2></div>
        <form method ="post"  action = "connection.php"  >
        <div class="inputs">
            <label for="userName">
                <i class="fa-regular fa-user"></i>
            </label>
            <input type="text" id="userName" name="name" placeholder="Name">
       
        </div>
          <div class="inputs">
            <label for="userEmail">
                <i class="fa-regular fa-envelope"></i>
            </label>
            <input type="email" id="userEmail" name="email" placeholder="Email">
          

          </div>
          <div class="inputs">
            <label for="userPass">
                <i class="fa-solid fa-lock"></i>
                </label>
            <input type="password" id="userPass" name="password" placeholder="password">
        
          </div>
   <div class="inputs">
   <button type ="submit"  >Sign up</button>
   </div>

        </form>
        <div id="alert" class="alert"></div>
        <div class="Signin">
            <span> Do you aleardy have an accouent?</span>
            <a href="./signin.php"> Sign in</a>
        </div>
      

    </div>
    <script src="js/index.js"></script>
    
    
</body>
</html>