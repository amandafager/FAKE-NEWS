<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


function sortByDate(array $posts): array
{
    usort($posts, function ($a, $b) {
        return $b['published_date'] <=> $a['published_date'];
    });
    return $posts;
}

function getAuthorById(int $post_id, array $authors): string
{

    foreach ($authors as $author) {

        if ($author['id'] === $post_id) {

            return $author['author'];
        }
    }
}

function sortByLikes(array $posts): array
{
    usort($posts, function ($a, $b) {
        return $b['likes'] <=> $a['likes'];
    });
    return $posts;
}


/*usort($posts, function ($a, $b) {

    return $b['likes'] <=> $a['likes'];
});*/
