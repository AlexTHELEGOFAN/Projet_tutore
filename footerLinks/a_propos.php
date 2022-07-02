<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
   <link rel="stylesheet" href="../testScript/lightslider.css">
    <script type="text/javascript" src="../testScript/jquery.js"></script>
    <script type="text/javascript" src="../testScript/lightslider.js"></script>
    <script type="text/javascript" src="../testScript/script.js"></script>
    <link rel="stylesheet" href="../testScript/style.css" />
   <?php 
         session_start();
         include ("../Inclusion/connexion_bd.php");
        // include ("../Inclusion/menu_haut.php");
        $_SESSION['Tabchecker']=array();
         @$_SESSION['nb_enigme_resolu']=0;
        @ $_SESSION['taille']=null;
         @$_SESSION['checker']=null;
        ?>
      <meta charset="utf-8">
      <title>Enigmaker ~ A propos</title>
      <link rel="stylesheet" href="../Style/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../Style/fontawesome-free-5.15.3-web/css/all.css"/>   
       <!-- href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  -->
   </head>
   <body>
      <div class="conteneur">

     <!-- ******************************************************** -->

     <?php 
    include ("../Inclusion/menu_haut.php");
   
    ?>

    <!-- ************************************************************* -->

        <div style="margin:6%;font-size:160%;color:white">
            <b style="font-size:240%;letter-spacing:5px;">A Propos d'Enigmaker</b>
             
            <p>
            Enigmaker, c’est un site de jeu d’énigmes qui
            permet aux utilisateurs de créer et résoudre des énigmes en ligne dans un but de
            divertissement.
            </p>

            <p>
            Que vous soyez grand ou petit, joueur ou créatif : Ce site est fait pour vous.
            </p>

            <p>
            Créez et jouez aux énigmes créées par la communauté. 

            </p>

            <p style="margin:6%;font-size:60%;">
                → Site Crée Par La Team ENIGMAKER Dans le cadre d'un projet universitaire
            </p>

        </div>

        <!-- ***************************************** -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

 
        <?php 
    include ("../Inclusion/footer.php");
    ?>

        <!-- ***************************************-->
    </div>
   



   </body>
</html>

