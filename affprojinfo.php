<?php include('check.php');?>
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
          <a id="gestion" class="list-group-item list-group-item-action collapse" href="adddep.php">Ajouter Depense</a>
          <a id="gestion" class="list-group-item list-group-item-action collapse" href="affdep.php">Afficher Depense</a>
          <a id="" class="list-group-item list-group-item-action collapse" href="affprojinfo.php">Afficher Information Projet</a>



        </ul>

      </div>
  <div class="col-sm-9 col-md-6 col-lg-8 col-xl-10">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="#">afficher_information_projet</a></li>
      </ol>
    </nav>
     <h3 class="Nompersonne">Afficher Information  Project :</h3>
     <?php if(!isset($_POST["affprojinfobtn"]))
     {
     ?>
     <div class="alert alert-primary" role="alert">Entrer information du Projet :</div>
      <form method="post" action="affprojinfo.php">
        <?php include('errorlogin.php'); ?>
        <div class="form-group">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-5">
              <label for="InputNomproject">Titre Project :</label>
              <input type="text"  id="InputNomproject" name="InputNomproject"  placeholder="Titre projet">
            </div>
            <div class="col-5">
               <button type="submit" class="btn btn-primary" name="affprojinfobtn">Chercher Project</button>
           </div>
        </div>
      </form>
      <?php
      }else
      {include('affinfoproj.php');if(empty($error)){
      ?>
      <div class="alert alert-primary" role="alert">Information Projet :</div>
      <div class="row">
        <div class="col-5"><div class="text text-primary">Nom Projet : </div><?php echo $_SESSION["donneproj"]["nom_projet"]; ?></div>
        <div class="col-2"></div>
        <div class="col-5"><div class="text text-primary">Budget Projet :</div> <?php echo $_SESSION["donneproj"]["budget"]; ?></div>
      </div>
      <div class="row">
        <div class="col-5"><div class="text text-primary">Date Debut  Projet  : </div><?php echo $_SESSION["donneproj"]["date_debutprojet"]; ?></div>
        <div class="col-2"></div>
        <div class="col-5"><div class="text text-primary">Date fin Projet : </div><?php echo $_SESSION["donneproj"]["date_finprojet"]; ?></div>
      </div>
      <div class="alert alert-primary" role="alert">Chercheurs Responsable De Projet :</div>
      <?php
       include('connectbdd.php');
       $reponse=$bd->prepare('SELECT * FROM Chercheur where id_projetchercheur=? and fonction_chercheur=?');
       $reponse->execute(array($_SESSION["donneproj"]["id_projet"],"responsable"));
       $donnee=$reponse->fetch();?>
       <div class="row">
         <div class="col-3 text text-primary">Responsable Projet : </div>
         <div class="col-3"><img src="img/<?php echo $donnee['profile_chercheur']; ?>" style="width:40px;"></div>
         <div class="col-3"><?php echo $donnee['nom_chercheur']; ?></div>
         <div class="col-3"><?php echo $donnee['email_chercheur']; ?></div>
       </div>
       <div class="row">
         <div class="col-3 text text-primary">Chercheur : </div>
       </div>
       <table class="table">
         <thead>
           <tr><th>Nom</th><th>image</th><th>Email</th></tr>
         </thead>
         <tbody>
           <?php
            include('connectbdd.php');
            $reponse2=$bd->prepare('SELECT * FROM Chercheur where id_projetchercheur=? and fonction_chercheur!=?');
            $reponse2->execute(array($_SESSION["donneproj"]["id_projet"],"responsable"));
            while(!empty($donnee2=$reponse2->fetch()))
                 {
           ?>
           <tr class="info">
             <td><?php echo $donnee2['nom_chercheur']; ?></td>
             <td><img src="img/<?php echo $donnee2['profile_chercheur']; ?>" style="width:40px;"></td>
             <td><?php echo $donnee2['email_chercheur']; ?></td>
          </tr>
           <?php
                }$reponse2->closeCursor(); ?>
         </tbody>
       </table>
       <div class="alert alert-primary" role="alert">Chercheurs Participant au Projet :</div>
       <table class="table">
          <thead>
            <tr><th>Nom</th><th>image</th><th>Email</th><th>role</th></tr>
          </thead>
          <tbody>
            <?php
             include('connectbdd.php');
             $reponse2=$bd->prepare('SELECT * FROM ProjetPartcCherch where id_projet=? ');
             $reponse2->execute(array($_SESSION["donneproj"]["id_projet"]));
             while(!empty($donnee2=$reponse2->fetch()))
                  {
            ?>
            <tr class="info">
              <?php
               include('connectbdd.php');
               $reponse3=$bd->prepare('SELECT * FROM Chercheur where id_chercheur=? ');
               $reponse3->execute(array($donnee2["id_chercheur"]));
               $donnee3=$reponse3->fetch();?>
              <td><?php echo $donnee3['nom_chercheur']; ?></td>
              <td><img src="img/<?php echo $donnee3['profile_chercheur']; ?>" style="width:40px;"></td>
              <td><?php echo $donnee3['email_chercheur']; ?></td>
              <td><?php echo $donnee2['role']; ?></td>
           </tr>
            <?php
                 }$reponse2->closeCursor(); ?>
          </tbody>
        </table>
        <div class="alert alert-primary" role="alert">Budget Fonctionelle du Projet :</div>
        <table class="table">
          <thead>
            <tr><th>Id</th><th>Date affectation</th><th>Date Limite Depense</th><th>Montant</th></tr>
          </thead>
          <tbody>
            <?php
             include('connectbdd.php');
             $reponse2=$bd->prepare('SELECT * FROM Budget_Fonctionnelle where id_projet=?');
             $reponse2->execute(array($_SESSION["donneproj"]["id_projet"]));
             while(!empty($donnee2=$reponse2->fetch()))
                  {
            ?>
            <tr class="info">
              <td><?php echo $donnee2['id_budgetfonct']; ?></td>
              <td><?php echo $donnee2['date_affbudgetfonct']; ?></td>
              <td><?php echo $donnee2['date_limdepense']; ?></td>
              <td><?php echo $donnee2['montant_budgetfonct']; ?></td>
            </tr>
            <?php
              }$reponse2->closeCursor(); ?>
          </tbody>
        </table>

        <?php
         include('connectbdd.php');
         $reponse2=$bd->prepare('SELECT * FROM Budget_Trancheprojet where id_projet=?');
         $reponse2->execute(array($_SESSION["donneproj"]["id_projet"]));
         while(!empty($donnee2=$reponse2->fetch()))
              {
        ?>
        <div class="alert alert-primary" role="alert">Budget  du Projet :</div>
        <div class="row">
          <div class="col-4"><div class="text text-primary">Id : </div><?php echo $donnee2['id_budgetprojet']; ?></div>
          <div class="col-4"><div class="text text-primary">Date affectation :</div><?php echo $donnee2['date_affectationbudget']; ?></div>
          <div class="col-4"><div class="text text-primary">Montant :</div><?php echo $donnee2['montant_totalbudget']; ?></div>
        </div>
        <?php
          include('connectbdd.php');
          $reponse3=$bd->prepare('SELECT * FROM Programme_emploi where id_budgetprojet=?');
          $reponse3->execute(array($donnee2['id_budgetprojet']));
          while(!empty($donnee3=$reponse3->fetch()))
                  {
        ?>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-11">
            <div class="alert alert-primary" role="alert">Programme d'emploi du Projet :</div>
          </div>
        </div>
        <div class="row">
            <div class="col-4"><div class="text text-primary">N : </div><?php echo $donnee3['N_pe']; ?></div>
            <div class="col-4"><div class="text text-primary">Date affectation :</div><?php echo $donnee3['date_pe']; ?></div>
            <div class="col-4"><div class="text text-primary">Budget :</div><?php echo $donnee3['budget_pe']; ?></div>
        </div>

        <div class="row">
          <div class="col-2"></div>
          <div class="col-10">
            <div class="alert alert-primary" role="alert">Credit du rubrique du Projet :</div>
          </div>
        </div>
        <?php
          include('connectbdd.php');
          $reponse4=$bd->prepare('SELECT * FROM Credit where N_pe=?');
          $reponse4->execute(array($donnee3['N_pe']));
          while(!empty($donnee4=$reponse4->fetch()))
                  {
        ?>
        <div class="row">
            <div class="col-4"><div class="text text-primary">Code rubrique : </div><?php echo $donnee4['code_rubrique']; ?></div>
            <div class="col-4"><div class="text text-primary">Credit ouvert :</div><?php echo $donnee4['credit_ouvert']; ?></div>
            <div class="col-4"><div class="text text-primary">Credit Disponible :</div><?php echo $donnee4['credit_disponible']; ?></div>
        </div>
        <?php
            }$reponse4->closeCursor(); ?>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="alert alert-primary" role="alert">Depense du projet :</div>
            </div>
        </div>
            <?php
              include('connectbdd.php');
              $reponse4=$bd->prepare('SELECT * FROM Depencer where N_pe=?');
              $reponse4->execute(array($donnee3['N_pe']));
              while(!empty($donnee4=$reponse4->fetch()))
                      {
            ?>
        <div class="row">
            <?php
              include('connectbdd.php');
              $reponse5=$bd->prepare('SELECT * FROM Depence where N_depense=?');
              $reponse5->execute(array($donnee4['N_depense']));
              $donnee5=$reponse5->fetch();
            ?>
            <div class="col-4"><div class="text text-primary">N Depense : </div><?php echo $donnee5['N_depense']; ?></div>
            <div class="col-4"><div class="text text-primary">Description :</div><?php echo $donnee5['description']; ?></div>
            <div class="col-4"><div class="text text-primary">Montant :</div><?php echo $donnee5['montant']; ?></div>
        </div>
            <?php
                }$reponse4->closeCursor(); ?>
            <?php
          }$reponse3->closeCursor(); ?>

        <?php
            }$reponse2->closeCursor(); ?>



<?php }else{?>
  <form method="post" action="affprojinfo.php">
    <?php include('errorlogin.php'); ?>
    <div class="form-group">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-5">
          <label for="InputNomproject">Titre Project :</label>
          <input type="text"  id="InputNomproject" name="InputNomproject"  placeholder="Titre projet">
        </div>
        <div class="col-5">
           <button type="submit" class="btn btn-primary" name="checkmodifyprojbtn">Chercher Project</button>
       </div>
    </div>
  </form>
<?php }}?>



    </div>
 </div>
  </body>
</html>
