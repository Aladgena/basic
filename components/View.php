<?php 
namespace app\components;

class View extends \yii\web\View
{
	function render($view, $params =[], $context = null)
	{
		return str_replace('garlic', 'g#####c', parent::render($view, $params, $context));
	}
}


?>