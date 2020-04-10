<?php

// 04（编程题）写一个函数，将一个整数转换为千分位形式，例如把字符串1234567890转换为1,234,567,890
$number = '1234567890';
number_format($number);
echo $number;echo "<pre>";

// 05（编程题）写一个函数，求两个日期的差数，例如2009-3-1 ~ 2009-4-4 的日期差数.

/**
 * 求两个日期之间相差的天数
 * (针对1970年1月1日之后，求之前可以采用泰勒公式)
 * @param string $day1
 * @param string $day2
 * @return number
 */
function diffBetweenTwoDays ($day1, $day2)
{
  $second1 = strtotime($day1);
  $second2 = strtotime($day2);
    
  if ($second1 < $second2) {
    $tmp = $second2;
    $second2 = $second1;
    $second1 = $tmp;
  }
  return ($second1 - $second2) / 86400;
}

$day1 = '2009-3-1';
$day2 = '2009-4-4';
$diff = diffBetweenTwoDays($day1, $day2);
echo $diff;echo "<pre>";

// 06（编程题）要求写一段程序，实现以下数组$arr1转换成数组$arr2

$arr1 = array(
	0 =>array('fid'=>1, 'tid'=>1, 'name'=>'Name1'),
	1 =>array('fid'=>1, 'tid'=>2, 'name'=>'Name2'),
	2 =>array('fid'=>1, 'tid'=>5, 'name'=>'Name3'),
	3 =>array('fid'=>1, 'tid'=>7, 'name'=>'Name4'),
	4 =>array('fid'=>3, 'tid'=>9, 'name'=>'Name5'),
	5 =>array('fid'=>3, 'tid'=>12, 'name'=>'Name6')
);
$arr2 = [];
foreach ($arr1 as $key => $value) {
	if ($value['fid'] == 1) {
		$arr2[0][] = $value;
	} else {
		$arr2[1][] = $value;
	}
}
echo "<pre>";print_r($arr2);echo "<pre>";

// 07 两张表 city表和province表。分别为城市与省份的关系表。 根据如下要求写出相应的SQL

#1.显示字段：城市id ，城市名， 所属省份
$db1 = "SELECT c.id, c.city, p.province FROM city c INNER JOIN province p ON c.province_id = p.id";
#2 统计每个省份有多少个城市，显示字段：省份id ，省份名，包含多少个城市。
$db2 = "SELECT p.id, p.province, count(c.id) as number FROM province p INNER JOIN city c ON p.id=c.province_id group by id";
#3 找出拥有超过18座城市的所有省份
# 

// 08 

// 09（问答题）找出下面代码的问题，并提出解决方案

#解答：
#1.         || 改成 &，
#2.			可使用批量新增  	