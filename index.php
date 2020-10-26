<?php

declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.


require __DIR__ . '/data.php';

require __DIR__ . '/functions.php';

require __DIR__ . '/headHtml.php';
?>


<main class="wrapper">
    <aside class="rightColumn">
        <section class="card popNews">
            <h3>Popular news</h3>
            <?php foreach ($posts as $post) : ?>
                <div class="popNewsItems"> <?php echo $post['likes']; ?></div>

                <?php if ($post['likes'] < 27) {
                    break;
                }; ?>

            <?php endforeach; ?>
        </section>
        <section class="card follow">
            <h3>Follow Us</h3>
            <p>Some text..</p>
        </section>
    </aside>
    <section class="articles leftColumn">
        <?php foreach (sortByDate($posts) as $post) : ?>
            <article>
                <h3><?php echo $post['category']; ?></h3>
                <h2><?php echo $post['title']; ?></h2>
                <div class="fakeImg"><img src="<?php echo $post['img']; ?>"> </div>
                <p class="preamble"><?php echo $post['preamble'];  ?>
                    <br>
                    <br>
                    <p class="mainContent"><?php echo $post['content'];  ?></p>

                    <h5><?php echo 'Author: ' . getAuthorById($post['id'], $authors); ?>
                        <br><?php echo 'Published date: ' . $post['published_date']; ?></h5>
                    <svg class="star" width="25" height="25" viewBox="0 0 152 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1672 3.83781C73.3039 0.030224 78.696 0.0302325 79.8328 3.83782L93.9585 51.1511C94.4746 52.8797 96.0839 54.049 97.8874 54.0056L147.25 52.8193C151.223 52.7238 152.889 57.852 149.619 60.1098L108.986 88.1647C107.502 89.1897 106.887 91.0816 107.486 92.7834L123.868 139.363C125.186 143.112 120.824 146.281 117.666 143.869L78.4282 113.895C76.9946 112.8 75.0054 112.8 73.5718 113.895L34.3338 143.869C31.1761 146.281 26.8138 143.112 28.1322 139.363L44.5144 92.7834C45.1129 91.0816 44.4982 89.1897 43.0136 88.1647L2.38111 60.1098C-0.888837 57.852 0.777418 52.7238 4.74993 52.8193L54.1126 54.0056C55.9161 54.049 57.5254 52.8797 58.0415 51.1511L72.1672 3.83781Z" fill="#F39D1A" /></svg>
                    <p class="countLikes"><?php echo $post['likes']; ?>
                    </p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>