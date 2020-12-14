<?php>

<h1>Films</h1>


<?php
foreach($movies as $movie): ?>

<h2>
    <?= $movie->getTitle() ?>
</h2>
<p>
    <?= $movie->getDescription() ?>
</p>

<p>
    <?= $movie->getMoviesUrl() ?>
</p>

<h3>
    <?= $movie->getMoviesDate() ?>
</h3>

<?php endforeach; ?>