<?php echo $this->Form->create('Config', array(
	'inputDefaults' => array(
		'label' => false
	),
	'type' => 'file'
)); ?>
<div class="admin-config pull-left">
	<?php echo $this->Session->flash(); ?>
	<div class="main-input-block">
		<div class="main-input-title">
			<?php echo __('General') ?>
			<span class="pull-right" style="margin-top: -5px;">
			</span>
		</div>
		<div class="main-input-content">
			<table style="width: 100%; margin: 5px 0px 5px 5px;">
				<tr>
					<td><?php echo __('CSV File') ?></td>
					<td>
						<?php echo $this->Form->input('old_file', array(
							'disabled' => 'disabled',
							'value' => '',
							'id' => 'old-file',
							'style' => 'min-width: 300px; margin-top: 10px;'
						)) ?>
					</td>
					<td>
						<button type="button" class="btn pull-left" onclick="chooseFile();">
							<?php echo __('Choose File') ?>
						</button>
						<div style="height: 0px; width: 0px; overflow: hidden;">
							<?php echo $this->Form->input('file', array(
								'type' => 'file',
								'label' => false,
								'id' => 'fileInput'
							)) ?>
						</div>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Google') ?></td>
					<td>
						<?php echo $this->Form->input('google', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['google']) && $data['Config']['google']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Yahoo') ?></td>
					<td>
						<?php echo $this->Form->input('yahoo', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['yahoo']) && $data['Config']['yahoo']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('PC') ?></td>
					<td>
						<?php echo $this->Form->input('pc', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['pc']) && $data['Config']['pc']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Smartphone') ?></td>
					<td>
						<?php echo $this->Form->input('smartphone', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['smartphone']) && $data['Config']['smartphone']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Adwords(SEM)') ?></td>
					<td>
						<?php echo $this->Form->input('adwords', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['adwords']) && $data['Config']['adwords']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Normal') ?></td>
					<td>
						<?php echo $this->Form->input('normal', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['normal']) && $data['Config']['normal']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Stop auto search?') ?></td>
					<td>
						<?php echo $this->Form->input('stop_auto', array(
							'type' => 'checkbox',
							'style' => 'width:auto;',
							'checked' => (isset($data['Config']['stop_auto']) && $data['Config']['stop_auto']) ? 'checked' : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Number Running Time') ?></td>
					<td>
						<?php echo $this->Form->input('running_time', array(
							'type' => 'select',
							'options' => array(1 => '1', 2 => '2'),
							'label' => false,
							'empty' => false,
							'value' => (isset($data['Config']['running_time'])) ? $data['Config']['running_time'] : 1
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Send email to') ?></td>
					<td>
						<?php echo $this->Form->input('email', array(
							'value' => (isset($data['Config']['email'])) ? $data['Config']['email'] : ''
						)) ?>
					</td>
				</tr>
				<tr>
					<td><?php echo __('Schedule') ?></td>
					<td>
						<div class="pull-left">
							<?php echo $this->Form->input('schedule', array(
								'type' => 'select',
								'options' => array(
									'daily'	 	=> 'daily',
									'weekly' 	=> 'weekly',
									'monthly' 	=> 'monthly',
									'yearly' 	=> 'yearly'
								),
								'label' => false,
								'empty' => __('Choose Schedule'),
								'value' => (isset($data['Config']['schedule'])) ? $data['Config']['schedule'] : ''
							)) ?>						
						</div>

						<div class="input-day pull-left schedule-select no-display" style="margin-left: 15px;">
							<?php echo $this->Form->input('week_day', array(
								'type' => 'select',
								'options' => array(
						 			'sunday' => 'Sunday',
								    'monday' => 'Monday',
								    'tuesday' => 'Tuesday',
								    'wednesday' => 'Wednesday',
								    'thursday' => 'Thursday',
								    'friday' => 'Friday',
								    'saturday' => 'Saturday',
								),
								'label' => false,
								'empty' => false,
								'div' => false,
								'value' => (isset($data['Config']['week_day'])) ? $data['Config']['week_day'] : 'sunday'
							)) ?>
						</div>
						<div class="input-date pull-left schedule-select no-display" style="margin-left: 15px;">
							<?php echo __('Date') ?> :
							<?php echo $this->Form->input('date', array(
								'type' => 'select',
								'options' => array_combine(range(1, 31), range(1, 31)),
								'label' => false,
								'empty' => false,
								'div' => false,
								'value' => (isset($data['Config']['date'])) ? $data['Config']['date'] : 1
							)) ?>
						</div>
						<div class="input-month pull-left schedule-select no-display" style="margin-left: 15px;">
							<?php echo __('Month') ?> :
							<?php echo $this->Form->input('month', array(
								'type' => 'select',
								'options' => array_combine(range(1, 12), range(1, 12)),
								'label' => false,
								'empty' => false,
								'div' => false,
								'value' => (isset($data['Config']['month'])) ? $data['Config']['month'] : 1
							)) ?>
						</div>
					</td>
					<td>
						
						
						
					</td>
				</tr>
				<tr>
					<td><?php echo __('Attached Format') ?></td>
					<td>
						<?php echo $this->Form->input('attached_type', array(
							'type' => 'radio',
							'options' => array('csv' => 'csv', 'xls' => 'xls'),
							'legend' => false,
							'div' => false,
							'style' => 'width:auto; margin:10px',
							'required' => 'required',
							'value' => (isset($data['Config']['attached_type'])) ? $data['Config']['attached_type'] : 'csv'
						)) ?>
					</td>
					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Save" class="btn btn-success" style="width: auto;" /></td>
				</tr>
			</table>
		</div>
	</div>

</div>
<?php echo $this->Html->scriptStart(array('inline' =>false)) ?>
//<script>
function chooseFile() {
	$("#fileInput").click();
}
function showOption(){
	var val = $("#ConfigSchedule").val();
	
	$('.schedule-select').hide();
	switch(val) {
		case 'daily' :
			break;
		case 'weekly' :
			$('.input-day').show();
			break;
		case 'monthly' :
			$('.input-date').show();
			break;
		case 'yearly' :
			$('.input-date, .input-month').show();
			break;
	}	
}
$(document).ready(function(){
	showOption();
	$("#fileInput").change(function(){
		$('#old-file').val($(this).val());
	});
	$("#ConfigSchedule").change(function(){
		showOption();
	});
});
<?php echo $this->Html->scriptEnd() ?>
	