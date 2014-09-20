<?php namespace Acme\Rtl\Skins;

use Backend\Classes\Skin;

/**
 * Standard skin information file
 *
 * @package october\backend
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