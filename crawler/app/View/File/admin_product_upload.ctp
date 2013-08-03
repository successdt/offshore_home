<div class="upload-wrapper">
	<?php if(isset($data['success']) && $data['success']): ?>
		<h5><?php echo __('Recently uploaded photo url') ?></h5>
		<input name="img_url" value="<?php echo $_SERVER["SERVER_NAME"] . $this->webroot . $data['path'] ?>" style="width: 400px; margin-left: 0px;" />
		<br />
		<br />
		<?php echo $this->Html->link(__('Upload more'), array('controller' => 'file', 'action' => 'productUpload'), array('class' => 'btn')) ?>
	<?php else: ?>
		<form action="<?php echo $this->Html->url( array('controller' => 'file', 'action' => 'productUpload')) ?>"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
		<button type="button" class="btn pull-left" onclick="chooseFile();"><?php echo __('Choose File') ?></button>
		<div style="height: 0px; overflow: hidden;">
			<?php echo $this->Form->input('file', array('type' => 'file', 'label' => false, 'id' => 'fileInput')) ?>
		</div>
		<?php echo $this->Form->end(array('label' => __('Upload'), 'class' => 'btn')) ?>	
	<?php endif; ?>				
</div>
<?php echo $this->Html->scriptStart(array('inline' =>false)) ?>
//<script>
function chooseFile() {
  $("#fileInput").click();
}
<?php echo $this->Html->scriptEnd() ?>