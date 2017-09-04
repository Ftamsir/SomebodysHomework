<pre>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
if ($a != '' && $b != '') {
	if (empty($_POST['culculate'])) {
		echo "empty operate!" ;
	}else{
		if($_POST['culculate']=='1'){
        $result = $a + $b;
    	}elseif ($_POST['culculate']=='2') {
    	$result = $a - $b;
    	}elseif ($_POST['culculate']=='3') {
    	$result = $a * $b;
    	}elseif ($_POST['culculate']=='4') {
    	$result = $a / $b;
    	}
    echo "<p>result is ",$result,"<p>";
	}
}else{
	echo "empty input";
}
?>
</pre>