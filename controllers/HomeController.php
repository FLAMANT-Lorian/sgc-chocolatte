<?php

class HomeController extends BaseController // Tout ce qui est entre les accolades est la recette pour créer un controller; On peut considérer la classe comme la recette
{
    public function show()
    {
            $page = $this->getHomepage();

        return $this->view($page->template, [
            'page' => $page,
            'title' => 'Chocolatté',
            'preTitle' => 'Bienvenue chez',
            'employees' => Employee::getHomepageEmployees(),
            'reviews' => Review::getHomepageReviews(),
           'categories' => $this->getMenuCategories(),
        ]);
    }

    protected function getMenuCategories()
    {
        $categories = ProductCategory::getHomepageMainCategories();

        foreach ($categories as $mainCategoryindex => $category) {
            $category->subcategories = ProductCategory::getHomepageSubCategories($category);

            foreach ($category->subcategories as $subCategoryindex => $subCategory) {
                $subCategory->products = Product::getHomepageProducts($subCategory);

                if (!$subCategory->products) {
                    unset($category->subcategories[$subCategoryindex]);
                }
            }

            if (!$category->subcategories) {
                unset($category[$mainCategoryindex]);
            }
        }
        /*unset() // pour supprimer une donnée*/
        return $categories;
    }

    protected function getMainNavigation()
    {
        $menu = Menu::getMenuForLocation('header');

        $menu->links = Menu::getLinksForMenu($menu);

        foreach ($menu->links as $link) {
            $link->url = 'http://sgc-chocolatte.test/' . $link->page . ($link->section ? '#' . $link->section : '');

        }

        return $menu;
    }


    protected function getHomePage()
    {
        $page = Page::getHome();

        $page->sections = Section::getPageSections($page);

        foreach ($page->sections as $index => $section) {
            $section->content = json_decode($section->content);
        }

        $page->navigation = $this->getMainNavigation();

        return $page;
    }
}
