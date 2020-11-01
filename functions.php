<?php

declare(strict_types=1);



//Order the posts/articles based on published date - latest news feed on top.
function sortByDate(array $posts): array
{
    usort($posts, function ($a, $b) {

        return $b['published_date'] <=> $a['published_date'];
    });

    return $posts;
}

//When id in posts array and in auhtors array is same it returns the authors name on his/her posts.
function getAuthorById(int $post_id, array $authors): string
{

    foreach ($authors as $author) {

        if ($author['id'] === $post_id) {

            return $author['author'];
        }
    }
}

//Order the posts/articles based on likes - most likes on top.
function sortByLikes(array $posts): array
{
    usort($posts, function ($a, $b) {

        return $b['likes'] <=> $a['likes'];
    });

    return $posts;
}
