<?php namespace Acme\Rtl\Skins;

use Backend\Classes\Skin;

/**
 * RTL skin information file
 *
 * @package acme\rtl
 * @author Alexey Bobkov, Samuel Georges
 */

class RightToLeft extends Skin
{

    /**
     * {@inheritDoc}
     */
    public function skinDetails()
    {
        return [
            'name' => 'Right-To-Left Skin'
        ];
    }

}