<?php namespace Acme\Rtl;

use System\Classes\PluginBase;

/**
 * RightToLeft Plugin Information File
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
            'name'        => 'Right to Left Support',
            'description' => 'This plugin adds Right-To-Left support to OctoberCMS Backend',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
        ];
    }

}
