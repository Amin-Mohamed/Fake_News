<?php

declare(strict_types=1);

/**
 * [sortArrayAsDate by comparing two arrays]
 * @param  array $a [description]
 * @param  array $b [description]
 * @return bool     [description]
 */

function sortArrayAsDate(array $time_1, array $time_2): bool
{
    return strtotime($time_1['date']) < strtotime($time_2['date']);
}



/**
 * [Generate a random likes number]
 * @param  int $min_likes [description]
 * @param  int $max_likes [description]
 * @return int      [description]
 */
function randomLikes( int $min_likes = 5, int $max_likes = 200): int{
    return rand($min_likes, $max_likes);
};
