<section class="page-section">
  <div class="container">
    <article class="featured">
      <div class="featured__images">
        <div class="featured__image-left fade-in">
          <a href="#" data-modalimg="<?= htmlspecialchars($featured['left']) ?>" class="img-modal">
            <img src="<?= htmlspecialchars($featured['left']) ?>" alt="<?= htmlspecialchars($featured['left-alt']) ?>" class="featured__image--large">
          </a>  
        </div>
        <div class="featured__image-right top fade-in">
          <a href="#" data-modalimg="<?= htmlspecialchars($featured['right-top']) ?>" class="img-modal">
            <img src="<?= htmlspecialchars($featured['right-top']) ?>" alt="<?= htmlspecialchars($featured['right-top']) ?>" class="featured__image--small">
          </a>  
        </div>
        <div class="featured__image-right bottom fade-in">
          <a href="#" data-modalimg="<?= htmlspecialchars($featured['right-bottom']) ?>" class="img-modal">
            <img src="<?= htmlspecialchars($featured['right-bottom']) ?>" alt="<?= htmlspecialchars($featured['right-bottom']) ?>" class="featured__image--small">
          </a>  
        </div>
      </div>
      <div class="featured__content fade-in">
        <h1 class="featured__title"><?= htmlspecialchars($featured['title']) ?></h1>
        <div class="featured__excerpt">
          <p><?= htmlspecialchars($featured['body']) ?></p>
        </div>
        <div class="featured__callout">
          <h5 class="featured__callout-subheading"><?= htmlspecialchars($featured['callout-label']) ?></h5>
          <p><?= htmlspecialchars($featured['callout-text']) ?></p>
          <a href="#" class="featured__callout-link stretched-link">Read More</a>
        </div>
      </div>
    </article>
  </div>
</section>