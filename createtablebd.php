<?php
include('connectbdd.php');
$reponse=$bd->query('CREATE TABLE Credit(N_pe varchar(11) not null ,code_rubrique varchar(10) not null ,credit_ouvert decimal(10,3)	 not null ,credit_disponible decimal(10,3)	 not null, primary key(N_pe,code_rubrique) , foreign key(N_pe) references Programme_emploi(N_pe) ,foreign key(code_rubrique) references Rubrique(code))');
?>
