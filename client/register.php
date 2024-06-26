<?php
  require_once "../assets/template.php";
  require_once "../db/pdo.php";
  $error = "";
$errorEmail = "";

$username = "";
$password = "";
$email = "";

function isUniqueUsername($username) {
    global $pdo;
    $sql = "SELECT 1 FROM users WHERE username = :un LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':un' => $username]);
    return $stmt->fetch() === false;
}

function isUniqueEmail($email) {
    global $pdo;
    $sql = "SELECT 1 FROM users WHERE email = :em LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':em' => $email]);
    return $stmt->fetch() === false;
}

if (isset($_POST["BtnRegistration"])) {
    $username = validate_input($_POST["uname"]);
    $email = validate_input($_POST["email"]);

    $flag = true;
    if (!isUniqueUsername($username)) {
        $error = "Username already taken";
        $flag = false;
    }
    if (!isUniqueEmail($email)) {
        $errorEmail = "Email already taken";
        $flag = false;
    }

    if ($flag) {
        $password = validate_input($_POST["pwd"]);
        $sql = "INSERT INTO users (username, email, password) VALUES (:uname, :em, :pwd)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':uname' => $username,
            ':em' => $email,
            ':pwd' => hash("md5",$password)
        ]);
        
        header("location: login.php");
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration-BloodBends</title>
  <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

:root {
  --background: #000;
  --color: #ffffff;
  --primary-color: #58111A;
}

* {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  box-sizing: border-box;
 font-family: 'Creepster', cursive;
  background: var(--background);
  color: var(--color);
  letter-spacing: 1px;
  transition: background 0.2s ease;
  -webkit-transition: background 0.2s ease;
  -moz-transition: background 0.2s ease;
  -ms-transition: background 0.2s ease;
  -o-transition: background 0.2s ease;
}

a {
  text-decoration: none;
  color: var(--color);
}

h1 {
  font-size: 2.5rem;
}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  position: relative;
  width: 22.2rem;
}
.form-container {
  border: 1px solid hsla(0, 0%, 65%, 0.158);
  box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  backdrop-filter: blur(20px);
  z-index: 99;
  padding: 2rem;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
}

.login-container form input {
  display: block;
  padding: 14.5px;
  width: 100%;
  margin: 2rem 0;
  color: var(--color);
  outline: none;
  background-color: #9191911f;
  border: none;
  border-radius: 5px;
  font-weight: 500;
  letter-spacing: 0.8px;
  font-size: 15px;
  backdrop-filter: blur(15px);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.login-container form input:focus {
  box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.2);
  animation: wobble 0.3s ease-in;
  -webkit-animation: wobble 0.3s ease-in;
}

.login-container form button {
  background-color: var(--primary-color);
  color: var(--color);
  display: block;
  padding: 13px;
  border-radius: 5px;
  outline: none;
  font-size: 18px;
  letter-spacing: 1.5px;
  font-weight: bold;
  width: 100%;
  cursor: pointer;
  margin-bottom: 2rem;
  transition: all 0.1s ease-in-out;
  border: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
}

.login-container form button:hover {
  box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.15);
  transform: scale(1.02);
  -webkit-transform: scale(1.02);
  -moz-transform: scale(1.02);
  -ms-transform: scale(1.02);
  -o-transform: scale(1.02);
}

.circle {
  width: 8rem;
  height: 8rem;
  background: var(--primary-color);
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  position: absolute;
}

.illustration {
  position: absolute;
  top: -19%;
  right: -2px;
  width: 90%;
}

.circle-one {
  top: 0;
  left: 0;
  z-index: -1;
  transform: translate(-45%, -45%);
  -webkit-transform: translate(-45%, -45%);
  -moz-transform: translate(-45%, -45%);
  -ms-transform: translate(-45%, -45%);
  -o-transform: translate(-45%, -45%);
}

.circle-two {
  bottom: 0;
  right: 0;
  z-index: -1;
  transform: translate(45%, 45%);
  -webkit-transform: translate(45%, 45%);
  -moz-transform: translate(45%, 45%);
  -ms-transform: translate(45%, 45%);
  -o-transform: translate(45%, 45%);
}

.register-forget {
  margin: 1rem 0;
  display: flex;
  justify-content: space-between;
}
.opacity {
  opacity: 0.6;
}

.theme-btn-container {
  position: absolute;
  left: 0;
  bottom: 2rem;
}

.theme-btn {
  cursor: pointer;
  transition: all 0.3s ease-in;
}

.theme-btn:hover {
  width: 40px !important;
}

@keyframes wobble {
  0% {
    transform: scale(1.025);
    -webkit-transform: scale(1.025);
    -moz-transform: scale(1.025);
    -ms-transform: scale(1.025);
    -o-transform: scale(1.025);
  }
  25% {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
  }
  75% {
    transform: scale(1.025);
    -webkit-transform: scale(1.025);
    -moz-transform: scale(1.025);
    -ms-transform: scale(1.025);
    -o-transform: scale(1.025);
  }
  100% {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
  }
}
</style>
  <title>Registration</title>
  <link rel="stylesheet" href="./assets/css/style2.css">
  <script>
      function validateInput() 
      {
        var password = document.getElementById("pwd").value;
        var errorSpan = document.getElementById("errorPwd");
        var errorMessage = validPassword(password);
        errorSpan.innerText = errorMessage;
        }

    function validPassword(pass) {
    if(pass.length < 8 || !/\d/.test(pass) || !/[A-Z]/.test(pass) || !/[a-z]/.test(pass)) {
        return "Password must be at least 8 characters in length and must contain at least one number, one uppercase letter, and one lowercase letter";
    } else {
        return "";
    }
}
  </script>
</head>
<body>

<body>
  <section class="container wrapper">
    <div class="login-container">
      <div class="circle circle-one"></div>
      <div class="form-container">
        <img src="http://codingstella.com/wp-content/uploads/2024/01/download-8.png" alt="illustration" class="illustration" />
        <h1 class="opacity">REGISTER</h1>
        <form method="POST">
          <input type="text" placeholder="USERNAME" name="uname" id="uname"  value='<?php echo htmlspecialchars($username); ?>'/>
          <span class="text-danger"><?php echo $error; ?></span>
          <input type="email" placeholder="EMAIL" name="email" id="email" value='<?php echo htmlspecialchars($email);?>'/>
          <span class="text-danger"><?php echo $errorEmail; ?></span>
          <input type="password" placeholder="PASSWORD" name="pwd" id="pwd" value='<?php echo htmlspecialchars($password);?>'/>
          <span class="text-danger" id="errorPwd"  oninput="validateInput()"></span>
          <button class="opacity" type="submit" name="BtnRegistration">REGISTER</button>
        </form>
        <div class="register-forget opacity">
          <a href="../client/login.php">Already have an account</a>
        
        </div>
      </div>
      <div class="circle circle-two"></div>
    </div>
    <div class="theme-btn-container"></div>
  </section>
</body>


</body>
</html>