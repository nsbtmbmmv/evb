<?=$this->load->view('tpl_front/header');?>
<div id="evb-header"><div><h1>E-Learning VB</h1><div class="clear"></div></div></div>
<div id="evb-body"><?=$this->load->view($tpl_body);?></div>
<div id="evb-footer">About James @ <?=date("Y")?></div>
<?=$this->load->view('tpl_front/footer');?>