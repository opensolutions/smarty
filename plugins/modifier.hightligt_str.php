<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty highlight modifier plugin
 *
 * Type:     modifier
 * Name:     highlightStr
 * Purpose:  Highlighting case insensitive search results on the page. Supports cyrillic characters
 * How to use: You need to declare css-style for class .hightligt
 * 
 * smarty syntax
 * {$haystack|highlightStr:$needle:$haystack}
 * 
 * @author   enlare (linn.coffeein@gmail.com)
 * @param string $haystack
 * @param string $needle
 * @return string
 */

function smarty_modifier_hightligt_str($haystack, $needle)
{
   return  preg_replace("/$needle/usi","<span class=\"hightligt\">$0</span>", $haystack);
}

?>
