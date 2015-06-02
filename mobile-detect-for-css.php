<?php
/*
Plugin Name: Mobile Detect For CSS
Description: This plugin add the device css class to BODY tag
Version: 1.2
Author: Phuc Pham
License: GPL
Copyright: Phuc Pham
*/

if(!class_exists('Mobile_Detect')){
    require_once 'Mobile_Detect.php';
}

class Mobile_Detect_For_Css{
    var $mobile_detect;
    public function __construct(){

        $this->mobile_detect = new Mobile_Detect();

        add_filter('body_class', array($this, 'body_class'));
    }

    function body_class($classes) {

        if($this->mobile_detect->isMobile() && !$this->mobile_detect->isTablet()){
            $classes[] = 'mobile';
        }

        if($this->mobile_detect->isTablet() && !$this->mobile_detect->isMobile()){
            $classes[] = 'tablet';
        }

        if( $this->mobile_detect->isiOS() ){
            $classes[] = 'ios';
        }

        if( $this->mobile_detect->isAndroidOS() ){
            $classes[] = 'android';
        }

        if( $this->mobile_detect->isMobile() || $this->mobile_detect->isTablet() ){
            $classes[] = 'handheld';
        }

        if(!$this->mobile_detect->isMobile() && !$this->mobile_detect->isTablet()){
            $classes[] = 'desktop';
        }

        return $classes;
    }
}

new Mobile_Detect_For_Css;

