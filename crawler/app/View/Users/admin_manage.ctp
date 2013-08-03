<?php 
	$data['sort']['sort'] = isset($data['sort']['sort']) ? $data['sort']['sort'] : '';
	$data['sort']['direction'] = isset($data['sort']['direction']) ? $data['sort']['direction'] : '';
?>

<div class="new-product">
	<div class="main-input">
		<?php echo $this->Session->flash(); ?>
		<div class="main-input-block" style="border-radius: 7px;">
			<div class="main-input-content">
				<table class="main-manager-table">
					<tr>
						<td class="main-header">
							<div class="main-header-content">
								<div class="pull-left margin10">
									<p class="h1"><?php echo __('Users Manager') ?></p>					
			
								</div>
								<div class="pull-right margin10">
									<ul style="list-style-type: none;">
										<li class="dropdown pull-left" style="margin: 0px 10px;">
											<a href="#" class="dropdown-toggle btn" data-toggle="dropdown">
												<?php echo __('Choose Action') ?>
												<b class="caret"></b>
											</a>
											<ul class="dropdown-menu">
												<li>
													<a href="javascript:del()"><?php echo __('Delete') ?></a>
												</li>
												<li>
													<a href="javascript:deactive()"><?php echo __('Deactive') ?></a>
												</li>
												<li>
													<a href="javascript:active()"><?php echo __('Active') ?></a>
												</li>
											</ul>
											<?php echo $this->Html->link(__('New'), array(
												'controller' => 'users',
												'action' => 'manage'
											), array(
												'class' => 'btn'
											)) ?>
										</li>
			
									</ul>	
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
								<br />
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
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'username') ? 'active' : '' ?>">
											<?php if(($data['sort']['sort'] == 'username') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'username') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('username', __('Username')) ?>
										</th>
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'name') ? 'active' : '' ?>">
											<?php if(($data['sort']['sort'] == 'name') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'name') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('name', __('Name')) ?>
										</th>
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'created') ? 'active' : '' ?>">
											<?php if(($data['sort']['sort'] == 'created') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'created') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('created', __('Created at')) ?>
										</th>
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'role') ? 'active' : '' ?>">
											<?php if(($data['sort']['sort'] == 'role') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'role') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('role', __('Role')) ?>
										</th>										
										<th class="sort-enable <?php echo ($data['sort']['sort'] == 'is_actived') ? 'active' : '' ?>">
											
											<?php if(($data['sort']['sort'] == 'is_actived') && ($data['sort']['direction'] == 'desc')): ?>
												<i class="icon icon-arrow-down"></i>
											<?php endif; ?>
											<?php if(($data['sort']['sort'] == 'is_actived') && ($data['sort']['direction'] == 'asc')): ?>
												<i class="icon icon-arrow-up"></i>
											<?php endif; ?>
											<?php echo $this->Paginator->sort('is_actived', __('Status')) ?>
										</th>
										<th>
											<?php echo __('Action') ?>
										</th>
									</thead>
									<tbody>
										<?php if(isset($data['User'])): ?>
											<form method="post" action="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'delete')) ?>" id="product-action">
											<?php echo $this->Form->input('action-type', array(
												'type' => 'hidden',
												'value' => 'delete',
												'id' => 'action-type'
											)) ?>
											<?php foreach($data['User'] as $user): ?>
											<tr>
												<td style="text-align: center;">
													<input type="checkbox" class="product-select" name="data[User][id][]" value="<?php echo $user['User']['id'] ?>" />
												</td>
												<td><?php echo $user['User']['id'] ?></td>
												<td><?php echo $user['User']['username'] ?></td>
												<td><?php echo $user['User']['name'] ?></td>
												<td><?php echo date('Y/m/d', strtotime($user['User']['created']))?></td>
												<td><?php echo $user['User']['role'] ?></td>
												<td><?php echo $user['User']['is_active'] ? __('Active') : __('Deactive') ?></td>
												<td>
													<?php echo $this->Html->link(__('Edit'), array(
														'controller' => 'users',
														'action' => 'edit',
														$user['User']['id']
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
	
	<?php echo $this->Form->create('User', array(
		'inputDefaults' => array(
			'label' => false
		)
	)); ?>
		<div class="side-input">
			<div class="side-input-block">
				<div class="side-input-title">
					<?php echo  isset($data['edit']['User']) ? __('Edit User Information') : __('New User') ?>
				</div>
				<div class="side-input-content">
					<table>
						<tr>
							<td><?php echo __('UserName') ?></td>
							<td><?php echo $this->Form->input('username', array(
								'value' => isset($data['edit']['User']['username']) ? $data['edit']['User']['username'] : '',
								'disabled' => isset($data['edit']['User']['username']) ? 'disabled' : ''
							)) ?></td>
						</tr>
						<tr>
							<td><?php echo __('Password') ?></td>
							<td><?php echo $this->Form->input('password', array(
								'type' => 'password',
								'required' => isset($data['edit']['User']) ? '' : 'required'
							)) ?></td>
						</tr>
						<tr>
							<td><?php echo __('Name') ?></td>
							<td><?php echo $this->Form->input('name', array(
								'value' => isset($data['edit']['User']['name']) ? $data['edit']['User']['name'] : '',
							)) ?></td>
						</tr>
						<?php /*
						<tr>
							<td><?php echo __('Type') ?></td>
							<td>
								<?php echo $this->Form->select('role', array(
									'super_admin' => 'Super Admin',
									'admin' => 'Admin'
								), array(
									'empty' => false,
									'default' => isset($data['edit']['User']['role']) ? $data['edit']['User']['role'] : 'admin'
								)); ?>
							</td>
						</tr>
						*/?>
						<tr>
							<td><?php echo __('Active') ?></td>
							<td><?php
							if(isset($data['edit']['User']['is_active']) && (!$data['edit']['User']['is_active'])) {
								echo $this->Form->input('is_active', array(
									'type' => 'checkbox',
									'style' => 'width: auto'
								));							
							} else {
								echo $this->Form->input('is_active', array(
									'type' => 'checkbox',
									'style' => 'width: auto',
									'checked' => 'checked'
								));								
							}
							?>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="<?php echo __('Create') ?>" class="btn btn-success" style="width: auto;"/>
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