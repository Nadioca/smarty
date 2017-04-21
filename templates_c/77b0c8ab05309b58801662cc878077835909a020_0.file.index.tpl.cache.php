<?php
/* Smarty version 3.1.30, created on 2017-04-21 23:07:41
  from "C:\xampp\htdocs\my_web\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa749daf9014_10765490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b0c8ab05309b58801662cc878077835909a020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_web\\templates\\index.tpl',
      1 => 1492808858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa749daf9014_10765490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '178459825858fa749dac35a1_64557217';
?>

<body>

    <header>
        <h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
    </header>

    culo

    <section>

        <?php echo $_smarty_tpl->tpl_vars['names']->value[0];?>
;

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'curr_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
        id: <?php echo $_smarty_tpl->tpl_vars['curr_id']->value;?>
<br />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </section>


</body>
<?php }
}
