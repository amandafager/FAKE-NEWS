<?php


require __DIR__ . '/data.php';

require __DIR__ . '/functions.php';

require __DIR__ . '/headHtml.php'; ?>

<main class="wrapper">
    <aside class="rightColumn">
        <section class="card popNews">
            <!--<div class="di_all_live__header-pulse-on">
                    <span class="pulse-dot"></span>
                    <div class="pulse-ring"></div>
                    <div class="pulse-ring"></div>
                    <div class="pulse-ring"></div>
                </div>-->
            <!--<div class="ring"></div>-->
            <h3>Popular news</h3>
            <?php foreach ($posts as $post) :
                for ($i = 0; $i < 1; $i++) : ?>
                    <div class="popNewsItems"> <?php echo $post['likes']; ?> </div> <?php endfor;
                                                                            endforeach; ?>
        </section>
        <section class="card follow">
            <h3>Follow Us</h3>
            <p>Some text..</p>
        </section>
    </aside>
    <section class="articles leftColumn">
        <?php foreach ($posts as $post) :

            if ($post['category'] === 'Sport') : ?>
                <article>
                    <h3><?php echo $post['category']; ?></h3>
                    <h2><?php echo $post['title']; ?></h2>
                    <h5><?php echo 'Author: ' . getAuthorById($post['id'], $authors); ?>
                        <br><?php echo 'Published date: ' . $post['published_date']; ?></h5>
                    <div class="fakeImg" style="height:200px;">Image</div>
                    <p><?php echo $post['content']  ?></p>
                    <svg width="25" height="25" viewBox="0 0 152 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1672 3.83781C73.3039 0.030224 78.696 0.0302325 79.8328 3.83782L93.9585 51.1511C94.4746 52.8797 96.0839 54.049 97.8874 54.0056L147.25 52.8193C151.223 52.7238 152.889 57.852 149.619 60.1098L108.986 88.1647C107.502 89.1897 106.887 91.0816 107.486 92.7834L123.868 139.363C125.186 143.112 120.824 146.281 117.666 143.869L78.4282 113.895C76.9946 112.8 75.0054 112.8 73.5718 113.895L34.3338 143.869C31.1761 146.281 26.8138 143.112 28.1322 139.363L44.5144 92.7834C45.1129 91.0816 44.4982 89.1897 43.0136 88.1647L2.38111 60.1098C-0.888837 57.852 0.777418 52.7238 4.74993 52.8193L54.1126 54.0056C55.9161 54.049 57.5254 52.8797 58.0415 51.1511L72.1672 3.83781Z" fill="#F39D1A" /></svg>
                    <p class="countLikes"> <?php echo $post['likes']; ?>
                    </p>
                </article>
        <?php endif;
        endforeach; ?>
    </section>
</main>

<?php require __DIR__ . '/headHtml.php';
