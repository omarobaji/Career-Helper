<?xml version = ″1.0″?>
<!DOCTYPE html PUBLIC ″-//w3c//DTD XHTML 1.1//EN″ “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns = ″http://www.w3.org/1999/xhtml″>
	<head>
        <title>Profile Page</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
	<body>
    <style type="text/css">
       body{
            margin:0;
            padding:0; 
            font-family: 'Montserrat';
            background-color: #dcdcdc;
            }
            .center{
             text-align: center;
             padding-top: 10px;
            }
            .pagename{
            display: inline-block;
            text-align: center;
            border: 2px solid black;
            background-color: #111E6C;
            color: white;
            width: 250px;
            border-radius: 4px;
        }
     .profile{
         width: 2in;
         height:2in;
     }
    .relative{
        position: relative;
        padding: 10px;
    }
     .absolute1{
         position: absolute;
         color: white;
         border-radius: 7px;
         width: 2in;
        left:130px;
         padding:10px;
         height:60px;
         font-size: 1.7rem;
         top: 100px;
     }
     .absolute2{
         position: absolute;
         background-color: transparent;
          color: #007bff;
          border-radius: 7px;
          width: 250px;
          left:400;
          padding:10px;
          height:60px;
          font-size: 1.7rem;
          top: 100px;
     }
     .absolute3{
      font-size: 1.7rem;
        position: absolute;
         color: white;
         border-radius: 7px;
         width:230px;
        left:130px;
         padding:10px;
         top:150px;
         height:60px;
     }
     .absolute4{
        position: absolute;         
         color: #007bff;
          font-size: 1.7rem;
          border-radius: 7px;
          width: 250px;
          left:400;
          padding:10px;
          top:150px;
          height:60px;
     }
     .absolute5{
        position: absolute;
         color: white;
         font-size: 1.7rem;
         border-radius: 7px;
         width: 210px;
         left:130px;
         padding:10px;
         height:60px;
         top:210px;
     }
     .absolute6{
         position: absolute;
         color: #007bff;
          font-size: 1.7rem;
          border-radius: 7px;
          width: 250px;
          height:60px;
          left:400;
          padding:10px;
          top:210px;
     }
     .container{
      top: 20px;
      position: relative;
      background-color:#1f222e; 
      left: 310px;
      height: 400px;
      width: 750px;
      border-radius: 30px;
  box-shadow: 3px 1px 29px 7px rgba(0,123,255,1);     }
     .abs{
      text-align: center;
      position: absolute;
      color: white;
      border: 2px solid black;
      border-radius: 7px;
      width: 300px;
      padding: 10px;
      top: 86px;
      background-color: #007bff;
     }
     .aa{
         color: white;
         text-decoration: none;

     }
    </style>
        <?php include 'NavBar.php';?>
      <div class="center">
        <div class="pagename">
       Your Profile
        </div>
      </div>
    <div class="center">
         <div>
             <img src="man.jpeg" alt="man" class="profile">
         </div>
     </div>
     <?php
	
	  $db = mysqli_connect("localhost", "root", "");
	 if (!$db) {
	     print "Error - Could not connect to MySQL";
	     exit;
     }
     $er = mysqli_select_db($db,"webproject");
	 if (!$er) {
	    print "Error - Could not select this database";
	    exit;
	}

     
     if(isset($_POST['EmailSignIn'])) {
         $email=$_POST['EmailSignIn'];
         $query=("SELECT * FROM usersignup");
         $result=mysqli_query($db,$query);
         $num_rows=mysqli_num_rows($result);
        
         for($row_num = 1; $row_num <= $num_rows;  $row_num++){
           
            $row = mysqli_fetch_array($result);
             if(htmlspecialchars($row["Email"]) == $email){
               $Email =  htmlspecialchars($row["Email"]);
               $FullName = htmlspecialchars($row["FullName"]);
               $Choices = htmlspecialchars($row["Choices"]);
               $Password = htmlspecialchars($row["Password"]);
           }


         }
     }else {

        $Email=" ";
        $FullName=" ";
        $Choices=" ";
        $password=" ";
   }







        
     ?> 
      <div class="container" style="background-color: #1f222e;">
     <div class="relative">  
         <div class="absolute1">
             <p>
              Name:
              </p>
         </div>
          <div class="absolute2">
              <p>
               <?php
              print($FullName);
             ?>
              </p>
         </div>
     </div>     
 <div class="relative">
     <div class="absolute3">
            <p>
             Email Address:
            </p> 
        </div>
     <div class="Absolute4">
            <p>
             <?php
              print($Email)
             ?>
            </p>
        </div>
 </div>

 <div class="relative">
       <div class="absolute5">
           <p>
              Logged in as:
           </p>
       </div>
       <div class="absolute6">
            <p>
               <?php
                 print($Choices);
               ?>
            </p>
       </div>
  </div>

   
</div>
 

<br><br>

<?php
require "qwer.php"

?>

	</body>
</html>
