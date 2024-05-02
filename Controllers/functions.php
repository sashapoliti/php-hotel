<?php
function printStars($n) {
    $maxStars = 5;
    $stars = '';

    for ($i = 0; $i < $n; $i++) {
        $stars .= '<i class="fas fa-star"></i>';
    }

    for ($i = $n; $i < $maxStars; $i++) {
        $stars .= '<i class="far fa-star"></i>';
    }
    
    return $stars;
}