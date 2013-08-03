<div class="navbar navbar-fixed-top navigator">
	<div class="navbar-inner">
		<ul class="nav">
			<li>
				<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'dashboard')) ?>">
					<i class="icon-home"></i>
					Dashboard
				</a>
			</li>
			<?php if($this->Session->read('Auth.User.role') == 'super_admin'): ?>
			<li class="divider-vertical"></li>
			<li class="dropdown">
				<?php echo $this->Html->link(__('Users'), array(
					'controller' => 'users',
					'action' => 'manage'
				)) ?>
			</li>
			<?php endif; ?>
			<li class="divider-vertical"></li>
			<?php if($this->Session->read('Auth.User.role') == 'user'): ?>
			<li class="divider-vertical"></li>
			<li class="dropdown">
				<a href="<?php echo $this->Html->url(array('controller' => 'configs', 'action' => 'index')) ?>">Configure</a>
			</li>
			
			<li class="divider-vertical"></li>
			<li class="dropdown">
				<a href="<?php echo $this->Html->url(array('controller' => 'results', 'action' => 'index')) ?>">Results Management</a>
			</li>
			<?php endif; ?>

		</ul>
		<div class="pull-right margin10"></div>
	</div>
</div>