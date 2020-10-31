<?php
// This might cause problems later 
declare(strict_types=1); ?>


<aside class="rightColumn">
    <section class="right popNews">
        <h3>Popular News</h3>
        <div class="underline"></div>

        <?php foreach (array_slice(sortByLikes($posts), 0, 3) as $post) :
            $title = $post['title']; ?>

            <a href="popNews.php" class="popNewsItems">
                <h2><?= $title ?> </h2>
                <svg class="arrow" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="black" />
                </svg>
            </a>
        <?php endforeach; ?>

    </section>
    <section class="right">
        <section class="socials">
            <a class="facebook" href="https://www.facebook.com/">
                <svg width="70" height="70" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M48.6302 81.2913C67.6277 77.7157 82 61.0363 82 41C82 18.3563 63.6437 0 41 0C18.3563 0 0 18.3563 0 41C0 62.1905 16.0758 79.6262 36.6971 81.7769V55.3125H27V44.2734H36.6971V35.8592C36.6971 26.2879 42.3987 21 51.1217 21C55.3002 21 59.6693 21.7453 59.6693 21.7453V31.1432H54.8541C50.1095 31.1432 48.6302 34.0883 48.6302 37.1078V44.2715H59.2232L57.5286 55.3106L48.6302 55.3125V81.2913Z" fill="url(#paint0_radial)" />
                    <defs>
                        <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(41 41) rotate(90) scale(41)">
                            <stop offset="0.770833" stop-color="#4730D1" />
                            <stop offset="1" stop-color="#3A24BF" />
                        </radialGradient>
                    </defs>
                </svg>
            </a>
            <a class="twitter" href="https://twitter.com/">
                <svg width="70" height="70" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41 82C63.6437 82 82 63.6437 82 41C82 18.3563 63.6437 0 41 0C18.3563 0 0 18.3563 0 41C0 63.6437 18.3563 82 41 82ZM57.3928 28.5083L62 27.7175L57.3928 31.6713C59.6964 44.3235 44.3392 68.0463 19 55.3942C27.4464 55.3942 32.0536 51.4403 32.0536 51.4403C32.0536 51.4403 26.6786 51.4403 23.6072 45.1143H28.9822C23.6072 43.5327 20.5358 40.3697 20.5358 35.6251L25.1428 37.2067C17.4642 31.6713 22.0714 24.5544 22.0714 24.5544C22.0714 24.5544 28.2142 34.0436 40.5 34.0436C37.4286 26.9268 48.1786 18.2284 55.0892 26.136L60.4642 24.5544L57.3928 28.5083Z" fill="url(#paint0_radial)" />
                    <defs>
                        <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(41 41) rotate(90) scale(41)">
                            <stop offset="0.770833" stop-color="#4730D1" />
                            <stop offset="1" stop-color="#3921CA" />
                        </radialGradient>
                    </defs>
                </svg>
            </a>
            <a class="instagram" href="https://www.instagram.com/">
                <svg width="70" height="70" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41 82C63.6437 82 82 63.6437 82 41C82 18.3563 63.6437 0 41 0C18.3563 0 0 18.3563 0 41C0 63.6437 18.3563 82 41 82ZM46.4206 35.5794C47.918 37.0768 48.6667 38.8837 48.6667 41C48.6667 43.1163 47.918 44.9232 46.4206 46.4206C44.9232 47.918 43.1163 48.6667 41 48.6667C38.8837 48.6667 37.0768 47.918 35.5794 46.4206C34.082 44.9232 33.3333 43.1163 33.3333 41C33.3333 38.8837 34.082 37.0768 35.5794 35.5794C37.0768 34.082 38.8837 33.3333 41 33.3333C43.1163 33.3333 44.9232 34.082 46.4206 35.5794ZM49.3555 49.3555C51.6515 47.0595 52.7995 44.2743 52.7995 41C52.7995 37.7257 51.6515 34.9405 49.3555 32.6445C47.0595 30.3485 44.2743 29.2005 41 29.2005C37.7257 29.2005 34.9405 30.3485 32.6445 32.6445C30.3485 34.9405 29.2005 37.7257 29.2005 41C29.2005 44.2743 30.3485 47.0595 32.6445 49.3555C34.9405 51.6515 37.7257 52.7995 41 52.7995C44.2743 52.7995 47.0595 51.6515 49.3555 49.3555ZM55.2253 30.668C55.7643 30.1289 56.0339 29.48 56.0339 28.7214C56.0339 27.9627 55.7643 27.3138 55.2253 26.7747C54.6862 26.2357 54.0373 25.9661 53.2786 25.9661C52.52 25.9661 51.8711 26.2357 51.332 26.7747C50.793 27.3138 50.5234 27.9627 50.5234 28.7214C50.5234 29.48 50.793 30.1289 51.332 30.668C51.8711 31.207 52.52 31.4766 53.2786 31.4766C54.0373 31.4766 54.6862 31.207 55.2253 30.668ZM38.709 22.1178C40.0966 22.1278 40.8602 22.1328 41 22.1328C41.1398 22.1328 41.9034 22.1278 43.291 22.1178C44.6786 22.1079 45.7318 22.1079 46.4505 22.1178C47.1693 22.1278 48.1326 22.1578 49.3405 22.2077C50.5484 22.2576 51.5766 22.3574 52.4251 22.5072C53.2737 22.6569 53.9874 22.8416 54.5664 23.0612C55.5647 23.4605 56.4431 24.0395 57.2018 24.7982C57.9605 25.5569 58.5395 26.4353 58.9388 27.4336C59.1584 28.0126 59.3431 28.7263 59.4928 29.5749C59.6426 30.4234 59.7424 31.4516 59.7923 32.6595C59.8422 33.8674 59.8722 34.8307 59.8822 35.5495C59.8921 36.2682 59.8921 37.3214 59.8822 38.709C59.8722 40.0966 59.8672 40.8602 59.8672 41C59.8672 41.1398 59.8722 41.9034 59.8822 43.291C59.8921 44.6786 59.8921 45.7318 59.8822 46.4505C59.8722 47.1693 59.8422 48.1326 59.7923 49.3405C59.7424 50.5484 59.6426 51.5766 59.4928 52.4251C59.3431 53.2737 59.1584 53.9874 58.9388 54.5664C58.5395 55.5647 57.9605 56.4431 57.2018 57.2018C56.4431 57.9605 55.5647 58.5395 54.5664 58.9388C53.9874 59.1584 53.2737 59.3431 52.4251 59.4928C51.5766 59.6426 50.5484 59.7424 49.3405 59.7923C48.1326 59.8422 47.1693 59.8722 46.4505 59.8822C45.7318 59.8921 44.6786 59.8921 43.291 59.8822C41.9034 59.8722 41.1398 59.8672 41 59.8672C40.8602 59.8672 40.0966 59.8722 38.709 59.8822C37.3214 59.8921 36.2682 59.8921 35.5495 59.8822C34.8307 59.8722 33.8674 59.8422 32.6595 59.7923C31.4516 59.7424 30.4234 59.6426 29.5749 59.4928C28.7263 59.3431 28.0126 59.1584 27.4336 58.9388C26.4353 58.5395 25.5569 57.9605 24.7982 57.2018C24.0395 56.4431 23.4605 55.5647 23.0612 54.5664C22.8416 53.9874 22.6569 53.2737 22.5072 52.4251C22.3574 51.5766 22.2576 50.5484 22.2077 49.3405C22.1578 48.1326 22.1278 47.1693 22.1178 46.4505C22.1079 45.7318 22.1079 44.6786 22.1178 43.291C22.1278 41.9034 22.1328 41.1398 22.1328 41C22.1328 40.8602 22.1278 40.0966 22.1178 38.709C22.1079 37.3214 22.1079 36.2682 22.1178 35.5495C22.1278 34.8307 22.1578 33.8674 22.2077 32.6595C22.2576 31.4516 22.3574 30.4234 22.5072 29.5749C22.6569 28.7263 22.8416 28.0126 23.0612 27.4336C23.4605 26.4353 24.0395 25.5569 24.7982 24.7982C25.5569 24.0395 26.4353 23.4605 27.4336 23.0612C28.0126 22.8416 28.7263 22.6569 29.5749 22.5072C30.4234 22.3574 31.4516 22.2576 32.6595 22.2077C33.8674 22.1578 34.8307 22.1278 35.5495 22.1178C36.2682 22.1079 37.3214 22.1079 38.709 22.1178ZM63.8503 50.4935C63.9501 48.7365 64 45.572 64 41C64 36.428 63.9501 33.2635 63.8503 31.5065C63.6506 27.3537 62.4128 24.1393 60.1367 21.8633C57.8607 19.5872 54.6463 18.3494 50.4935 18.1497C48.7365 18.0499 45.572 18 41 18C36.428 18 33.2635 18.0499 31.5065 18.1497C27.3537 18.3494 24.1393 19.5872 21.8633 21.8633C19.5872 24.1393 18.3494 27.3537 18.1497 31.5065C18.0499 33.2635 18 36.428 18 41C18 45.572 18.0499 48.7365 18.1497 50.4935C18.3494 54.6463 19.5872 57.8607 21.8633 60.1367C24.1393 62.4128 27.3537 63.6506 31.5065 63.8503C33.2635 63.9501 36.428 64 41 64C45.572 64 48.7365 63.9501 50.4935 63.8503C54.6463 63.6506 57.8607 62.4128 60.1367 60.1367C62.4128 57.8607 63.6506 54.6463 63.8503 50.4935Z" fill="url(#paint0_radial)" />
                    <defs>
                        <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(41 41) rotate(90) scale(41)">
                            <stop offset="0.770833" stop-color="#4730D1" />
                            <stop offset="1" stop-color="#3A24BF" />
                        </radialGradient>
                    </defs>
                </svg>
            </a>
        </section>
    </section>
</aside>