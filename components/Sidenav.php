<?php namespace Stone\Menus\Components;

use Cms\Classes\ComponentBase;

class Sidenav extends ComponentBase
{

    /**
     * Holds our menu items
     * @var array
     */
    public $menuItems;


    /**
     * Holds Icons
     * @var array
     */
    public $icons = [];

    public function componentDetails()
    {
        return [
            'name'        => 'Side-Nav',
            'description' => 'Provides Foundation 5 Side-Nav menu'
        ];
    }

    public function defineProperties()
    {
        return [
            'icons' => [
                'title' => 'Add Icons',
                'description' => 'Add icons name without "fa fa-" added, space between each name',
                'type' => 'string'
            ],
        ];
    }

    /**
     * Set the navigation
     */
    public function onRun() {

        // Set the menu items
        $this->menuItems[$this->alias] = $this->page['menuItems'];
        $iconStr = $this->property('icons');
        // Convert string to array for view
        $this->icons = explode(' ', $iconStr);
    }

}