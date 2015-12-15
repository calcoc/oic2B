<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>

	<title>topnews</title>
</head>
<body>
<div id ="masonry">
<?php foreach ($items as $item): ?>
 <div class ="item <?= $i++?>">
   <a href="<?= $item->link ?>">
     <h3 class='caption'>
        <?= $item->title;?>
       <small class='date'></small>
     </h3>
   </a>
   <p class='description'>
 <?php
   $description = $item->description;
   	preg_match('|src="(.*?).jpg"|i', $description, $match);
	if(!empty($match)){echo '<img src="'.$match[1].'.jpg" />';
	}else{echo'<img src= "../NoImage.png">';} ?>
    </p> </div>
<?php endforeach ?>
</div>

<script>
$(function(){
$('#masonry').masonry({
  itemSelector: '.item',
  columnWidth: 3, 
  isFitWidth: true,
  isAnimated: true
});
});
</script>
</body>
</html>