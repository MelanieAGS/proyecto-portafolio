<?php
/**
 * Plugin Name: Mi Widget Elementor
 * Description: Plugin de lab 2
 * Version: 1.0
 * Author: Melanie Gamboa
 */

 if(!defined('ABSPATH')){
    exit;
 }

 final class Mi_Widget_Elementor {
    const VERSION = '1.0.0';
    const MINIMUN_ELEMENTOR_VERSION = '2.0.0';


    public function __construct(){
        add_action('plugins_loaded', [$this, 'init']);  
    }
    
    public function enqueue_widget_styles() {
        wp_enqueue_style( 'mi-widget-css', plugin_dir_url( __FILE__ ) . 'mi-widget.css', [], '1.0.0', 'all' );

    }

    public function init(){

        if (!did_action('elementor/loaded')){
            add_action('admin_notices', [$this, 'admin_notice_missiong_main_plugin']);
            return;
        }    
        add_action('elementor/widgets/widgets_registered', [$this, 'init_widgets']);
        add_action('elementor/frontend/after_enqueue_styles', [$this, 'enqueue_widget_styles']);   
    }

    public function init_widgets(){
        include_once('mi-widget.php');     
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Mi_Widget());
    }
    
    public function admin_notice_missiong_main_plugin(){
       
        if(isset($_GET['activate'])) unset($_GET['activate']);
        echo '<div class="notice notice-warning is-dismissible"><p><strong>'. sprintf(esc_html__('"%s" require "%s" para funcionar'), 'Mi Widget Elementor','Elementor') . '</strong></p></div>';
    }
 }

 new Mi_Widget_Elementor();