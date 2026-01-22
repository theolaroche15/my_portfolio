<?php
// index.php - point d'entrée du site
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php include 'includes/nav.php'; ?>

  <main>
    <?php include 'sections/home.php'; ?>
    <?php include 'sections/about.php'; ?>
    <?php include 'sections/projects.php'; ?>
    <?php include 'sections/contact.php'; ?>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="assets/js/main.js"></script>
</body>
</html>
