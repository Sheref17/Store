<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">

    <style>
        body{
            display: block;
        }
        p , h1 {
            margin: 15px;
        }
        .Games{
            margin-top: 250px;
            color: white;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            row-gap: 10px;
  

        }
        .content{
            width: 30%;
            box-shadow: 0 0 50px rgba((0), 0, 0, .5);
            backdrop-filter: blur(20px);
            text-align: center;
          

        }
        .content img {
            width: 100%;
   
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1 >Hello</h1>
        <i class="fa-solid fa-bars" onclick="Display()"></i>
        <ul class="list">
            <li><a href="./signin.php"class="active">Home</a></li>
            <li><a href="./contact.php"class="active">Contact</a></li>
            <button onclick="logout()">log out</button>

        </ul>

    </div>
    <div class="Games">
        <div class="content">
          <div class="image">
            <img src="./img/1186452.jpg" alt="">
          </div>
          <div class="descraption">
            <h1>Elden ring</h1>
            <p>BANDAI NAMCO Entertainment Inc.</p>
            <p>$39.99 USD</p>
            <button class="buy">Buy now</button>
          </div>
            
        </div>
        <div class="content">
            <div class="image">
              <img src="./img/600925.jpg" alt="">
            </div>
            <div class="descraption">
              <h1>Dark Souls 3</h1>
              <p>BANDAI NAMCO Entertainment Inc.</p>
              <p>$59.99</p>
              <button class="buy">Buy now</button>
            </div>
              
          </div>
          <div class="content">
            <div class="image">
              <img src="./img/1342688.jpeg" alt="">
            </div>
            <div class="descraption">
              <h1>Sekiro: Shadows Die Twice</h1>
              <p>BANDAI NAMCO Entertainment Inc.</p>
              <p>$29.99</p>
              <button class="buy">Buy now</button>
            </div>
              
          </div>
          <div class="content">
            <div class="image">
              <img src="./img/414076.jpg" alt="">
            </div>
            <div class="descraption">
              <h1>Little Nightmares II</h1>
              <p>BANDAI NAMCO Entertainment Inc.</p>
              <p>$9.99</p>
              <button class="buy">Buy now</button>
            </div>
              
          </div>
          <div class="content">
            <div class="image">
              <img src="./img/397324.jpg" alt="">
            </div>
            <div class="descraption">
              <h1>Dark Souls 2</h1>
              <p>BANDAI NAMCO Entertainment Inc.</p>
              <p>$59.99</p>
              <button class="buy">Buy now</button>
            </div>
              
          </div>
          <div class="content">
            <div class="image">
              <img src="./img/532171.jpg" alt="">
            </div>
            <div class="descraption">
              <h1>Call Of Duty</h1>
              <p>BANDAI NAMCO Entertainment Inc.</p>
              <p>$69.99</p>
              <button class="buy">Buy now</button>
            </div>
              
          </div>    
   
          
          

    </div>


    <script src="./js/index.js"></script>
 
    <script src="./js/home.js"></script>
    
    
</body>
</html>