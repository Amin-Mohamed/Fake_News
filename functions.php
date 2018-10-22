<?php

declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.
//

/**
 * [sortArrayAsDate description]
 * @param  array $a [description]
 * @param  array $b [description]
 * @return bool     [description]
 */

function sortArrayAsDate(array $a, array $b): bool
{
    return strtotime($a['date']) > strtotime($b['date']);
}

/**
 * [Generate a random likes number]
 * @param  int $min [description]
 * @param  int $max [description]
 * @return int      [description]
 */
function randomLikes( int $minLikes = 5, int $maxLikes = 200): int{

    return $news['likes'] = rand($minLikes, $maxLikes);

};
