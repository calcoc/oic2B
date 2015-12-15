<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<title>新着順</title>
</head>
<body>

<div id ="masonry">
<script>
$(function(){
$('#masonry').masonry({
  itemSelector: '.item',
  columnWidth: 200,
  isFitWidth: true,
  isAnimated: true,
});
});
</script>

<?php foreach ($items as $item): ?>
 <div class ="item x<?= $i++?>">

   <a href="<?= $item->link ?>">
       <h3 class='caption'>
        <?= $item->title;?>
       <small class='date'></small>
     </h3>
   <p class='description'>
   <?
   $description = $item->description;
   	preg_match('|src="(.*?).jpg"|i', $description, $match);
	if(!empty($match)){echo '<img src="'.$match[1].'.jpg" />';
	}else{echo'<img src= "NoImage.png">';} ?>
    </p> 
   </a>

</div>
<?php endforeach ?>
</div>

</body>

</html>
