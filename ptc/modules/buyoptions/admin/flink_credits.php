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

$credits = $db->fetchOne("SELECT month FROM flinks_price WHERE id=" . $order['item_id']);
addflinkcredits($order['user_id'], $credits);
?>