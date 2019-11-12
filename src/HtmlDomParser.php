<?php

namespace AppZz\Helpers;

require __DIR__.DIRECTORY_SEPARATOR.'SimpleHtmlDom_1_8'.DIRECTORY_SEPARATOR.'simple_html_dom.php';

class HtmlDomParser {

    public static $version = '1_8';

	public static function file_get_html()
	{
		return call_user_func_array ('\SimpleHtmlDom_'.HtmlDomParser::$version.'\file_get_html', func_get_args());
	}

	public static function str_get_html()
	{
		return call_user_func_array ('\SimpleHtmlDom_'.HtmlDomParser::$version.'\str_get_html' , func_get_args());
	}
}
