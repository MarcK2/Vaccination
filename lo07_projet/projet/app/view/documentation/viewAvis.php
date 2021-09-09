
<!-- ----- début viewAvis -->
<?php

require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
      ?>
      <h3><b>Avis general : </b></h3>
      <div class="panel panel-primary" id="2">
        <div class="panel-heading">Le projet :</div>
        <div class="panel-body ">       
        <p> Le projet est d'actualité donc c'est plutôt intéressant,il nous a permis de maîtriser les vaccins .
            Concernant les améliorations ,nous avions d'autres idées d'innovation qui étaient intéressantes mais n'ayant pas pu être faites à 
            cause de la contrainte des 3 améliorations.</p>
        <ul>
            <li>Supprimer les rendez vous : Permettre d'annuler le dernier rendez-vous pris par un patient en cas d'indisponibilité </li>
            <li>Supprimer les vaccins, ou des centres : Il y avait la contrainte des clés étrangère qui nous obligerait à supprimer les rendez-vous déjà passés</li>
            <li>On aurait bien aimé choisir le code couleur nous même. Mais il était imposé</li>
            <li>Le fait de mettre le titre n'est pas très interessant mais il aidait à se repérer</li>
            <li>Pas une amélioration mais plutôt une remarque : nous avons mis C&K pour Charon et Kadangha par manque de place</li>
        </ul>
        <p>Le projet nous permis de réaliser l'utilité de la notion de MVC ; surtout pour un travail collaboratif . Et globalement
        c'était très ordonné et beaucoup plus rapide que ce à quoi l'on pouvait s'attendre.</p>
        <p>Niveau évolution du site , si on avait plus de temps , il aurait été intéressant de faire un menu responsive pour la page.</p>
        </div>
    </div>
    
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

  <!-- ----- fin viewAvis -->
  
  
  