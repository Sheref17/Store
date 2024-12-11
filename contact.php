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
   <div class="head"><h2>Contact Us</h2></div>
        <form >
      
          <div class="inputs">
       
            <input type="email" id="userEmail" name="email" placeholder="Email">
          

          </div>
          <div class="inputs">
         
            <input type="text" id="massage" name="massage" placeholder="massage">
        
          </div>

        </form>
        <button onclick="sent()">Sent</button>
        <div id="sen" style="width: 100%; text-align: center;"></div>
     
        <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        
        </div>

    </div>
    <script src="./js/index.js"></script>
    <script src="./js/contact.js"></script>
    
    
</body>
</html>