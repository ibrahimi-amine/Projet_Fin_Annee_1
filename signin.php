<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <title>Connexion</title>
  </head>
  <body>
    <section class="container-fluid bg">
      <section class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-3">
          <form method="post" action="signin.php" class="form-container">
            <?php include('errorlogin.php'); ?>
             <div class="form-group">
               <label for="InputEmail">Email address :</label>
                <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
               <label for="InputPassword">Password :</label>
               <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Password">
              </div>
              <div class="row justify-content-between">
                <div class="col-5">
                  <button type="submit" class="btn btn-danger" name="cancelbtn">Cancel</button>
                </div>
                <div class="col-5">
                  <button type="submit" class="btn btn-primary" name="connectbtn">Connect</button>
                </div>
              </div>
            </form>
           </div>
        </section>
      </section>
    </body>
</html>
