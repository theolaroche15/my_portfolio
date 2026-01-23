<?php include 'assets/fonts/typo.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THEO LAROCHE - PORTFOLIO</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-black">

  <?php include 'includes/nav.php'; ?>

  <main class="pt-32">
    <?php include 'sections/home.php'; ?>
    <?php include 'sections/about.php'; ?>
    <?php include 'sections/projects.php'; ?>
    <?php include 'sections/contact.php'; ?>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="assets/js/main.js"></script>
  <script>feather.replace();</script>
</body>
</html>