<?php
/**
 *
 * @ EvolutionScript FULL DECODED & NULLED
 *
 * @ Version  : 5.0
 * @ Author   : MTIMER
 * @ Release on : 2014-03-10
 * @ Website  : http://www.mtimer.net
 *
 **/

if (!defined("EvolutionScript")) {
	exit("Hacking attempt...");
}

include SMARTYLOADER;
include INCLUDES . "class_pagination.php";
$allowed = array("agent", "ip", "status", "date");
$paginator = new Pagination("login_history", "user_id=" . $user_info['id']);
$paginator->setMaxResult($settings['max_result_page']);
$paginator->setOrders("date", "DESC");
$paginator->setPage($input->gc['p']);
$paginator->allowedfield($allowed);
$paginator->setNewOrders($input->gc['orderby'], $input->gc['sortby']);
$paginator->setLink("./?view=account&page=login&");
$q = $paginator->getQuery();

while ($list = $db->fetch_array($q)) {
	$items[] = $list;
}

$smarty->assign("paginator", $paginator);
$smarty->assign("thelist", $items);
unset($items);
$smarty->assign("file_name", "login_history.tpl");
$smarty->display("account.tpl");
$db->close();
exit();
?>