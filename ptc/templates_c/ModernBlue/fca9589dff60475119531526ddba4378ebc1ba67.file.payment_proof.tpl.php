<?php /* Smarty version Smarty-3.1.13, created on 2014-07-22 04:49:39
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/payment_proof.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76873584053bf7895d69419-87670676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca9589dff60475119531526ddba4378ebc1ba67' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/payment_proof.tpl',
      1 => 1405456444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76873584053bf7895d69419-87670676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf7895e932f4_01603389',
  'variables' => 
  array (
    'lang' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf7895e932f4_01603389')) {function content_53bf7895e932f4_01603389($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->

<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentproof'];?>
</div>
<div class="site_content">
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('date',$_smarty_tpl->tpl_vars['lang']->value['txt']['date']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('user_id',$_smarty_tpl->tpl_vars['lang']->value['txt']['username']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('method',$_smarty_tpl->tpl_vars['lang']->value['txt']['method']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('amount',$_smarty_tpl->tpl_vars['lang']->value['txt']['amount']);?>
</td>
    </tr>
    

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%e %B %Y %r");?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
</td>
                <td align="center"><img src="images/proofs/<?php echo $_smarty_tpl->tpl_vars['item']->value['method'];?>
.gif" /></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
            </tr>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_records'];?>
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
<!-- End Content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>