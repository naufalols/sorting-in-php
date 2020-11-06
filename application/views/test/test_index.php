<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.box {
			padding: 5px 0;
			width: 30px;
			float: left;
			text-align: center;
			border: 1px solid #ccc;
			vertical-align: middle
		}
		.box1 {
			padding: 5px 0;
			width: 30px;
			float: left;
			text-align: center;
			border: 1px solid rgb(211, 79, 79);
			vertical-align: middle
		}
	</style>
	<title>TESTING</title>
</head>
<body>
<?php
function print_array($array){
	foreach($array as $data){
		echo '<div class="box">'.$data.'</div>';
	}
	echo '<div style="clear:both"></div>';
}
function print_array1($array){
	foreach($array as $data){
		echo '<div class="box1">'.$data.'</div>';
	}
	echo '<div style="clear:both"></div>';
}
echo '<br />';
echo '<br />';
?>
	<h1>BUBBLE SORT</h1>
	<br>
	<?php
function bubble_Sort($my_array )
{
	do
	{   $arr =[
    ];
		$swapped = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{
                $arr            =[$my_array[$i + 1],$my_array[$i]];
				$temp 		    = $my_array[$i];
                $my_array[$i] 	= $my_array[$i+1];
                $my_array[$i+1] = $temp;
                $swapped = true;
                echo "<br>";
                print_array1($arr); 
                print_array($my_array);
                break;
            }          
		}
	}
	while( $swapped );
return $my_array;
}
$test_array = array(4,9,7,5,8,9,3);
print_array($test_array);
echo "<br>";
bubble_Sort($test_array);
?>
</body>
</html>
