<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 19:41:04
  from 'D:\xpp\Nowy folder\htdocs\Projekt_Maciej_Dolata_komis\app\views\CarEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef39030e0cdc2_02572003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8705c8900b9f2bec3b6c446164d1ee49d37b47' => 
    array (
      0 => 'D:\\xpp\\Nowy folder\\htdocs\\Projekt_Maciej_Dolata_komis\\app\\views\\CarEdit.tpl',
      1 => 1593020450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef39030e0cdc2_02572003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18507900665ef39030db1ef5_21715704', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_18507900665ef39030db1ef5_21715704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_18507900665ef39030db1ef5_21715704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carSave/<?php echo $_smarty_tpl->tpl_vars['companyId']->value;?>
" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane samochodu</legend>
		<div class="pure-control-group">
            <label for="marka">marka</label>
            <input id="marka" type="text" placeholder="marka" name="marka" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->marka;?>
">
        </div>
		<div class="pure-control-group">
            <label for="model">model</label>
            <input id="model" type="text" placeholder="model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
        </div>
		<div class="pure-control-group">
            <label for="rejstracja">rejstracja</label>
            <input id="rejstracja" type="text" placeholder="rejstracja" name="rejstracja" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rejstracja;?>
">
        </div>
        	<div class="pure-control-group">
            <label for="pojemnosc">pojemność</label>
            <input id="pojemnosc" type="text" placeholder="pojemnosc" name="pojemnosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pojemnosc;?>
">
        </div>
        	<div class="pure-control-group">
            <label for="moc">moc</label>
            <input id="moc" type="text" placeholder="moc" name="moc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->moc;?>
">
        </div>
        	<div class="pure-control-group">
            <label for="bezwypadkowy">bezwypadkowy</label>
            <input id="bezwypadkowy" type="checkbox" name="bezwypadkowy" value="1" <?php if ($_smarty_tpl->tpl_vars['form']->value->bezwypadkowy) {?>checked="checked"<?php }?>>
        </div>
        	<div class="pure-control-group">
            <label for="rodzajpaliwa">rodzaj paliwa</label>
            <input id="rodzajpaliwa" type="text" placeholder="rodzajpaliwa" name="rodzajpaliwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rodzajpaliwa;?>
">
        </div>
        	<div class="pure-control-group">
            <label for="opis">opis</label>
            <input id="opis" type="text" placeholder="opis" name="opis" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opis;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carList/<?php echo $_smarty_tpl->tpl_vars['companyId']->value;?>
">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
    <input type="hidden" name="idfirma" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idfirma;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
