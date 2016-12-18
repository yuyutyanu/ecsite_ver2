<?php

namespace App\Service\Inter_face;

interface diReview {
    public function addReview($product_id, $user_id, $star, $text);
    public function getReview($product_id);
}
