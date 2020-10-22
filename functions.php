<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


usort($posts, function ($a, $b) {

    return $b['published_date'] <=> $a['published_date'];
});


usort($posts, function ($a, $b) {

    return $b['likes'] <=> $a['likes'];
});


function getAuthorById(int $post_id, array $authors): string
{

    foreach ($authors as $author) {

        if ($author['id'] === $post_id) {
            return $author['author'];
        }
    }
}
