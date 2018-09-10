<?php
$b = 0;
rekursif1(5);

function rekursif2($a, $kebalik){
	global $b;
	if ($a > $b - $kebalik) {
		echo "*";
		rekursif2($a - 1, $kebalik);
	}
}

function rekursif1($kebalik){
	global $b;
	rekursif2($b, $kebalik);
	echo "<br>";
	if (--$kebalik > $b) {
		rekursif1($kebalik);
	}
}

?>
