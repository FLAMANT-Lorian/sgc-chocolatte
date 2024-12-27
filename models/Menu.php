<?php

class Menu extends BaseModel
{
    public function menuForLocation($location)
    {
        return $this->first('SELECT `menus`.`id`, `menus`.`title` FROM `menus` WHERE `menus`.`location` = :location;', [
            'location' => $location,
        ]);
    }

    public function linksForMenu($menu)
    {
        return $this->get('SELECT `menu_page`.`label`, `menu_page`.`title`, `menu_page`.`target`, `pages`.`slug` AS "page", `sections`.`slug` AS "section" 
            FROM `menu_page` 
            JOIN `pages` ON `pages`.`id` = `menu_page`.`page_id` 
            LEFT JOIN `sections` ON `sections`.`id` = `menu_page`.`section_id` 
            WHERE `menu_page`.`menu_id` = :menu ORDER BY `menu_page`.`order` ASC;', [
            'menu' => $menu->id,
        ]);
    }
}