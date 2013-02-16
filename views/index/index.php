<?php foreach($vars as $k=>$row): ?>
<div class='grid'>
	<div class='box image'>
			<a href='?page=image&id=<?=$row['id']?>'><img src='<?=$row['url']?>'/> </a>
			<div class='hits'><?=$row['name']?> <?=core\helper\Number::format($row['hits'])?> views</div>
	</div>
</div>
<?php endforeach; ?>