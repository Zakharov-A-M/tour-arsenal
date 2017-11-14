<?php


class Review {

    const COUNT = 5;

    public static function getReview($page = 0) {
        $query = Connect::Query('SELECT * FROM review_client as a where a.status = 1 limit '.$page.','.self::COUNT);
        $query_count = Connect::Query('SELECT COUNT(*) FROM review_client as a where a.status = 1');
        return [$query, $query_count];
    }

}


    if (isset($_GET['page'])) {
        if ($_GET['page'] == 1) {
            $page = 0;
        } else {
            $page = ($_GET['page'] - 1) * Review::COUNT;
        }
        $review = Review::getReview($page);
    } else {
        $review = Review::getReview();
    }

    $count = ceil((int)$review[1][0]['COUNT(*)'] / Review::COUNT);
    $review = $review[0];