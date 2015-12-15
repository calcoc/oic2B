<?php
//url取得
$params = explode('/', $_GET['url']);
//一つ目の要素を$modelに
$model = array_shift($params);
//対応したファイルのモデル名をinclude
include ('./models/'.$model.'.php');
//$retに関数を渡す
$ret = handle($params);
//$retを展開
extract($ret);
//実際の表示
include ('./views/'.$model.'.php');
