<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <style>

            * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 30px 10%;
  background-color: #24252a;
}

.logo {
  cursor: pointer;
  order: 3;
  margin-left: auto;
}

nav {
  order: 1;
}

.nav__links a,
.cta,
.overlay__content a {
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  color: #edf0f1;
  text-decoration: none;
}

.nav__links {
  list-style: none;
  display: flex;
  font-size: 16px;
}

.nav__links li {
  padding: 0px 20px;
}

.nav__links li:nth-child(1) {
  padding: 0 20px 0 0;
}

.nav__links li a {
  transition: all 0.3s ease 0s;
}

.nav__links li a:hover {
  color: #007bff;
}

.cta {
  order: 2;
  margin-left: 20px;
  padding: 9px 25px;
  background-color:#007bff;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}

.cta:hover {
  background-color: #0056b3;
  color: white;
  text-decoration: none;
}


        </style>
        <script type="text/javascript" href="NavBar.js"></script>
    </head>
    <body>
        <header>
            <a class="logo" href="..\Front Page\ProfilePage.php" style="width: 55px; height: 55px;"><img src="..\Navigation bar\man.jpeg" style="width: 50px; height: 50px; border-radius: 50%;" alt="logo"></a>
            <nav>

                <ul class="nav__links">
                    <li><a href="http://localhost/project/navigation bar/CV/Project.html" style="margin-left: 20px;">Home</a></li>
                   
                    <li><a href="LookingForemployee.php" style="margin-left: 20px;">Looking for an Employee?</a></li>
                    
                </ul>
            
            </nav>
            <a class="cta" href="..\Navigation Bar\contactus.php">Contact Us!</a>
        
        </header>
        
    </body>
</html>