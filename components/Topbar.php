<?php namespace Stone\Menus\Components;

use Cms\Classes\ComponentBase;

class Topbar extends ComponentBase
{

    protected $menuObj;

    /**
     * Holds our menu items
     * @var array
     */
    public $menuItems;

    /**
     * Holds Title for menu
     * @var string
     */
    public $navTitle;

    /**
     * Holds classes added to Top Bar
     * @var string
     */
    public $topbarClasses;


    public function componentDetails() {

        return [
            'name'        => 'Top Bar',
            'description' => 'Provides a Foundation 5 Top-Bar menu'
        ];
    }

    public function defineProperties() {

        return [
            'topbarClasses'  => [
                'title'       => 'Add Classes Top Bar',
                'description' => 'Add class attributes for positioning or styling',
                'type'        => 'string'
            ],
            'navTitle'       => [
                'title'       => 'Custom Text',
                'description' => 'Add title or custom text to left side of menu',
                'default'     => ''
            ],
        ];
    }

    /**
     * Set the navigation
     */
    public function onRun() {
        $menuObj = $this;
        // Set the menu items
        $menuObj->menuItems[$this->alias] = $this->page['menuItems'];
        // Set the positioning
        $menuObj->topbarClasses = $this->property('topbarClasses');
        // Set custom text
        $menuObj->navTitle = $this->property('navTitle');
    }

}