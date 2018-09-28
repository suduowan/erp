<?php
use yii\helpers\html;
?>
<!-- 
	当参数来自于最终用户时，参数中可能隐含的恶意 JavaScript 
	代码会导致 跨站脚本（XSS）攻击。 -->
<?=Html::encode($message) ?>
