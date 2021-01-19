<?php include('server_sup.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style_sup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="sidenav">
             <div class="login-main-text">
               <img src="fast.png" alt="" class ="fast">
                <h2>Supervisor Portal</h2>
                <p>National University of Computers and Emerging Science</p>
             </div>
          </div>
          <div id="error"></div>
          <div class="main">
             <div class="col-md-6 col-sm-12">
                <div class="login-form">
                   <form id="form" action="server.php" method="post">
                      <div class="form-group-reg">
                         <label>Username:</label>
                         <input type="text" class="form-control" placeholder="Username" required>
                      </div>
                      <div class="form-group-reg">
                         <label>Email:</label>
                         <input type="text" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group-reg">
                         <label>Course Instructor:</label>
                         <input type="text" class="form-control" placeholder="Basic Electronics">
                      </div>
                      <div class="form-group-reg">
                         <label>Campus:</label>
                         <select id="campus" class="form-control">
                           <option value="Faisalabad"> Faisalabad</option>
                           <option value="Lahore"> Lahore</option>
                           <option value="Peshawar"> Peshawar</option>
                           <option value="Islamabad"> Islamabad</option>
                           <option value="Karachi"> Karachi</option>
                         </select>
                      </div>
                      <div class="form-group-reg">
                         <label>Password:</label>
                         <input type="password" class="form-control" placeholder="Password" required>
                      </div>
                      <button type="submit" name="Register" class="btn btn-dark xd">Register</button>
                      <button type="submit" class="btn btn-white xd">Already a user? Login</button>
                   </form>
                </div>
             </div>
          </div>


  </body>
</html>
