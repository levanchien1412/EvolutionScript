<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 10:33:27
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/login_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157191571653bf7e2fceca14-28203077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb69e218627d1039fa2cb82aaa877920b5e435d' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/login_history.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157191571653bf7e2fceca14-28203077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf7e2fd7f177_39768182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf7e2fd7f177_39768182')) {function content_53bf7e2fd7f177_39768182($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginhistory'];?>
</div>

<div class="widget-content">
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td width="20" align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('status','&nbsp;');?>
</td>
        <td width="300"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('agent',$_smarty_tpl->tpl_vars['lang']->value['txt']['user_agent']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('ip',$_smarty_tpl->tpl_vars['lang']->value['txt']['ip_address']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('date',$_smarty_tpl->tpl_vars['lang']->value['txt']['date']);?>
</td>
    </tr>
 
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td align="center"><img src="./images/<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Successful'){?>accept<?php }else{ ?>fail<?php }?>.png" /></td>
                <td>
                    <div <?php if ($_smarty_tpl->tpl_vars['item']->value['status']!='Successful'){?>class="fail_td"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['agent']==''){?>-<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['agent'];?>
<?php }?>
                    </div>
                </td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['ip'];?>
</td>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%b %e %Y %r");?>
</td>
            </tr>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="4" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_logs'];?>
</td>
        </tr>
        <?php }?>
</table>
<div style="margin-top:10px">
    <input type="button" value="&larr; <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['prev_page'];?>
" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==1||$_smarty_tpl->tpl_vars['paginator']->value->getPage()==1){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->prevpage();?>
';"<?php }?> />

    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['next_page'];?>
 &rarr;" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==0||$_smarty_tpl->tpl_vars['paginator']->value->totalPages()==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->nextpage();?>
';"<?php }?> />
    	<?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()>1){?>
        <div style="float:right">
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['jump_page'];?>
: 
        <select name="p" style="min-width:inherit;" id="pagid" onchange="gotopage(this.value)">
           <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['paginator']->value->totalPages()+1 - (1) : 1-($_smarty_tpl->tpl_vars['paginator']->value->totalPages())+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>
                	<option selected value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->gotopage($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->gotopage($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }?>
            <?php }} ?>
        </select> 
        <script type="text/javascript">
			function gotopage(pageid){
				location.href=pageid;
			}
		</script>
        </div> 
        <div class="clear"></div>
        <?php }?>
    </div>
</div>
<?php }} ?>