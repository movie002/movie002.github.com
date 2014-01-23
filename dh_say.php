<?php
/*****************************************************
 函数名称：dh_say_ajax
 函数作用：动态加载随机名人名言
 函数作者：DH
 作者地址：http://dhblog.org
******************************************************/

$dh_say_content=array(
	'当你的才华还撑不起你的野心时，那你就应该静下心来学习！',
	'民主制度的特点是公开性，专制制度的特点是神秘性。',
	'快乐，不在繁华热闹中，而在内心宁静里。',
	'穷则独善其身，富则妻妾成群。',
	'政治人物都是为了国家，不同的是，有人为国，有人为家。',
	'自己选择的路跪着也要走完。',
	'自己不勇敢就没人替你坚强。',
	'宁愿跑起来被绊倒无数次，也不愿规规矩矩走一辈子。',
	'久利之事勿为，众争之地勿往。',
	'食能止饥，饮能止渴，畏能止祸，足能止贪。',
	'好便宜不可与共财，狐疑者不可与共事。',
	'快乐与贫富无关，与内心相连。',
	'忍辱负重，顺其自然。',
	'贱不谋贵，外不谋内，疏不谋亲。',
	'君子与小人斗，小人必胜。',
	'有些政治体制下，承认错误能得分。有些政治体制下，承认错误就下台。',
	'我们可以爱一个人爱到不要命，但是我们绝不能爱一个人爱到不要脸。',
	'人生最大的悲哀，莫过于青春已不再，青春痘还在！',
);

echo dh_say();

//print_r($dh_say_content);

function dh_say()
{	
	global $dh_say_content;
	//print_r($dh_say_content);
	$thiscontent = $dh_say_content[ mt_rand(0, count($dh_say_content) - 1) ];
	$ret = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body leftmargin="0" topmargin="0" style="float:right;background-color:transparent;font-size:12px">'.$thiscontent.'</body></html>';
	return $ret;
}
?>