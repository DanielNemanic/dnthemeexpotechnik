<?php
namespace DN\ThemeExpotechnik\Helper;
/**
 * Created by PhpStorm.
 * User: dnemanic
 */

class Helper {

	/**
	 * Returns the Alert Dialog for the FlashMessages
	 *
	 * @param $status
	 * @param $content
	 *
	 * @return string
	 */
	public static function flashMessage( $status, $content ){
	    $alert = null;
	    switch ($status) {
	        case '-1':
	            $alert = 'primary';
	            break;
	        case '0':
	            $alert = 'success';
	            break;
	        case '1':
	            $alert = 'warning';
	            break;
	        case '2':
	            $alert = 'danger';
	            break;
	        default:
	            $alert = 'primary';
	            break;
	    }

	    return '<div class="uk-alert-'. $alert .'" uk-alert>
	                <a href="" class="uk-alert-close" uk-close></a>
	                <p>'. $content .'</p>
	            </div>';
	}

}