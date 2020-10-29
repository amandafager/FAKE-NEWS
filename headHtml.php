<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/typography.css">
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/popNews.css">
    <link rel="stylesheet" href="/styles/SoMe.css">
    <link rel="stylesheet" href="/styles/posts.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <link rel="icon" href="/favicon/iconfake.svg" type="image/svg" />
    <title>FakeNews.</title>
</head>

<body>
    <header>
        <a class="goToStart" href="/index.php">
            <img class="favicon" src="/favicon/iconfake.svg" alt="favicon">
            <h1>Fake News.</h1>
        </a>
        <div class="container css-transitions-only-after-page-load">
            <section class="hamburgermenu">
                <input id="menu" type="checkbox">
                <label for="menu">
                    <nav class="menu">
                        <ul class="menu-list">
                            <li class="menu-list-item">
                                <a href="/index.php">News </a> </li>
                            <li class="menu-list-item">
                                <a href="/culture.php">Culture</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="/economy.php">Economy</a>
                            </li>
                            <li class="menu-list-item">
                                <a href="/sport.php">Sport</a>
                            </li>
                        </ul>
                        <div class="menu-contact-info">
                            <ul>
                                <li>The lands of Westeros 27</li>
                                <li>info@fakenews.io</li>
                                <li>+46 700 000 000</li>
                            </ul>
                        </div>
                    </nav>
                    <button aria-label="Open menu" class="hamburger">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                            <g clip-path="url(#clip0)" fill="#fff">
                                <path d="M20 40a20 20 0 1120-20 20.022 20.022 0 01-20 20zm0-38.75A18.75 18.75 0 1038.75 20 18.772 18.772 0 0020 1.25z" />
                                <path d="M29.688 13.75H10.313a.625.625 0 110-1.25h19.374a.624.624 0 110 1.25zM29.688 20.625H10.313a.625.625 0 110-1.25h19.374a.624.624 0 110 1.25zM29.688 27.5H10.313a.625.625 0 110-1.25h19.374a.624.624 0 110 1.25z" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <path fill="#fff" d="M0 0h40v40H0z" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </label>
            </section>
        </div>
        <nav class="navDesk">
            <ul>
                <li>
                    <a href="/index.php">NEWS</a>
                </li>
                <li>
                    <a href="/culture.php">CULTURE</a>
                </li>
                <li>
                    <a href="/economy.php">ECONOMY</a>
                </li>
                <li>
                    <a href="/sport.php">SPORT</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="dateOfDay"><?php echo date("l jS \of F Y")  ?> </div>

    <?php require __DIR__ . '/script.php'; ?>