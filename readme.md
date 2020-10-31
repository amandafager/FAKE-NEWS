## FAKE NEWS

## Description

First hand-in assignments in PHP. The assigment was to to build a news feed with fake news articles.

## Technologies

-   PHP
-   CSS
-   HTML

## Installation

1. #### Clone the repository

    `https://github.com/amandafager/FAKENEWS.git`

2. #### Start a local server in the command line

    `$ php -S localhost:8000/index.php`

3. #### Open the index.php file in your browser

## Testers

-   Felix Östergren
-   Carolina Hagman

## Code Review

By Simon Lindstedt

-   `general` I suggest that all img tags are accompanied by an alt tag.
-   `general` Make sure that the php is closed properly when used in conjunction with html.
-   `culture.php:51` Moving the last section tag inside the if-statment of the foreach-loop.
-   `economy.php:51` Same as above.
-   `sport.php:51` Same as above.
-   `main.css:16-18` I suggest auto-margin for placing the popular news and socials in the centre of the screen at smaller sizes.
-   `posts.css:154:-158` I suggest the same as above, for placing all of the articles in the middle when using smaller screens smaller sizes.
-   `functions.php:5-6` I would suggest removing the require line, because as far as I can tell the data is not needed in the function-definitions.
-   `aside.php:3` Strict types declared where it may not be useful.
-   `aside.php:27, 32, 38, 43, 49, 54`: Since no `<use>` tag is used, the `<defs>` can be removed, as far as I can tell. Otherwise, i think you can 'define' your gradient once, and then 'use' it for all three social-media-icons. Like detailed [here](https://developer.mozilla.org/en-US/docs/Web/SVG/Element/defs). I also added a /n character after the first a-tag of each icon, for readabilitys sake.
-   And finally, great job! ✊🏻

## License

This project is licensed under the MIT License - see the LICENSE file for details
