<?php if(!isset($data['list_file'])): ?>
	<div class="error">Invalid data</div>
<?php else: ?>
	<div class="new-product">
		<div class="main-input">
			<div class="main-input-block hidden-rename" style="display: none ;">
				<div class="main-input-title">
					<?php echo __('Rename') ?>
					<?php echo __('Move') ?>
					<span class="pull-right" style="margin-top: -5px;">
						<a href="javascript:saveRename()" class="btn">
							<i class="icon icon-ok"></i>
						</a>
						<a href="javascript:cancelRename()" class="btn btn-danger">
							<i class="icon icon-remove"></i>
						</a>												
					</span>
				</div>
				<div class="main-input-content">
					<table style="margin: 10px;">
						<tr>
							<td>
								<h6><?php echo __('File name') ?></h6>
							</td>
							<td>
								<input type="text" value="" id="rename-input" style="margin-top: 10px;"/>
								<input type="hidden" value="" id="old-name"/>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="main-input-block hidden-newdir" style="display: none ;">
				<form action="<?php echo $this->Html->url(array('controller' => 'file', 'action' => 'newdir')) ?>" method="post" id="new-dir">
				<div class="main-input-title">
					<?php echo __('New Folder') ?>
					<span class="pull-right" style="margin-top: -5px;">
						<button class="btn">
							<i class="icon icon-ok"></i>
						</button>
						<a href="javascript:cancelCreateDir()" class="btn btn-danger">
							<i class="icon icon-remove"></i>
						</a>												
					</span>
				</div>
				<div class="main-input-content">
						<table style="margin: 10px;">
							<tr>
								<td>
									<h6><?php echo __('Folder name') ?></h6>
								</td>
								<td>
									<input type="text" value="New Folder" name="new-dir-name" id="newdir-input" style="margin-top: 10px; width: 400px;"/>
									<input type="hidden" name="new-dir-path" value="<?php echo  $data['current_path']?>" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div class="main-input-block hidden-move" style="display: none ;">
				<div class="main-input-title">
					<?php echo __('Move') ?>
					<span class="pull-right" style="margin-top: -5px;">
						<a href="javascript:saveMove()" class="btn">
							<i class="icon icon-ok"></i>
						</a>
						<a href="javascript:cancelMove()" class="btn btn-danger">
							<i class="icon icon-remove"></i>
						</a>												
					</span>
				</div>
				<div class="main-input-content">
					<form action="<?php echo $this->Html->url(array('controller' => 'file', 'action' => 'move')) ?>" method="post" id="move-file">
						
						<ul class="category-list-input">
							<li>
								<input type="radio" name="move-file-path" value="" checked="checked"/> Root
								<ul class="category-list-input"><?php echo $data['dir_select']; ?></ul>
							</li>
						</ul>
						<input type="hidden" value="" name="list-move-file" id="move-input"/>
					</form>
				</div>
			</div>
			<div class="main-input-block hidden-upload" style="display: none ;">
				<div class="main-input-title">
					<?php echo __('Upload') ?>
					<span class="pull-right" style="margin-top: -5px;">
						<a href="javascript:cancelUpload()" class="btn btn-danger">
							<i class="icon icon-remove"></i>
						</a>												
					</span>
				</div>
				<div class="main-input-content">
					<iframe src="<?php echo $this->Html->url(array('controller' => 'file', 'action' => 'upload', '?' => array('path' => $data['current_path']))) ?>"></iframe>
				</div>
			</div>			
			<div class="main-input-block hidden-copy" style="display: none ;">
				<div class="main-input-title">
					<?php echo __('Copy') ?>
					<span class="pull-right" style="margin-top: -5px;">
						<a href="javascript:saveCopy()" class="btn">
							<i class="icon icon-ok"></i>
						</a>
						<a href="javascript:cancelCopy()" class="btn btn-danger">
							<i class="icon icon-remove"></i>
						</a>												
					</span>
				</div>
				<div class="main-input-content">
					<form action="<?php echo $this->Html->url(array('controller' => 'file', 'action' => 'copy')) ?>" method="post" id="copy-file">
						
						<ul class="category-list-input">
							<li>
								<input type="radio" name="move-file-path" value="" checked="checked"/> Root
								<ul class="category-list-input"><?php echo $data['dir_select']; ?></ul>
							</li>
						</ul>
						<input type="hidden" value="" name="list-copy-file" id="copy-input"/>
					</form>
				</div>
			</div>						
			<div class="main-input-block">
				<div class="main-input-title">
					<span><?php echo $data['current_name'] ?></span>
					<span class="pull-right" style="margin-top: -5px;">
						<?php echo $this->Html->link('...', array(
							'controller' => 'file',
							'action' => 'view',
							'?' => array(
								'path' => $data['parent_path']
							)), array(
								'class' => 'btn'
							)
						) ?>
						<a href="javascript:upload()" class="btn">
							<?php echo __('Upload') ?>
						</a>
						<a href="javascript:newdir()" class="btn">
							<?php echo __('New folder') ?>
						</a>
						<a href="javascript:rename()" class="btn">
							<?php echo __('Rename') ?>
						</a>
						<a href="javascript:move()" class="btn">
							<?php echo __('Move') ?>
						</a>
						<a href="javascript:copy()" class="btn">
							<?php echo __('Copy') ?>
						</a>
						<a href="javascript:deleteFiles()" class="btn btn-danger">
							<?php echo __('Delete') ?>
						</a>
	
					</span>
				</div>
				<div class="main-input-content" >
					<div style="min-height: 500px; background-color: #FFF; margin: 10px; overflow: auto;">
						<table class="manager-table file-man" style="text-align: left;">
							<thead class="text-color1">
								<th style="width: 20px;"><input type="checkbox" class="check-all" value="select_all" onclick="selectAll()"/></th>
								<th><?php echo __('Name') ?></th>
								<th><?php echo __('Permissions') ?></th>
								<th><?php echo __('Size') ?></th>
								<th><?php echo __('Modified') ?></th>
								<th><?php echo __('Type') ?></th>
							</thead>
							<tbody >
								<?php foreach($data['list_file']['dir'] as $dir): ?>
								<?php $url =  $this->Html->url(array(
									'controller' => 'file',
									'action' => 'view',
									'?' => array(
										'path' => $dir['path']
									))
								) ?>								
								<tr style="cursor: pointer;">
									<td class="cb"><input type="checkbox" value="<?php echo $dir['path'] ?>"/></td>
									<td class="file-man-dir">
										<a href="<?php echo $url ?>">
											<i class="icon icon-folder-open"></i>
											<?php echo $dir['name'] ?>											
										</a>
									</td>
									<td><?php echo $dir['permissions'] ?></td>
									<td><?php echo $dir['size'] ?>KB</td>
									<td><?php echo $dir['last_modified']  ?></td>
									<td>folder</td>
								</tr>
								<?php endforeach; ?>
								<?php foreach($data['list_file']['file'] as $file): ?>
								<?php $url = $this->webroot . 'img/' . $file['path'] ?>
								<tr style="cursor: pointer;">
									<td class="cb"><input type="checkbox"  value="<?php echo $file['path'] ?>"/></td>
									<td>
										<a href="javascript:preview('<?php echo $url ?>')">
											<i class="icon icon-file"></i>
											<?php echo $file['name'] ?>
										</a>
									</td>
									<td><?php echo $file['permissions'] ?></td>
									<td><?php echo $file['size'] ?>KB</td>
									<td><?php echo $file['last_modified']  ?></td>
									<td><?php echo $file['type']  ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="side-input">
			<div class="side-input-block">
				<div class="side-input-title">
					<?php echo __('Folder Tree') ?>
				</div>
				<div class="side-input-content">
					<div style="max-height: 300px; overflow: auto; background-color: #FFF;">
						<ul class="category-list-input">
							<?php echo $data['dir_map']; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="side-input-block">
				<div class="side-input-title">
					<?php echo __('Preview') ?>
				</div>
				<div class="side-input-content">
					<input type="text" value="" style="width: 96%;" />
					<div class="file-man-preview">
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="<?php echo $this->Html->url(array('controller' => 'file', 'action' => 'delete')) ?>" method="post" id="delete-file">
	   <input type="hidden" name="list-file" id="list-del-files" value="" />
	</form>
	<?php echo $this->Html->scriptStart(array('inline' =>false)) ?>
	//<script>
	var host = 'http://<?php echo $_SERVER["SERVER_NAME"] ?>';
	var root = '<?php echo $this->webroot ?>';
	$(document).ready(function(){
		$('.file-man td').not('td.cb').click(function(){
			$(this).closest('tr').find($('input')).trigger('click');
		});
	});
	function preview(url){
		$('.file-man-preview').html('<img src="' + url + '"/>');
		$('.file-man-preview').closest('.side-input-content').find($('input')).val(host + url);
	}
	function view(path){
		if(path)
			window.location.href = root + 'admin/file/view?path=' + encodeURIComponent(path);
	}
	function rename(){
		$('.file-man tbody input').each(function(){
			var filename = $(this).val();
			if($(this).is(':checked')){
				$('.hidden-rename').slideDown();
				$('#rename-input, #old-name').val(filename);
				return false;
			}
		});
	}
	function selectAll(){
		if($('.check-all').is(':checked')){
			$('.file-man tbody input').each(function(){
				if(!$(this).is(':checked'))
					$(this).click();
			});			
		}

		else {
			$('.file-man tbody input').each(function(){
				if($(this).is(':checked'))
					$(this).click();
			});			
		}

	}
	function cancelRename(){
		$('.hidden-rename').slideUp();
	}
	function saveRename(){
		var oldName = $('#old-name').val();
		var newName = $('#rename-input').val();
		window.location.href = root + 'admin/file/rename?from=' + encodeURIComponent(oldName) + '&to=' + encodeURIComponent(newName);
	}
	function deleteFiles(){
		var file = [];
		$('.file-man tbody input').each(function(){
			var filename = $(this).val();
			if($(this).is(':checked')){
				file.push(filename);
			}
		});
		$('#list-del-files').val(JSON.stringify(file));
		if(file.length && window.confirm("<?php echo __('Are you sure?') ?>"))
			$('form#delete-file').submit();
	}
	function move(){
		var file = [];
		$('.file-man tbody input').each(function(){
			var filename = $(this).val();
			if($(this).is(':checked')){
				file.push(filename);
			}
		});
		if(file.length){
			$('.hidden-move').slideDown();
		}
		$('#move-input').val(JSON.stringify(file));
//		if(file.length && window.confirm("<?php echo __('Are you sure?') ?>"))
//			$('form#delete-file').submit();
	}
	function cancelMove(){
		$('.hidden-move').slideUp();
	}
	function saveMove(){
		$('form#move-file').submit();
	}
	function copy(){
		var file = [];
		$('.file-man tbody input').each(function(){
			var filename = $(this).val();
			if($(this).is(':checked')){
				file.push(filename);
			}
		});
		if(file.length){
			$('.hidden-copy').slideDown();
		}
		$('#copy-input').val(JSON.stringify(file));
	}
	function cancelCopy(){
		$('.hidden-copy').slideUp();
	}
	function saveCopy(){
		$('form#copy-file').submit();
	}
	function newdir(){
		$('.hidden-newdir').slideDown();
	}
	function cancelCreateDir(){
		$('.hidden-newdir').slideUp();
	}
	function upload(){
		$('.hidden-upload').slideDown();
	}
	function cancelUpload(){
		$('.hidden-upload').slideUp();
	}
	<?php echo $this->Html->scriptEnd() ?>
<?php endif; ?>