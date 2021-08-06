<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if ( !defined('AREA') ) { die('Access denied'); }

function fn_text_option_variant_update_product_option_post(&$option_data, &$option_id, &$deleted_variants, &$lang_code)
{
	$arg_nums = func_num_args();
	$args = func_get_args();

	for($i=0; $i<$arg_nums; $i++) {
		fn_print_r($args[$i]);
		fn_print_r("*********************************************");
	}
	die();
}

?>
