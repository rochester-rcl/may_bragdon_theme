> This project is currently under development.


# May Bragdon Drupal Theme
A custom drupal theme created for the May Bragdon project.

![Alt text](https://raw.githubusercontent.com/rochester-rcl/may_bragdon_theme/master/images/mayb-cover-image.png "Optional title")


### Table of Contents
1. Installation Instructions (Below)
2. [Module Installation](https://github.com/rochester-rcl/may_bragdon_theme/tree/master/install_modules)
3. [Templates](https://github.com/rochester-rcl/may_bragdon_theme/tree/master/templates)
4. [CSS](https://github.com/rochester-rcl/may_bragdon_theme/tree/master/css)


## Requirements
Before you install please make sure your Drupal instance meets the following requirements.

- [Bootstrap](https://drupal.org/project/bootstrap) 7.x-2.0 or 7.x-3.0 (base-theme must be enabled).
- [jQuery Update](https://drupal.org/project/jquery_update) jQuery Update - 7.x-2.4 or higher. Bootstrap 2 requires a minimum jQuery version of 1.7 or higher, while Bootstrap 3 requires jQuery 1.9+
- If using the [bootstrap carousel](http://getbootstrap.com/javascript/#carousel) you must make a change to the parent theme to fix the **next** & **previous** buttons issue [follow these instructions](https://www.drupal.org/node/2233127).
- [Font-Awesome](https://www.drupal.org/project/fontawesome) This theme uses fontawesome. You must have it installed in order for the icons to show up.


### Installation
Install this theme as you would any other Drupal theme.


1. Move the **may_bragdon_theme** folder into **sites/all/themes**
2. Download the [Bootstrap 3](https://drupal.org/project/bootstrap) theme and unzip into **sites/all/themes**.
3. In the Drupal admin go to **Apperance** > then find the **Bootstrap 3** theme > enable it but **DO NOT** set it as default.
  *(Note) the previous two lines can be done using drush with the following command: drush en bootstrap -y
4. In the Drupal admin go to **Apperance** > then find the **May Bragdon Theme** > enable it & set as default.



##### Drupal Admin Configurations
You must make these adjustments in drupal to insure proper display or the theme and it's content types.

1. If you have installed the suggested [Administration menu](https://www.drupal.org/project/admin_menu) as mentioned in the [install_modules](https://github.com/rochester-rcl/may_bragdon_theme/tree/master/install_modules) folder, you may see an issue with it randomly disappearing. You can fix that by going to **admin/config/administration/admin_menu** > unchecking **Cache menu in client-side browser** (Under *performance*)

2. **Remove unnecessary default blocks.** Set all blocks aside from **Content[Content]** to **None**. This prevents the grid from being out of alignment. If you see the content area slightly shifted to one side, this is why.

3. Default logo. Got to **admin/appearance/settings/may_bragdon_theme** and uncheck **Use default logo**. This will prevent the default broken logo. *Note: This is a known bug and will be fixed. So if you don't see a broken logo image next to the RCL logo then we need to update this step.*

### Known Issues
- Admin editing via mobile is poor but that is a drupal issue.


##### Drupal Source Fixes

  ## Fix the viewer so that level 0 works
  1. cd /sites/all/modules/islandora_openseadragon/js
  2. edit djtilesource.js
  3. change the following code:
  ```javascript

  $.TileSource.call(
	that,
	parseInt(data.width),
	parseInt(data.height),
	parseInt(settings.tileSize),
	parseInt(settings.tileOverlap),
	1,
	parseInt(data.levels)
      );  
   ```
   To
   ```javascript

  $.TileSource.call(
	that,
	parseInt(data.width),
	parseInt(data.height),
	parseInt(settings.tileSize),
	parseInt(settings.tileOverlap),
	0,
	parseInt(data.levels)
      );  
   ```
   Notice the 1 -> 0