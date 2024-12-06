<?php

class Employee extends BaseModel
{
    public function homepageEmployees()
    {
        return $this->get('SELECT `employees`.`name`, `employees`.`job`, `employees`.`description`, `employees`.`img` FROM `employees` ORDER BY `name` ASC LIMIT 4;');
    }
}
