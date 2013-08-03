<?php 
	$data['sort']['sort'] = isset($data['sort']['sort']) ? $data['sort']['sort'] : '';
	$data['sort']['direction'] = isset($data['sort']['direction']) ? $data['sort']['direction'] : '';
	$status = array(
		'1' => 'Success',
		'0' => 'Failed'
	);
?>
<div class="tbl-result">
	<div class="main-input">
		<?php echo $this->Session->flash(); ?>
		<div class="main-input-block" style="border-radius: 7px;">
			<div class="main-input-content">
				<table class="main-manager-table">
					<tr>
						<td class="main-header">
							<div class="main-header-content">
								<div class="pull-left margin10">
									<p class="h1"><?php echo __('Results Manager') ?></p>					
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="main-content-bg">
							<div class="main-content">
								<div class="pull-left margin10 bold-link">
									<?php echo $this->Paginator->counter(
									    'Page {:page} of {:pages}, showing {:current} records out of
									     {:count} total'
									); ?>
								</div>
								<div class="pull-left margin10">
				
								</div>
								<div class="pull-right margin10">
									<?php echo $this->Paginator->first('<<', array(
										'class' => 'btn page-number',
										'tag' => 'span'
									)); ?>	
									<?php echo $this->Paginator->prev(__('<'), array(
										'class' => 'btn',
										'tag' => false
									), null, array(
										'class' => 'prev disabled btn',
										
									)); ?>	
									<?php echo $this->Paginator->numbers(array(
										'first' => 2,
										'last' => 2,
										'class' => 'btn page-number',
										'currentClass' => 'disabled',
										'currentTag' => 'span',
										'tag' => 'span',
										'separator' => ' '
									)); ?>
									<?php echo $this->Paginator->next(__('>'), array(
										'class' => 'btn',
										'tag' => false
									), null, array(
										'class' => 'next disabled btn',
										
									)); ?>
									<?php echo $this->Paginator->last('>>', array(
										'class' => 'btn page-number',
										'tag' => 'span'
									)); ?>							
								</div>
								<table class="manager-table"  style="text-align: left;">
									<thead class="text-color1">
										<th style="width: 20px; text-align: center;">
											<input type="checkbox" class="check-all" onclick="selectAll()" />
										</th>
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'id') ? 'active' : '' ?>">
											<?php if(($data['sort']['sort'] == 'id') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'id') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('id', __('ID')) ?>
										</th>
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'created') ? 'active' : '' ?>">
											<?php if(($data['sort']['sort'] == 'created') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'created') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('created', __('Date')) ?>
										</th>
										
										<th>
											<?php echo __('Time in date') ?>
										</th>
										
										<th>
											<?php echo __('Progress') ?>
										</th>
										<th>
											<?php echo __('Mail status') ?>
										</th>
										<th>
											<?php echo __('Action') ?>
										</th>
									</thead>
									<tbody>
										<?php if(isset($data['Search'])): ?>
											<form method="post" action="<?php echo $this->Html->url(array('controller' => 'results', 'action' => 'download')) ?>" id="product-action">
											<?php echo $this->Form->input('action-type', array(
												'type' => 'hidden',
												'value' => 'delete',
												'id' => 'action-type'
											)) ?>
											<?php foreach($data['Search'] as $result): ?>
											<tr>
												<td style="text-align: center;">
													<input type="checkbox" class="product-select" name="data[Search][id][]" value="<?php echo $result['Search']['id'] ?>" />
												</td>
												<td><?php echo $result['Search']['id'] ?></td>
												<td><?php echo date('Y/m/d', strtotime($result['Search']['created']))?></td>
												<td>
													<?php echo ($result['Search']['time_number']) ?>
												</td>
												<td>
												<?php 	//if(isset($result['Search']['is_success'])){
														//	echo $status[$result['Search']['is_success']];
														//} 
												?>
												</td>
												<td>
												<?php 	//if(isset($result['Search']['is_sendmail'])){
														//	echo $status[$result['Search']['is_success']];
														//} 
												?>
												</td>
												<td>
													<?php echo $this->Html->link(__('Download'), array(
														'controller' => 'results',
														'action' => 'download',
														'?' => array(
															'date' => $result['Search']['created'],
															'times' => $result['Search']['time_number']
														)
													)) ?>
													|
													<?php echo $this->Html->link(__('Resend Email'), array(
														'controller' => 'results',
														'action' => 'sendmail',
													)) ?>
												</td>
											</tr>								
											<?php endforeach; ?>
											</form>
										<?php endif ?>
									</tbody>
								</table>
							</div>
						</td>	
					</tr>
				</table>
			</div>
		</div>
	</div>
	</form>
</div>

<div class="main">

</div>
<?php echo $this->Html->scriptStart(array('inline' =>false)) ?>
//<script>
$(document).ready(function(){
	$('.manager-table th.sort-enable, .btn.page-number').click(function(){
		var url = $(this).find('a').attr('href');
		window.location.href = url;
	});
});
function selectAll(){
	if($('.check-all').is(':checked')){
		$('.manager-table tbody input').each(function(){
			if(!$(this).is(':checked'))
				$(this).click();
		});			
	}

	else {
		$('.manager-table tbody input').each(function(){
			if($(this).is(':checked'))
				$(this).click();
		});			
	}
}
function del(){
	message = '<?php echo __('Are you sure?') ?>';
	if(confirm(message)){
		$('#action-type').val('delete');
		$('#product-action').submit();
	}
		
}
function deactive(){
	$('#action-type').val('deactive');
	$('#product-action').submit();
}
function active(){
	$('#action-type').val('active');
	$('#product-action').submit();
}
<?php echo $this->Html->scriptEnd() ?>