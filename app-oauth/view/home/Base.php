<?php
require_class("DecoratorView");
require_class("PageHelper");
require_class("uri");
class Home_BaseView extends DecoratorView{
    public static function use_boundable_styles()
    {
        $path = classname_to_path(__CLASS__);
        return array_merge(
            parent::use_boundable_styles(),
            array($path . '../common.css')
        );
    }

    public static function use_styles()
    {
        return array(
            array(PageHelper::pure_static_url("css/bootcss/bootstrap.min.css"), PHP_INT_MAX),
            array(PageHelper::pure_static_url("css/bootcss/bootstrap-responsive.min.css"), PHP_INT_MAX)
        );
    }

    public static function use_javascripts()
    {
        return array(
            array(PageHelper::pure_static_url("jquery/jquery.min.js"), PHP_INT_MAX),
            array(PageHelper::pure_static_url("js/bootcss/bootstrap.min.js"), PHP_INT_MAX)
        );
    }

    public function get_head_sections()
    {
        return array(
            '<meta name="description" content="YYabc oauth系统,统一登录" />',
            '<meta name="keywords" content="YYabc,oauth,统一登录,登录" />'
        );
    }

    public function get_title()
    {
        return "YYabc oauth";
    }
} 