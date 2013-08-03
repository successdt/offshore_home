<?php
function addCategory($categories, $categoryProduct = null){
	$categoryTree = '';
	foreach ($categories as $category){
		$id = $category['Category']['id'];
		$name = $category['Category']['name'];
		$checked = '';
		if(is_array($categoryProduct) && key_exists($id, $categoryProduct)){
			$checked = 'checked';
		}
		$categoryTree .= '<li>' . 
		 	'<input type="checkbox" name="data[category_id][]"  value="'. $id . '" id="category_id'. $id . '" ' . $checked . '/>' .
			$category['Category']['name'] . '<ul class="category-list-input">';
		$categoryTree .= addCategory($category['child'], $categoryProduct);
		$categoryTree .= '</ul></li>';
	}
	return $categoryTree;
}

$categoryTree = '';
if(isset($data['category'])){
	if(isset($data['category_product']))
		$categoryTree = addCategory($data['category'], $data['category_product']);
	else
		$categoryTree = addCategory($data['category']);
}
?>
<ul class="category-list-input">
	<?php echo $categoryTree; ?>					
</ul>
