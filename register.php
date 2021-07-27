<?php
    include("dbconnect.php");
    if ((isset($_POST['username'])) && (isset($_POST['password']))) {
        $sql = "select * from users where name='" . $_POST['username']."'";
        //echo '<p>'.$sql.'</p>';
        $result = $dbh->query($sql);
        $rows = $result->fetch(PDO::FETCH_ASSOC);
        if (!empty($rows)){
            echo '<p class="promptinfo">User name exist already!</p>';
        }
        else {

            // Username and password don't exist, save them into the database
            $sql = "insert into users (name, password) values('" . $_POST['username'] . "','" . $_POST['password'] . "')";
            //echo '<p>' . $sql . '</p>';
            $result = $dbh->query($sql);
            if ($result) {
                echo '<p class="promptinfo">Register sucessfully!</p>';
            }
            else {
                    echo '<p class="promptinfo">Invalid username or password!</p>';
            }
        }
    }

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
   <?php include("inc_header2.php"); ?>
   <p class="promptinfo">Please input your username and password:</p>
   <form class="rform" method="post" action="register.php">
       <label>Username: </label>
       <input type="text" name="username" id="user"><br><br>
	   <label>Password: </label>
       <input type="password" name="password" id="pword"><br><br>
       <input name="register" type="submit" value="register"><br><br>
   </form>
   <?php include("inc_footer2.php"); ?>
</body>
</html>
