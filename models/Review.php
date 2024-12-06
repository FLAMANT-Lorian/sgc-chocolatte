<?php

class Review extends BaseModel
{
    public function homepageReviews()
    {
        return $this->get('SELECT `reviews`.`customer`, `reviews`.`cover_img`, `reviews`.`avatar_img`, `reviews`.`content`, `reviews`.`rating` FROM `reviews` ORDER BY `created_at` DESC LIMIT 3');
    }
}
