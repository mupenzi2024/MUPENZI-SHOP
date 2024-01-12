<!DOCTYPE html>
<html>
    <head><title>mupenzi shop</title>
     <style>
        body{
            background-image: url(images/bg8.jpg);
            
        }
        .navbar{
    margin-top: -1%;
    height: 80px;
    width: 100%; 
    position: fixed;
   background-color: aliceblue;
}
.hhh b{
    margin-top: 1%;
    height: 67px;
    width: 40%; 
    position: fixed;
   background-color: aliceblue;
   margin-left: 30%;  
   text-align: center;
}

.navbar .table{
    position: fixed;
    height: 80px;
    width: 20%;
    margin-left: 92%;
    margin-top: 1%; 
}
.logo{
    position: fixed;
    height: 80px;
    width: 40%;
    float: left;
}
.table button{
    height: 50px;
    margin-top: -20%;
}
.navbar .welcome{
    height: 400px;
    width: 800px;
    color: yellowgreen;
    margin:20%;
    text-align: center;
}
.navbar .welcome button{
    height: 50px;
    width: 200px;
    font-size: 30px;
    margin-top: 5%;
    border-radius: 12px;
    box-shadow: -5px 5px 15px rgba(255,255,0,1),5px 5px 15px rgba(0,0,0,0.2);
}
.navbar .welcome button:hover{
    background-color: yellowgreen;

}
.navbar .welcome .greetings{
    margin-left: 25%;
    margin-top: 10%;
    height: 50px;
    width: 25%;
    border-radius: 12px;
    text-align: center;
    color: yellowgreen;
  position: relative;
  animation: moveLeftRight 7s linear infinite;
}

@keyframes moveLeftRight {
  0% {
    left: 0;
  }
  50% {
    left: 200px;
  }
  100% {
    left: 0;
  }
}

     </style>
    </head>
    <body>
        <div class="navbar">
            <div class="logo"><img src="images/logo1.jpg" height="80px" width="55%">
            </div>
            <div class="hhh">
                    <b style="font-size: 30px;">online Shopping website for all clients</b></div>
            <div class="table">
            <table style="height: 80px; width: 50%;">
                <tr>
                    <td><a style="text-decoration: none; color: black;" href="admin login.php">
                    <button style="border-radius: 12px; font-size: 32px;">login</button></a></td>
                </tr>
            </table>
            </div>
            <div class="welcome">
                <div class="greetings">
                    <h1 id="demo"></h1></div>
                    <script>
                    const hour = new Date().getHours(); 
                    let greeting;
                    
                    if (hour>=1 && hour<12) {
                      greeting = "Good morning";
                    } else if(hour>=12 && hour<18){
                      greeting = "Good afternoon";
                    }
                    else{
                        greeting="Good evening";
                    }
                    document.getElementById("demo").innerHTML = greeting;
                    </script>
                
                <p style="font-size: 50px;"><b><i>Y</i></b>ou are <b><i>W</i></b>elcome to our <b><i>W</i></b>ebsite</p>
                <button><a style="text-decoration: none; color: black;" href="cards.php"><b>continue</b></a></button>
                </div>
                </div>
               </div>
            </body>
            </html>