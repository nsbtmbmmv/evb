<?=$this->load->view('tpl_admin/header');?>
<div id="admin-header"><div><h1>E-Learning VB</h1><div class="clear"></div></div></div>
<div id="admin-body"><?=$this->load->view($tpl_body);?></div>
<div id="admin-footer">About James @ <?=date("Y")?></div>
<?=$this->load->view('tpl_admin/footer');?>