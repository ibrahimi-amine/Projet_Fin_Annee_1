<?php include('check.php');
  if($_SESSION['fonction']!="admin")
    {header('Location: dashboard.php');exit();}
?>
<?php include('serveradmin.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/mystyle2.css">

    <title>Hello, world!</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-expand-xl navbar-expand navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Projet<?php echo $_SESSION['projet'];?></a>
      <div class="navbar-nav ml-auto ">
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >
            <img src="img/<?php echo $_SESSION['image'];?>" class="rounded-circle" style="width:40px;"> <?php echo $_SESSION['fonction'];?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="dashboard.php"><img src="img/homeicon.png" style="width:40px;"> Home</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><img src="img/settingicon.png" class="rounded-circle" style="width:40px;"> setting</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php"><img src="img/logouticon.png"  style="width:40px;"> Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
     <div class="row">
       <div class="col-sm-3 col-md-6 col-lg-4 col-xl-2">
        <img src="img/<?php echo $_SESSION['image'];?>" class="rounded-circle center_img" style="width:180px;">
        <h3 class="Nompersonne text-primary"><?php echo $_SESSION['Nom'];?></h3>
        <div class="Nompersonne">Option</div>
        <ul class="list-group list-group-flush">
          <a  class="list-group-item list-group-item-action" href="addadmin.php"><img src="img/addpersicon.png" style="width:40px;"> Ajouter Administrateur</a>
          <a  class="list-group-item list-group-item-action" href="#"><img src="img/rmpersicon.png" style="width:40px;"> Supprimer Personne</a>
          <a  class="list-group-item list-group-item-action" href="addrub.php">Ajouter Rubrique</a>
          <a  class="list-group-item list-group-item-action">Afficher</a>
        </ul>
       </div>
    <div class="col-sm-9 col-md-6 col-lg-8 col-xl-10">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="#">addadmin</a></li>
      </ol>
    </nav>
     <h3 class="Nompersonne">Ajouter Administrateur :</h3>
     <div class="col-12 col-sm-4 col-md-3 center_block">
        <form method="post" action="addadmin.php" class="form-container2">
          <div class="form-group">
            <img src="img/addpers.png" class="rounded-circle center_img" style="width:100px; ">
          </div>
          <?php include('errorlogin.php'); ?>
          <div class="form-group">
            <label for="InputEmail">Email address :</label>
            <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
             <label for="InputPassword">Password :</label>
             <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Password">
          </div>
          <div class="form-group">
             <label for="InputPassword2">Repeat Password :</label>
             <input type="password" class="form-control" id="InputPassword2" name="InputPassword2" placeholder="Repeat Password">
          </div>
        <div class="form-group">
              <button type="submit" class="btn btn-primary center_block" name="creatbtn">Ajouter Admin</button>
          </div>
        </form>
      </div>
    </div>



    </div>
 </div>
  </body>
</html>
