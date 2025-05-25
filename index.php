<!DOCTYPE html>
<html lang="fr">
  <head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SS5WXF69MY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SS5WXF69MY');
</script>
  <?php include('./includes/head-links.php'); ?>

    <!-- Titre et description -->
    <title>
      Allo Taxi Sud Tarascon | Taxi 7j/7 à Tarascon et ses alentours
    </title>
    <meta
      name="description"
      content="Allo Taxi Sud Tarascon vous accompagne 7j/7 dans tous vos déplacements à Tarascon et ses alentours. Taxis, transferts aéroports, gares, tourisme, évènements, transport médical." />
    <meta
      name="keywords"
      content="taxi Tarascon, VTC Tarascon, transfert aéroport, taxi gare, transport médical, taxi tourisme, Allo Taxi Sud Tarascon" />
    <link rel="canonical" href="https://allo-taxi-Tarascon.fr/" />

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta
    property="og:title"
    content="Allo Taxi Sud Tarascon | Taxi 7j/7 à Tarascon et ses alentours" />
    <meta
    property="og:description"
    content="Transport de qualité 24h/24 et 7j/7 sur réservation à Tarascon : Taxis, transferts aéroports, gares, tourisme, évènements, transport médical." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://allo-taxi-Tarascon.fr/" />

    <!-- Twitter Card -->
    <meta
      name="twitter:title"
      content="Allo Taxi Sud Tarascon | Votre taxi de confiance 7j/7" />
    <meta
      name="twitter:description"
      content="Besoin d’un taxi à Tarascon ? Contactez Allo Taxi Sud Tarascon : service de transport fiable, ponctuel et confortable." />

  </head>
  <body id="home">
  <?php include('./includes/header.php'); ?>

    <main role="main">

    <?php include('./includes/homepage/hero.php'); ?>
    <?php include('./includes/homepage/services.php'); ?>
    <?php include('./includes/homepage/reservation.php'); ?>
    <?php include('./includes/homepage/a-propos.php'); ?>
    <?php include('./includes/homepage/zones.php'); ?>
    <?php include('./includes/homepage/nos-vehicules.php'); ?>
    <?php include('./includes/homepage/temoignages.php'); ?>
    <?php include('./includes/homepage/actualites-blog.php'); ?>
    <?php include('./includes/homepage/faq.php'); ?>
    
    </main>
<?php 
include('./includes/footer.php'); 
include('./includes/buttons-footer.php'); 
?>
    <script src="./assets/js/index.js"></script>
  </body>
</html>
