<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {get_edu_worker} function plugin
 * Type:     function<br>
 * Name:     get_edu_worker<br>
 * Purpose:  print out a edu_worker list
 *
 * @author BlackAnimal <wangfei19 at baidu dot com >
 *
 * @param array                    $params   parameters start|end
 * @param Smarty_Internal_Template $smarty smarty object
 *
 * @return array | null
 */
function smarty_function_get_edu_worker($params, $smarty)
{
    $edu_workers = array();
    $start = (isset($params['start'])) ? $params['start'] : 0;
    $end = (isset($params['end'])) ? $params['end'] : $max;
	$result = array();
	$max = 1000;

	for($i=0; $i < $max; $i++){
		$rand = rand(11,19);
		$edu_workers[] = array('id'=>$rand*1000 + $i, 'name'=>"wangfei_{$i}");
	}

	for($i = $start; $i<=$end;$i++){
		$result[] = $edu_workers[$i];
	}

	
    $assign = (isset($params['assign'])) ? $params['assign'] : '';
	if(empty($assign)){
		print_r($result);
	}else{
	    $smarty->assign($assign, $result);
	}
}
