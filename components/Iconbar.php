<?php namespace Stone\Menus\Components;

use Cms\Classes\ComponentBase;

class Iconbar extends ComponentBase
{

    /**
     * Holds our menu items
     * @var array
     */
    public $menuItems;

    /**
     * Holds classes added to Icon Bar
     * @var string
     */
    public $iconbarClasses;

    /**
     * Holds Icons
     * @var array
     */
    public $icons = [];

    public function componentDetails()
    {
        return [
            'name'        => 'Icon Bar',
            'description' => 'Provides Foundation 5 Icon-Bar menu'
        ];
    }

    public function defineProperties()
    {
        return [
            'iconbarClasses' => [
                'title' => 'Add Classes Icon Bar',
                'description' => 'Add class attributes eg.five-up, vertical',
                'type' => 'string'
            ],
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
        $this->iconbarClasses = $this->property('iconbarClasses');
        $iconStr = $this->property('icons');
        // Convert string to array for view
        $this->icons = explode(' ', $iconStr);
    }

}