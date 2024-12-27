<?php

class Page extends BaseModel
{
    public function home()
    {
        return $this->first('SELECT `pages`.`id`, `pages`.`template` FROM `pages` WHERE (`pages`.`slug` = "/" OR `pages`.`slug` = "" OR `pages`.`slug` IS NULL);');
    }
}