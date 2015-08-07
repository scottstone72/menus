<?php namespace Stone\Menus;

use System\Classes\PluginBase;

/**
 * menus Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Menus',
            'description' => 'Provides Foundation 5 menu components.',
            'author'      => 'stone',
            'icon'        => 'icon-bars'
        ];
    }

    public function registerComponents() {
        return [
          'stone\menus\components\topbar' => 'topbar',
          'stone\menus\components\offcanvas' => 'offcanvas',
          'stone\menus\components\iconbar' => 'iconbar',
          'stone\menus\components\sidenav' => 'sidenav',
          'stone\menus\components\magellan' => 'magellan'
        ];
    }

}
