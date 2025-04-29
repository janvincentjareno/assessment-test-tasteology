<?php
// views/layout.php

// Expecting these variables from the controller:
//   $featured      — array with keys: 'image', 'title', 'body', etc.
//   $relatedItems  — array of arrays, each with 'image', 'title', 'excerpt', etc.
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Preconnect to Google Fonts for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <!-- Compiled CSS -->
  <link rel="stylesheet" href="/public/css/style.css?v=1.0.1">

  <title>Tasteology</title>
</head>
<body>
  
  <!-- Featured Article Section -->
  <?php include __DIR__ . '/featured.php'; ?>

  <!-- Related Articles Section -->
  <?php include __DIR__ . '/related.php'; ?>

  <!-- Modal for Image Preview -->
  <div id="img-modal" class="modal hidden">
    <div class="modal-overlay"></div>
    <div class="modal-content">
      <button id="modal-close">&times;</button>
      <img id="modal-img" src="" alt="Expanded view">
    </div>
  </div>

  <!-- JS -->
  <script src="/public/js/main.js?v=1.0.0"></script>
</body>
</html>
