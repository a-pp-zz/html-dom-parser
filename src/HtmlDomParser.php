<?php

namespace AppZz\Helpers;

class HtmlDomParser {

    private static $_version;

    public static function load_version ($version)
    {
        HtmlDomParser::$_version = str_replace (array('.', ','), array('_', '_'), $version);
        require_once __DIR__.DIRECTORY_SEPARATOR.'SimpleHtmlDom_'.HtmlDomParser::$_version.DIRECTORY_SEPARATOR.'simple_html_dom.php';
    }

	public static function file_get_html()
	{
        if (empty(HtmlDomParser::$_version)) {
            HtmlDomParser::load_version ('1.8');
        }
        return call_user_func_array ('\SimpleHtmlDom_'.HtmlDomParser::$_version.'\file_get_html', func_get_args());
	}

	public static function str_get_html()
	{
        if (empty(HtmlDomParser::$_version)) {
            HtmlDomParser::load_version ('1.8');
        }
        return call_user_func_array ('\SimpleHtmlDom_'.HtmlDomParser::$_version.'\str_get_html' , func_get_args());
	}
}
