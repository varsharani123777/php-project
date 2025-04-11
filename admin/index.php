<?php
 require('inc/db_config.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php require('inc/link.php')?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">

 <div class="login-form text-center rounded bg-white shadow  overflow-none">
    <form method="POST">
        <h4 class="bg-dark text-white py-3 shadow overflow-hidden">ADMIN LOGIN PANEL </h4>
        <div class="p-4">
          <div class="mb-3">
             <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin name">
          </div>
          <div class="mb-4">
              <input name="admin_password" required type="Password" class="form-control shadow-none text-center" placeholder="Admin password">
          </div>
          <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
        </div>
    </form>
 </div>


<?php require('inc/script.php')?>
</body>
</html>