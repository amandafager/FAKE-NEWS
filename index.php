<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

require __DIR__ . '/functions.php';

require __DIR__ . '/headHtml.php';

require __DIR__ . '/aside.php';

?>

<?php foreach (sortByDate($posts) as $post) :

    $category = $post['category'];
    $title = $post['title'];
    $publishedDate = $post['published_date'];
    $author = getAuthorById($post['id'], $authors);
    $img = $post['img'];
    $preamble = $post['preamble'];
    $content = $post['content'];
    $likes = $post['likes'];

?>

    <section class="articles leftColumn">
        <article>
            <h3><?= $category; ?></h3>
            <div class="underline"></div>
            <h2><?= $title; ?></h2>
            <h5><?= "Published date: $publishedDate" ?></h5>
            <h5><?= "Author: $author" ?></h5>
            <div class="imgBox"><img src="<?= $img; ?>"> </div>
            <details>
                <summary><span class="open">Read Full Article</span><span class="close">Hide Article</span></summary>
                <p class="preamble"><?= $preamble;  ?>
                    <br>
                    <br>
                    <p class="mainContent"><?= $content;  ?></p>
            </details>
            <button class="likeButton">
                <svg class="heart" width="20" height="20" viewBox="0 0 127 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M92.0416 0.6875C80.0541 0.6875 69.4937 6.68125 63.4999 16.1C57.5062 6.68125 46.9457 0.6875 34.9583 0.6875C16.1208 0.6875 0.708252 16.1 0.708252 34.9375C0.708252 68.9021 63.4999 103.438 63.4999 103.438C63.4999 103.438 126.292 69.1875 126.292 34.9375C126.292 16.1 110.879 0.6875 92.0416 0.6875Z" fill="white" />
                </svg>
                <p class="countLikes"><?= $likes; ?></p>
            </button>
        </article>
    </section>
<?php endforeach; ?>
</main>
<?php require __DIR__ . '/footer.php'; ?>