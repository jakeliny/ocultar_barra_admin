<?php

/*
Plugin Name: Ocultar Barra Admin
Plugin URI: https://github.com/jakeliny/ocultar_barra_admin
Description: Ocultar a barra administrativa para todos os usuários
Version:    1.0.0
Author:      Jakeliny
Author URI: https://github.com/jakeliny
License:    GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

/*Escondendo a barra administrativa*/
function my_function_admin_bar(){
    return false;
}

class Ocultar_Barra_Admin{

  static function initial(){
    add_filter( 'show_admin_bar', __CLASS__ . '::ocultar_barra');
  }



  static function ocultar_barra(){
    return false;
  }
}

Ocultar_Barra_Admin::initial();
