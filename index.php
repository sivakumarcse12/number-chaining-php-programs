<?php

$out_array=array();
function get_asc($in)
{   $t_array=array(); $in=(string)$in;
    $t_array1='';
	for($i=0;$i<strlen($in);$i++)
	{
		$t_array[]=$in[$i];
	}
	sort($t_array);
	for($i1=0;$i1<count($t_array);$i1++)
	{
		$t_array1.=$t_array[$i1];
	}
	return (int)$t_array1;
}
function get_desc($in1)
{   $in1=(string)$in1;
	$dt_array=array();
    $dt_array1='';
	for($i=0;$i<strlen($in1);$i++)
	{
		$dt_array[]=$in1[$i];
	}
	rsort($dt_array); 
	for($k=0;$k<count($dt_array);$k++)
	{
		$dt_array1.=$dt_array[$k];
	}
	
	return (int)$dt_array1;
}

$in1=$_GET['no'];
$rev_in1=get_desc($in1);
	 $order_in1=get_asc($in1); 
	 $out1=$rev_in1-$order_in1;
	 echo "$rev_in1-$order_in1=$out1 <br/>";
	 $val=1;
	 $out_array[]=$out1;
	 $in1=$out1;	
while(!in_array('2',array_count_values($out_array)))
{    
	 $rev_in2=get_desc($in1);
	 $order_in2=get_asc($in1); 
	 $out2=$rev_in2-$order_in2;
	 $in1=$out2;
	 $out_array[]=$out2;	
	 $val++;
	  echo "$rev_in2-$order_in2=$out2 <br/>";
}

echo 'Number chained count is '.$val;


?>