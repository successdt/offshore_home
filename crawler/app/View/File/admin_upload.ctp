<div class="upload-wrapper">
	<form action="<?php echo $this->Html->url( array('?' => array('path' => $data['path']))) ?>"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
		<button type="button" class="btn pull-left" onclick="chooseFile();"><?php echo __('Choose File') ?></button>
		<div style="height: 0px; overflow: hidden;">
			<?php echo $this->Form->input('file', array('type' => 'file', 'label' => false, 'id' => 'fileInput')) ?>
		</div>
	<?php echo $this->Form->end(array('label' => __('Upload'), 'class' => 'btn')) ?>
</div>
<?php echo $this->Html->scriptStart(array('inline' =>false)) ?>
//<script>
function chooseFile() {
  $("#fileInput").click();
}
<?php if($data['success']): ?>
	parent.location.reload();
<?php endif ?>
<?php echo $this->Html->scriptEnd() ?>