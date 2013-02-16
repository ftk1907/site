<form class='box' method='post', action='?page=upload'>
	<div class='title'>Upload</div>
	<input name='name' placeholder="Title">
	<input name='url' placeholder="URL">
	<?php if($result = $link->query("SELECT name, id FROM category;")): ?>
	<select name="category">
	<?php while($row = $result->fetch_object()): ?>
			<option value="<?=$row->id?>"><?=$row->name?></option>
	<?php endwhile; ?>
	</select>
	<?php else: ?>
		Can't fetch category list
	<?php endif; ?>
	<!-- <textarea name='description' placeholder="Description"></textarea> -->
	<input type="submit" value="Upload">
</form>