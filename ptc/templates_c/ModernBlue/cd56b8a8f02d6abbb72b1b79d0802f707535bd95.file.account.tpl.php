<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 01:11:49
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72424856553bf31d3197e27-22872461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd56b8a8f02d6abbb72b1b79d0802f707535bd95' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/account.tpl',
      1 => 1405197706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72424856553bf31d3197e27-22872461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf31d331b920_71128580',
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
    'unread_messages' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf31d331b920_71128580')) {function content_53bf31d331b920_71128580($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="PageTitle"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['account'];?>
</h1></div>
<div class="site_content">
<!-- Content -->
<?php if ($_GET['page']!='upgrade'){?>    
<div style="display:table; width:100%">
<div style="display:table-cell; width:210px">
<ul  class="member_sidebar">        
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['global'];?>
</div>
    	<ul>
            <li><a href="index.php?view=account&page=summary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['accsummary'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['message_system']=='yes'){?>
            <li><a href="index.php?view=account&page=messages"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['message_system'];?>
 (<?php if ($_smarty_tpl->tpl_vars['unread_messages']->value==0){?>0<?php }else{ ?><strong><?php echo $_smarty_tpl->tpl_vars['unread_messages']->value;?>
</strong><?php }?>)</a></li>
            <?php }?>
            <li><a href="index.php?view=account&page=addfunds"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['addfunds'];?>
</a></li>
            <li><a href="index.php?view=account&page=upgrade"><?php if ($_smarty_tpl->tpl_vars['user_info']->value['type']==1){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['upgaccount'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['extmembership'];?>
<?php }?></a></li>
            <li><a href="index.php?view=account&page=withdraw"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdraw'];?>
</a></li>
            <li><a href="index.php?view=account&page=banners"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['banners'];?>
</a></li>
		</ul>
	</li>    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['settings'];?>
</div>
			<ul>
                <li><a href="index.php?view=account&page=settings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['personal'];?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_active']=='yes'){?>
                <li><a href="index.php?view=account&page=forum_settings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum_settings'];?>
</a></li>
                <?php }?>
                <li><a href="index.php?view=account&page=manageads"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advertiser_panel'];?>
</a></li>
            </ul>
    </li>
    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['referrals'];?>
</div>
        <ul>
            <li><a href="index.php?view=account&page=referrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['directrefs'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals']=='yes'){?>
            <li><a href="index.php?view=account&page=rented_referrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentedrefs'];?>
</a></li>
            <li><a href="index.php?view=account&page=rentreferrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentrefs'];?>
</a></li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['buy_referrals']=='yes'){?>
            <li><a href="index.php?view=account&page=buyreferrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buyrefs'];?>
</a></li>
            <?php }?>
        </ul>
    </li>
    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['logs'];?>
</div>
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['ptsu_available']=='yes'){?>
             <li><a href="index.php?view=account&page=ptsu_history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsuhistory'];?>
</a></li>
            <?php }?>
            <li><a href="index.php?view=account&page=history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['orderhistory'];?>
</a></li>
            <li><a href="index.php?view=account&page=deposit_history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['deposithistory'];?>
</a></li>
            <li><a href="index.php?view=account&page=withdraw_history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdrawhistory'];?>
</a></li>
            <li><a href="index.php?view=account&page=login"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginhistory'];?>
</a></li>
        </ul>
    </li>
    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['other'];?>
</div>
        <ul>
            <li><a href="index.php?view=account&page=profitcalculator"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['profit_calculator'];?>
</a></li>
        </ul>
    </li>        
</ul>    
</div>
<div style="display:table-cell; padding-right:20px">
<?php }?>        
        	<!-- Content -->
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['file_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- End Content -->
<?php if ($_GET['page']!='upgrade'){?>  
</div>
</div>
<?php }?>
<div class="clear"></div>


</div>
<!-- End Content -->

<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>