<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Diagnostic</title>

        <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="nav">
            <div class="nav-left">
                <img src="assets/Group748.png" alt="top-left-logo">
            </div>
            <div class="nav-right">
                <div><a class="nav-right-button" href="#">Home</a></div>
                <div style="margin: 0 20px"><a class="nav-right-button" href="#">Health</a></div>
                <div><a class="nav-right-button"  href="#">About Us</a></div>
            </div>
        </div>
        <div class="first-page">
            <div class="dots-first">
                <div class="dot dot1"></div>
                <div class="dot dot2"></div>
                <div class="dot dot3"></div>
                <div class="dot dot4"></div>
                <div class="dot dot5"></div>
                <div class="dot dot6"></div>
                <div class="dot dot7"></div>
                <div class="dot dot8"></div>
                <div class="dot dot9"></div>
                <div class="dot dot10"></div>
                <div class="dot dot11"></div>
            </div>
            <div class="background-fist-page"></div>
            <h1 class="welcome-to">Welcome to <span style="color:#EDB0B0">CardiCheck</span></h1>
            <h2 class="monitor-your">Monitor Your Heart, Achieve a Healthy Life</h2>
            <img class="img-first" src="assets/Macbook Pro M1 2021.png" alt="">
        </div>
        <div class="second-page">
            <img class="second-bg-img" src="assets/second-bg.png" alt="background-img">
            <div class="dot12"></div>
            <div class="dot13"></div>
            <div class="second-left">
                <img class="img-second-left" src="assets/second-left.png" alt="laptop">
            </div>
            <div class="second-right">
                <h1 class="second-right-text">We help you for</h1>
                <h1 class="second-right-text">better life</h1>
                <h1 class="second-right-text" style="color: #EDB0B0">and best heart</h1>
                <h1 class="second-right-text" style="color: #EDB0B0">life</h1>
                <!-- <a href="#" class="second-button">Try</a> -->
                <!-- <button class="second-button">Try</button> -->
                <div class="second-button-div">
                    <a href="#third-page" class="second-button" role="button">Try</a>
                </div>
            </div>
        </div>
        <div id="third-page" class="third-page">
            <div class="third-left">
                <div class="third-logo">
                    <img src="assets/ThirdLogo.png" alt="logo CardiCheck">
                    <div class="third-logo-name" style="color: #424498">Cardio<span style="color:#EDB0B0">Check</span></div>
                </div>
                <div class="third-sentence">Check your heart condition! <br>Please fill in the data below.</div>
                <div class="third-form">
                    <form action="">
                        <label class="forLabel" for="name">Name</label><br>
                        <input type="text" id="name" name="name" placeholder="Name"><br>
                        <label class="forLabel" for="age">Age</label><br>
                        <input type="text" id="age" name="age" placeholder="Age"><br>
                        <label class="forLabel" for="gender">Gender</label><br>
                        <select name="gender" id="gender">
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select><br>
                        <label class="forLabel" for="height">Height</label><br>
                        <input type="text" id="height" name="height" placeholder="Height"><br>
                        <label class="forLabel" for="weight">Weight</label><br>
                        <input type="text" id="Weight" name="Weight" placeholder="Height"><br>
                        <label class="forLabel" for="tekananDarah">Tekanan Darah</label><br>
                        <input type="text" id="tekananDarah" name="tekananDarah" placeholder="Tekanan Darah"><br>
                        <label class="forLabel" for="kadarKolestrol">Kadar Kolestrol</label><br>
                        <input type="text" id="kadarKolestrol" name="kadarKolestrol" placeholder="Kadar Kolestrol"><br>
                        <input type="submit" value="Result">
                    </form>
                </div>
            </div>
            <div class="third-right">
                <img class="third-right-img" src="assets/third-right.png" alt="doc-image">
                <!-- <img class="third-bg" src="assets/third-bg.png" alt="background-img"> -->
            </div>
        </div>
    </body>
</html>
