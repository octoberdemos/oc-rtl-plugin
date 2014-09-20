oc-rtl-plugin
=============

This plugin adds Right-To-Left support to OctoberCMS Backend

## How to use this plugin

Update the CMS configuration file `app/config/cms.php`:

```
    /*
    |--------------------------------------------------------------------------
    | Back-end Skin
    |--------------------------------------------------------------------------
    |
    | Specifies the back-end skin to use.
    |
    */

    'backendSkin' => 'Acme\Rtl\Skins\RightToLeft',
```

Now the Right-To-Left backend skin is enabled.

## General advice on skinning the Backend

There are two ways to manipulate the backend, you can either override assets or override layouts. In both cases the system will look for an override file and use that, otherwise it will fallback to the default file. Overriding assets is possible where `Backend::skinAsset()` is called in the code.

Below you can see an example skin structure:

plugins/
  acme/                      <== Plugin starts here
    demo/
      skins/                 <== Skins folder

        custom/              <== Skin resource directory
            assets/          <== Assets directory
              css/
                october.css  <== CSS override file
            layouts/         <== Layouts directory
                _head.htm    <== Layout override file

        Custom.php           <== Skin registration file

The **Skin resource directory** should be the same name as the **Skin registration file** but in lower case. It contains files that will override the base assets found in the backend.

The **CSS override file** called **october.css** will override the following:

    // Default (fallback) file
    modules/backend/assets/css/october.css

    // Skin override file
    plugins/acme/demo/skins/custom/assets/css/october.css

The **Layout override file** called **_head.htm** will override the following:

    // Default (fallback) file
    modules/backend/layouts/_head.htm

    // Skin override file
    plugins/acme/demo/skins/custom/layouts/_head.htm
