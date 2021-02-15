<?php namespace Dmrch\Catalog;

use Backend;
use System\Classes\PluginBase;

/**
 * Catalog Plugin Information File
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
            'name'        => 'Catalog',
            'description' => 'No description provided yet...',
            'author'      => 'Angelo Demarchi',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Dmrch\Catalog\Components\Category' => 'categories',
            'Dmrch\Catalog\Components\Product' => 'products',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'dmrch.catalog.some_permission' => [
                'tab' => 'Catalog',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'product' => [
                'label'       => 'Catalog',
                'url'         => Backend::url('dmrch/catalog/product'),
                'icon'        => 'icon-cubes',
                'permissions' => ['dmrch.catalog.*'],
                'order'       => 500,
                'sideMenu' => [
                    'product' => [
                        'label'       => 'Products',
                        'icon'        => 'icon-cube',
                        'url'         => Backend::url('dmrch/catalog/product'),
                        'permissions' => ['dmrch.catalog.*'],
                    ], 
                    'category' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-cubes',
                        'url'         => Backend::url('dmrch/catalog/category'), 
                        'permissions' => ['dmrch.catalog.*'],
                     ]
                ]
            ]
        ];
    }
}
