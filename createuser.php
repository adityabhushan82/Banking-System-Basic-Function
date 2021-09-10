<?php
include 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body>
<?php
    include 'config.php'; //to connect the file with database
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";   
    $result=mysqli_query($conn,$sql);
    if($result){  
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';  
                     </script>";
                    
    }
  }
?>
<head>
  <style type="text/css">
    * {
  box-sizing: border-box;
}
body {
  height: 100%;
    background-color: #222120;
    background-image: url(https://cdn.wp.nginx.com/wp-content/themes/nginx-theme/assets/img/tiles/datalines-black.png);

}
h1{
  font-size:1em;
  text-align:center;
  color:#eee;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.9);
  padding: 20px;
}
.nav-container {
  width: 300px;
  box-shadow: 1px 3px 3px 3px black;
  transition: all 0.5s linear;
}
.nav {
  list-style-type: none;
  margin:0;
  padding:0;
}
li{
  height: 50px;
  position:relative;
  background:linear-gradient(#292929, #242424);
}
a {
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid black;
  text-decoration: none;
  display:block;
  height:100%;
  width:100%;
  line-height:50px;
  color:#bbb;
  text-transform: uppercase;
  font-weight: bold;
  padding-left:25%;
  border-left: 5px solid transparent;
  letter-spacing: 1px;
  transition:all 0.3s linear;
}
.text {
  transition: all .4s linear;
}
li:hover .text{
 margin-left:20px
}
.active a {
  color: #9b59b6;
  border-left:5px solid #9b59b6;
  background-color: #1B1B1B;
  outline:0;
}
li:not(.active):hover a{
  color: #eee;
  border-left:5px solid #FCFCFC;
  background-color: #1B1B1B;
}

span[class ^= "icon"]{
  position:absolute;
  left:20px;
  font-size:1.5em;
  transition: all 0.3s linear;
}

@media only screen and (max-width : 860px){
  .text{
    display:none;
  }
  .nav-container, a {
    width: 70px;
  }
  a:hover{
    width: 200px;
    z-index:1;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid black;
    box-shadow: 0 0 1px 1px black;
  }
  a:hover .text {
    display:block;
    padding-left: 30%;    
  }
  
}
@media only screen and (max-width: 480px){
  .nav-container, a{ width:50px; }
  span[class ^= "icon"]{left:8px;}
}
  </style>
</head>



  <h2 class="text-center pt-4">Create a User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>