<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>
<body>
    <?php
     $db=mysqli_connect("localhost","root","");
     $er=mysqli_select_db($db,"webproject");
     
     if (isset($_POST['submit-search'])) {
      $search = mysqli_real_escape_string($db,$_POST['search']);
      $sql1 = "SELECT * FROM cvdb WHERE major LIKE '%$search%' OR skill LIKE '%$search%'";
      $results1 = mysqli_query($db,$sql1);
      $queryResult = mysqli_num_rows($results1);
      
      if ($queryResult >0) {
        while ($row = mysqli_fetch_assoc($results1)) {
           echo "<a href='article.php?Major=".$row['major']."&FullName=".$row['full_name']."'></a>"
           ."<div class='card' style='background-color: #1f222e;''>
      <div class='card-img-top'>

      <h3>".$row['full_name']."</h3>"
      ."
      </div>
      <div class='card-body'>
      <p class='card-text' >".$row['major'].", Graduated from ".$row['school_name']."</p>
      </div>
        <ul class='list-group list-group-flush'>
      <li class='list-group-item'>".$row['exp']." ".$row['des']."<br> ".$row['exp1']." ".$row['des1']."<br> ".$row['exp1']." ".$row['des2']."</li>
      <li class='list-group-item'>".$row['city'].", Phone number: ".$row['phone']."</li>
      <li class='list-group-item'>".$row['skill']." ".$row['Rating']."<br>".$row['skill1']." ".$row['Rating1']."<br> ".$row['skill2']." ".$row['Rating2']."</li>
      </ul>
      <div class='card-body'>
      <a href='mailto:".$row['email']."' class='btn btn-primary card-link'>Contact through Email</a>
      </div>
      </div>";
     

        }


      }else{
        echo "<h2>There are no results matching your search! Please write it properly</h2>";
      }
     }
    ?>

  </div>
</body>
</html>