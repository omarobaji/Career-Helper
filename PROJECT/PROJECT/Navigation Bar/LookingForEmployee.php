<!DOCTYPE html>
<html>
<head>
  <title>Looking For an Employee?</title>
  <link rel="stylesheet" type="text/css" href="LookingForEmploy.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
  <?php
  include "Navbar.php"
  ?>

    <div class="Scroll">
      <div class="filter-bar">
        <h3>What field of expertise would you like to search for?</h3>

        <br><br>
        <div id="cover">
          <form action="LookingForEmployee.php" method="POST">
            <div class="tb">
              <div class="td">
                <input type="text" name="search"></div>
                <div class="td" id="s-cover">
                  <button name="submit-search" type="submit" >
                    <div id="s-circle"></div>
                    <span></span>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <?php
          $db=mysqli_connect("localhost","root","");
          $er=mysqli_select_db($db,"webproject");
          $query1="SELECT * FROM cvdb";
          $result1= mysqli_query($db,$query1);
          $queryResults = mysqli_num_rows($result1);
          if ($queryResults > 0) {
            while ($rows  = mysqli_fetch_assoc($result1)) {

            }
          }
          ?>
          <br>
          <h3>Insert Empty field to display CV's of all majors!</h3>

        </div>
      </div>
      <div class="flex-container" >
        <?php
        require "search.php"
        ?>
        <?php
        $db=mysqli_connect("localhost","root","");
        $er=mysqli_select_db($db,"webproject");
        $query="SELECT * FROM cvdb";
        $result=mysqli_query($db,$query);
        while ($row = mysqli_fetch_assoc($result)) { 
          $name = htmlspecialchars($row['full_name'],ENT_QUOTES);
          $Email = htmlspecialchars($row['email'],ENT_QUOTES);
          $Des = htmlspecialchars($row['des'],ENT_QUOTES);
          $Des1 = htmlspecialchars($row['des1'],ENT_QUOTES);
          $Des2 = htmlspecialchars($row['des2'],ENT_QUOTES);
          $Faculty = htmlspecialchars($row['faculty'],ENT_QUOTES);
          $Major = htmlspecialchars($row['major'],ENT_QUOTES);
          $schoolName = htmlspecialchars($row['school_name'],ENT_QUOTES);
          $GradDate = htmlspecialchars($row['graduation_date'],ENT_QUOTES);
          $City = htmlspecialchars($row['city'],ENT_QUOTES);
          $PhoneNumber = htmlspecialchars($row['phone'],ENT_QUOTES);
          $Skill = htmlspecialchars($row['skill'],ENT_QUOTES);
          $Skill1 = htmlspecialchars($row['skill1'],ENT_QUOTES);
          $exp = htmlspecialchars($row['exp'],ENT_QUOTES);
          $exp1 = htmlspecialchars($row['exp1'],ENT_QUOTES);
          $exp2 = htmlspecialchars($row['exp2'],ENT_QUOTES);
        }

        ?>
      </div>

    <div style="position: relative; top: 0;">
      <?php

      require "qwer.php"
      ?>
    </div>
  </body>
  </html>