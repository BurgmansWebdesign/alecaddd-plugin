<?php 
/**
 * @package  AlecadddPlugin
 */
namespace Inc\Base;

use Inc\Base\BaseController;

/**
* 
*/
class WidgetController extends BaseController
{
    public function register()
    {
        if ( ! $this->activated( 'media_widget' ) ) return;
     }

}