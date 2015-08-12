<?php namespace Stone\Menus\Components;

use Cms\Classes\ComponentBase;

class Magellan extends ComponentBase
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
            'name'        => 'Magellan Sticky Nav',
            'description' => 'Provides Foundation 5 Magellan Sticky Nav menu'
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

    public function onRun() {

        // Set the menu items
        $this->menuItems[$this->alias] = $this->page['menuItems'];
        $this->iconbarClasses = $this->property('iconbarClasses');
        $iconStr = $this->property('icons');
        // Convert string to array for view
        $this->icons = explode(' ', $iconStr);

        $this->addJs('/plugins/stone/menus/assets/sidenav_magellan.js');
    }

}