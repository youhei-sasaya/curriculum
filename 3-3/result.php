<?php
    $inpnumber = $_POST['inpnumber'];
    $min = 0;
    $max = strlen($inpnumber);
    $rdm = mt_rand($min,$max);
    $selnumber = substr($inpnumber,$rdm,1 );
    echo '最小値';
    echo $min;
    echo '<br>';
    echo '最大値（文字数）';
    echo $max;
    echo '<br>';
    echo 'ランダム値（文字の位置）';
    echo $rdm;
    echo '<br>';
    echo $selnumber; 
    echo "   ０：凶、１〜３：小吉、４〜６、中吉、７〜８：吉、９：大吉";

   ?>
    <p><?php echo date("Y年m月d日", time()); ?>の運勢は</p>
    <p>選ばれた数字は<?php echo $selnumber; ?></p>
    <p><?php 
    switch ($selnumber) {
    //０：凶、１〜３：小吉、４〜６、中吉、７〜８：吉、９：大吉
    //数字が０の場合
    case $selnumber === 0:
        echo '凶';
        break;
    //数字が１から３の場合
    case $selnumber > 0 && $selnumber <= 3:
        echo '小吉';
        break;
    //数字が４から６の場合
    case $selnumber > 3 && $selnumber <= 6:
        echo '中吉';
        break;
    //数字が４から６の場合
    case $selnumber > 6 && $selnumber <= 8:
        echo '吉';
        break;
    //数字が９の場合
    case $selnumber > 8:
        echo '大吉';
        break;      
    }
?></p>