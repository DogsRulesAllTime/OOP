<?php

$subject = '25-04-2017';

$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement = 'month: $2 , date: $1 ,god: $3  ';


echo preg_replace($pattern, $replacement, $subject);