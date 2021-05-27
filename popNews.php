<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

require __DIR__ . '/functions.php';

require __DIR__ . '/headHtml.php'; ?>

<h2 class="title">Popular News</h2>

<?php $articleId = $_GET['id']; ?>

<section class="articles leftColumn popPage">
    <article>
        <?php $post = getPostById($posts, (int)$articleId);
        $author = getAuthorById($post['id'], $authors); ?>

        <h3><?= $post['category']; ?></h3>
        <div class="underline"></div>
        <h2><?= $post['title']; ?></h2>
        <h5><?= "Published date: " . $post['published_date']; ?></h5>
        <h5><?= "Author: " . $author ?></h5>
        <div class="imgBox"><img src="<?= $post['img']; ?>" alt="<?= $post['imgAlt'] ?>"></div>
        <details>
            <summary><span class="open">Read Full Article</span><span class="close">Hide Article</span></summary>
            <p class="preamble"><?= $post['preamble'];  ?>
                <br>
                <br>
            <p class="mainContent"><?= $post['content']; ?></p>
        </details>
        <button class="likeButton">
            <svg class="heart" width="20" height="20" viewBox="0 0 127 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M92.0416 0.6875C80.0541 0.6875 69.4937 6.68125 63.4999 16.1C57.5062 6.68125 46.9457 0.6875 34.9583 0.6875C16.1208 0.6875 0.708252 16.1 0.708252 34.9375C0.708252 68.9021 63.4999 103.438 63.4999 103.438C63.4999 103.438 126.292 69.1875 126.292 34.9375C126.292 16.1 110.879 0.6875 92.0416 0.6875Z" fill="white" />
            </svg>
            <p class="countLikes"><?= $post['likes']; ?></p>
        </button>
    </article>
</section>
</main>

<?php require __DIR__ . '/footer.php'; ?>
