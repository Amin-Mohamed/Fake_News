<?php

declare(strict_types=1);

/**
 * [sortByDate description]
 * @param  array $time1 [description]
 * @param  array $time2 [description]
 * @return bool         [description]
 */

function sortByDate(array $time1, array $time2): bool
{
    return strtotime($time1['date']) < strtotime($time2['date']);
}

/**
 * [randomLikes description]
 * @param  integer $minLikes [description]
 * @param  integer $maxLikes [description]
 * @return int               [description]
 */

function randomLikes( int $minLikes = 1, int $maxLikes = 500): int
{
    return rand($minLikes, $maxLikes);
}
