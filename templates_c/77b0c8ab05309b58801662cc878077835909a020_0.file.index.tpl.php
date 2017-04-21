<?php
/* Smarty version 3.1.30, created on 2017-04-21 23:31:21
  from "C:\xampp\htdocs\my_web\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa7a29ea3362_80273288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b0c8ab05309b58801662cc878077835909a020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_web\\templates\\index.tpl',
      1 => 1492810281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa7a29ea3362_80273288 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

    <header>
        <h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
    </header>

    <div class="separa-20"></div>

    <section>
        <div class="container">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'curr_id', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['curr_id']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['curr_id']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>

    </section>


</body>
<?php }
}
