<?php
require_once "../assets/template.php";
require_once "../db/pdo.php";


if(isset($_POST["btnSubmit"])){


    $username=validate_input($_POST["uname"]);
    $password = validate_input($_POST["pwd"]);


    $sql = "SELECT * FROM admin WHERE username = :un AND password = :pwd";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':un' => $username, ':pwd' => $password));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();

    if ($count == 1) {
        session_start();
        $_SESSION["id"] = $row["a_id"];
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php");
        exit(); 
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="container"> 
    <form method="POST">

        <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input class="form-control"  placeholder="username" name="uname">
    </div>
    <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control"  placeholder="Password" name="pwd">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="btnSubmit">Login</button>
    </div>

</form>
    </div>





</body>
</html>