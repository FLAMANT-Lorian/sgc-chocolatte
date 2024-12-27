<?php

class Section extends BaseModel
{
    public function pageSections($page)
    {
    return $this->get('SELECT `sections`.`slug`,`sections`.`type`,`sections`.`content` FROM `sections` WHERE `sections`.`page_id` = :page ORDER BY `sections`.`order` ASC;', [
        'page' => $page->id,
    ]);
    }
}