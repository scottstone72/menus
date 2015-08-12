<?php namespace Stone\Menus\Components;

use Cms\Classes\ComponentBase;

class Offcanvas extends ComponentBase
{

    /**
     * Holds our menu items
     * @var array
     */
    public $menuItems;

    /**
     * Holds the style of menu selected
     * @var string
     */
    public $menuStyle;


    public function componentDetails()
    {
        return [
            'name'        => 'Off-Canvas',
            'description' => 'Provides Foundation 5 Off-Canvas menu'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Set the navigation
     */
    public function onRun() {

        // Set the menu items
        $this->menuItems[$this->alias] = $this->page['menuItems'];
    }

}