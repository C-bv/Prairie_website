<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Secure admin Login</title>
      <link rel="icon" href="img/logo.ico" />
      <link rel="stylesheet" href="style_admin.css">
   </head>
   <body>
      <div id="screen">
         <div class="header">
            <div class="navigation-bar">
               <ul class="login_li">
                  <li><a href="index.html"><img src="img/logo.png" alt="Home" /></a></li>
                  <li><a class="normal" href="index.html">Back to public website</a></li>
               </ul>
         </div>
		</div>
         <div class="main-content">
            <div class="container">
               <div class="section_name">
                  <h2>Login</h2>
               </div>
               <br>
               <form action="check_login.php" method="post" autocomplete="off">
                     <label for="username">Username</label>
                     <input type="text" name="username" class="form-control" required><br>
                     <label for="password">Password</label>
                     <input type="password" name="password" class="form-control" required><br>
                     <input type="submit" name="login" class="btn btn-class" value="Login">
               </form>
            </div>
         </div>
      </div>
   </body>