<?php include('check.php');
  if($_SESSION['fonction']!="directeur" && $_SESSION['fonction']!="responsable")
    {header('Location: dashboard.php');exit();}
?>
<?php include('serverdirecteur.php');?>
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
          <button class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#personne">Chercheur<img src="img/icondown.png" style="width:20px;"></button>
          <a id="personne" class="list-group-item list-group-item-action collapse" href="addpers.php" ><img src="img/addpersicon.png" style="width:30px;">Ajouter Chercheur</a>
          <a id="personne" class="list-group-item list-group-item-action collapse" href="rmpers.php"><img src="img/rmpersicon.png" style="width:30px;">Supprimer Chercheur</a>
          <a id="personne" class="list-group-item list-group-item-action  collapse " href="affpers.php">Afficher Chercheur</a>
          <button class="list-group-item list-group-item-action " data-toggle="collapse" data-target="#equipe">Equipe<img src="img/icondown.png" style="width:20px;"></button>
          <a id="equipe" class="list-group-item list-group-item-action collapse" href="addteam.php" ><img src="img/addteam.png" style="width:40px;"> Ajouter Equipe</a>
          <a id="equipe" class="list-group-item list-group-item-action collapse" href="rmteam.php"><img src="img/rmpersicon.png" style="width:40px;"> Supprimer Equipe</a>
          <a id="equipe" class="list-group-item list-group-item-action collapse" href="modifyteam.php">Modifier Equipe</a>
          <a id="equipe" class="list-group-item list-group-item-action collapse" href="affteam.php">Afficher Equipe</a>
          <button class="list-group-item list-group-item-action " data-toggle="collapse" data-target="#projet">Projet<img src="img/icondown.png" style="width:20px;"></button>
          <a id="projet" class="list-group-item list-group-item-action collapse" href="addproject.php"><img src="img/addpersicon.png" style="width:40px;">Ajouter Projet</a>
          <a id="projet" class="list-group-item list-group-item-action collapse" href="rmproject.php"><img src="img/rmpersicon.png" style="width:40px;">Supprimer Projet</a>
          <a id="projet" class="list-group-item list-group-item-action collapse" href="modifyproject.php">Modifier Projet</a>
          <a id="projet" class="list-group-item list-group-item-action collapse" href="affproject.php">Afficher Projet</a>
          <button class="list-group-item list-group-item-action " data-toggle="collapse" data-target="#budget">Budget<img src="img/icondown.png" style="width:20px;"></button>
          <a id="budget" class="list-group-item list-group-item-action collapse" href="addbudgetproj.php">Ajouter Budget Projet</a>
          <a id="budget" class="list-group-item list-group-item-action collapse" href="addbudgetfonct.php">Ajouter Budget Fonctionelle</a>
          <a id="budget" class="list-group-item list-group-item-action collapse" href="modifybudget.php">Modifier Budget</a>
          <a id="budget" class="list-group-item list-group-item-action collapse" href="affbudget.php">Afficher Budget</a>
          <button class="list-group-item list-group-item-action " data-toggle="collapse" data-target="#gestion">Gestion<img src="img/icondown.png" style="width:20px;"></button>
          <a id="gestion" class="list-group-item list-group-item-action collapse" href="addpe.php">Ajouter Programme emploi</a>
          <a id="gestion" class="list-group-item list-group-item-action collapse" href="affpe.php">Afficher Programme emploi</a>
          <a id="gestion" class="list-group-item list-group-item-action collapse" href="adddep.php">Ajouter Depence</a>
          <a id="gestion" class="list-group-item list-group-item-action collapse" href="affdep.php">Afficher Depence</a>
          <a id="" class="list-group-item list-group-item-action" href="affprojinfo.php">Afficher Information Projet</a>



        </ul>

      </div>
  <div class="col-sm-9 col-md-8 col-lg-9 col-xl-10">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Budget</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="#">ajoute_programme_emploi</a></li>
      </ol>
    </nav>
    <?php if($_SESSION['addcredit']=="YES")
     {$_SESSION['addcredit']=="NO"
       ?><div class="alert alert-primary" role="alert">Credit Ajouter <a href="#" class="alert-link">link</a></div>
     <?php }?>
    <?php if($_SESSION['addpe']=="YES")
     {
       ?><div class="alert alert-primary" role="alert">Programme d'emploi Ajouter <a href="#" class="alert-link">link</a></div>
     <?php }?>
     <?php if(!isset($_POST["addpebtn"]) || $_SESSION['addpe']=="NO")
     {?>
     <h3 class="Nompersonne">Ajouter Programme d'emploi :</h3>
     <div class="col-12 col-sm-8 col-md-5 center_block">
        <form method="post" action="addpe.php" class="form-container2">
          <div class="form-group">
            <img src="img/addpers.png" class="rounded-circle center_img" style="width:100px; ">
          </div>
          <?php include('errorlogin.php'); ?>
          <div class="form-group">
             <label for="InputNpe">Nm Programme d'emploi:</label>
             <input type="text" class="form-control" id="InputNpe" name="InputNpe"  placeholder="Enter Id budget">
          </div>
          <div class="form-group ">
             <label for="InputDateaffpe">Entrer Date affectation :</label>
             <input type="date" class="form-control" id="InputDateaffpe" name="InputDateaffpe">
         </div>
          <div class="form-group">
             <label for="InputBudgpe">Budget :</label>
             <input type="text" class="form-control" id="InputBudgpe" name="InputBudgpe"  placeholder="Enter Budget">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <label for="InputIdbudgetproj">Id Budget Projet :</label>
                <input type="text" class="form-control" id="InputIdbudgetproj" name="InputIdbudgetproj" placeholder="Id Budget Projet" >
              </div>
              <div class="col-6">
                <label for="InputIdbudgetfonct">Id Budget fonctionnelle :</label>
                <input type="text" class="form-control" id="InputIdbudgetfonct" name="InputIdbudgetfonct" placeholder="Id Budget Fonctionnelle" >
              </div>
            </div>
          </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary center_block" name="addpebtn">Ajouter Programme</button>
            </div>
          </form>
         </div>
     <?php }else if(isset($_POST["addpebtn"]) &&  $_SESSION['addpe']=="YES"){?>
       <h3 class="Nompersonne">Ajouter Credit :</h3>
       <div class="alert alert-primary" role="alert">Entrer Credit pour chaque Rubrique :</div>
          <form method="post" action="addpe.php" >
            <?php include('errorlogin.php'); ?>
            <?php
             include('connectbdd.php');
             $reponse=$bd->query('SELECT * FROM Rubrique');
             while(!empty($donnee=$reponse->fetch()))
                  {
            ?>
            <div class="form-group">
               <label for="<?php echo $donnee['code'];?>"><?php echo $donnee['Designation']; ?> :</label>
               <input type="text" class="form-control" id="<?php echo $donnee['code'];?>" name="<?php echo $donnee['code'];?>"  placeholder="Enter Credit">
            </div>
            <?php
              }$reponse->closeCursor(); ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary center_block" name="addcreditbtn">Ajouter Credit</button>
              </div>
            </form>
      <?php }?>



    </div>



    </div>
 </div>
  </body>
</html>
