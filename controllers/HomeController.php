<?php

class HomeController extends BaseController // Tout ce qui est entre les accolades est la recette pour créer un controller; On peut considérer la classe comme la recette
{
    public function show()
    {
        return $this->view('home', [
            'title' => 'Chocolatté',
            'preTitle' => 'Bienvenue chez',
            'employees' => Employee::getHomepageEmployees(),
            'reviews' => Review::getHomepageReviews(),
        ]);
    }
}
