<section class="page-section">
  <div class="container">
    <div class="page-section__header center fade-in">
      <h2 class="page-section__heading"><?= htmlspecialchars($related['heading']) ?></h2>
    </div>

    <div class="card__deck">

      <?php foreach ($related['cards'] as $item): ?>
        <div class="card fade-in">
          <div class="card__img">
            <a href="#" data-modalimg="<?= htmlspecialchars($item['image']) ?>" class="img-modal">
              <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
            </a>
          </div>
          <div class="card__content">
            <h3><a href="#"><?= htmlspecialchars($item['title']) ?></a></h3>
            <p><?= htmlspecialchars($item['excerpt']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>

  </div>
</section>