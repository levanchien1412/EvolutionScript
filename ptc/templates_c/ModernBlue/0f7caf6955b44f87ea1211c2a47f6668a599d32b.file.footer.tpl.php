<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 03:07:50
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127139489153bf15be220864-40369910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7caf6955b44f87ea1211c2a47f6668a599d32b' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/footer.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127139489153bf15be220864-40369910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
    'forum_active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf15be252309_59719864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf15be252309_59719864')) {function content_53bf15be252309_59719864($_smarty_tpl) {?><?php if ($_SERVER['SCRIPT_NAME']=='/forum.php'){?></div><?php }?>

        <div class="processorlist">
        </div>
	</div>
   </div> 
	<div id="footer">
    <div style=" width:1040px; margin:0 auto; ">
        <div class="links">
        <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['home'];?>
</a>
        <a href="index.php?view=faq"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['faq'];?>
</a>
        <a href="index.php?view=contact"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</a>
        <a href="index.php?view=terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_proof']=='yes'){?>
        <a href="index.php?view=payment_proof"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentproof'];?>
</a>
        <?php }?>
        <a href="index.php?view=news"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['news'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['forum_active']->value=='yes'){?>
        <a href="forum.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
</a>
        <?php }?>
        <a style="float:left;" href="http://www.persianscript.ir/">انتشار در پرشین اسکریپت</a>
        </div>
        <div class="clear"></div>
        <div style="float: right;padding: 7px 10px;width: 600px;text-align: right;">
        کلیه حقوق برای وبسایت رسمی هیت باکس محفوظ است و هرگونه کپی برداری پیگرد قانونی خواهد داشت.
        </div>
    </div>
</div>
</div>


</body>
</html>    
    
<?php }} ?>