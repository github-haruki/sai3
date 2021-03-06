<?php
// カウント数取得関数
function get_count($file) {
	$filename = 'data/'.$file.'.dat';
	$fp = @fopen($filename, 'r');
	if ($fp) {
		$vote = fgets($fp, 9182);
	} else {
		$vote = 0;
	}
	return $vote;
}

function get_status($file) {
	$filename2 = 'data/'.$file.'status.dat';
	$fp2 = @fopen($filename2, 'r');
	if ($fp2) {
		$vote = fgets($fp2, 9182);
	} else {
		$vote = '-';
	}
	return $vote;
}

$c11 = get_count('11');
$c12 = get_count('12');
$c13 = get_count('13');
$c14 = get_count('14');
$c15 = get_count('15');
$c16 = get_count('16');
$c17 = get_count('17');
$c21 = get_count('21');
$c22 = get_count('22');
$c23 = get_count('23');
$c24 = get_count('24');
$c25 = get_count('25');
$c26 = get_count('26');
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sai3 signage</title>
	<link rel="stylesheet" href="css/contents_container.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="signage">
		<div class="container_left">
			<table style="width:100%">
				<tr class="table_title"><td>#</td><th>状況</th><th>混雑</th></tr>
				<tr>
					<td>11HR</td>
					<th id="status11"><?= get_status('11') ?></th>
					<th id="cell11"><?= get_count('11') ?>分</th>
				</tr>
				<tr>
					<td>12HR</td>
					<th id="status12"><?= get_status('12') ?></th>
					<th id="cell12"><?= get_count('12') ?>分</th>
				</tr>
				<tr>
					<td>13HR</td>
					<th id="status13"><?= get_status('13') ?></th>
					<th id="cell13"><?= get_count('13') ?>分</th>
				</tr>
				<tr>
					<td>14HR</td>
					<th id="status14"><?= get_status('14') ?></th>
					<th id="cell14"><?= get_count('14') ?>分</th>
				</tr>
				<tr>
					<td>15HR</td>
					<th id="status15"><?= get_status('15') ?></th>
					<th id="cell15"><?= get_count('15') ?>分</th>
				</tr>
				<tr>
					<td>16HR</td>
					<th id="status16"><?= get_status('16') ?></th>
					<th id="cell16"><?= get_count('16') ?>分</th>
				</tr>
				<tr>
					<td>17HR</td>
					<th id="status17"><?= get_status('17') ?></th>
					<th id="cell17"><?= get_count('17') ?>分</th>
				</tr>
			</table>
		</div>
		<div class="container_center">
			<table style="width:100%">
				<tr class="table_title"><td>#</td><th>状況</th><th>混雑</th></tr>
				<tr>
					<td>21HR</td>
					<th id="status21"><?= get_status('21') ?></th>
					<th id="cell21"><?= get_count('21') ?>分</th>
				</tr>
				<tr>
					<td>22HR</td>
					<th id="status22"><?= get_status('22') ?></th>
					<th id="cell22"><?= get_count('22') ?>分</th>
				</tr>
				<tr>
					<td>23HR</td>
					<th id="status23"><?= get_status('23') ?></th>
					<th id="cell23"><?= get_count('23') ?>分</th>
				</tr>
				<tr>
					<td>24HR</td>
					<th id="status24"><?= get_status('24') ?></th>
					<th id="cell24"><?= get_count('24') ?>分</th>
				</tr>
				<tr>
					<td>25HR</td>
					<th id="status25"><?= get_status('25') ?></th>
					<th id="cell25"><?= get_count('25') ?>分</th>
				</tr>
				<tr>
					<td>26HR</td>
					<th id="status26"><?= get_status('26') ?></th>
					<th id="cell26"><?= get_count('26') ?>分</th>
				</tr>
				<tr>
					<td>27HR</td>
					<th></th>
					<th></th>
				</tr>
			</table>
		</div>
		<div class="container_right">
			<table style="width:100%">
				<tr class="table_title"><td>#</td><th>状況</th><th>混雑</th></tr>
				<tr>
					<td>31HR</td>
					<th id="status31"><?= get_status('31') ?></th>
					<th id="cell31"><?= get_count('31') ?>分</th>
				</tr>
				<tr>
					<td>32HR</td>
					<th id="status32"><?= get_status('32') ?></th>
					<th id="cell32"><?= get_count('32') ?>分</th>
				</tr>
				<tr>
					<td>33HR</td>
					<th id="status33"><?= get_status('33') ?></th>
					<th id="cell33"><?= get_count('33') ?>分</th>
				</tr>
				<tr>
					<td>34HR</td>
					<th id="status24"><?= get_status('34') ?></th>
					<th id="cell24"><?= get_count('34') ?>分</th>
				</tr>
				<tr>
					<td>35HR</td>
					<th id="status25"><?= get_status('35') ?></th>
					<th id="cell25"><?= get_count('35') ?>分</th>
				</tr>
				<tr>
					<td>36HR</td>
					<th id="status26"><?= get_status('36') ?></th>
					<th id="cell26"><?= get_count('36') ?>分</th>
				</tr>
				<tr>
					<td>37HR</td>
					<th></th>
					<th></th>
				</tr>
			</table>
		</div>
	</div>
	<script type="text/javascript">
/*
	function classify(){
		var waiting11 = <?php echo $c11 ?> ; 
		changeColor(waiting11, 11);

		var waiting12 = <?php echo $c12 ?> ; 
		changeColor(waiting12, 12);

		var waiting13 = <?php echo $c13 ?> ; 
		changeColor(waiting13, 13);

		var waiting14 = <?php echo $c14 ?> ; 
		changeColor(waiting14, 14);

		var waiting15 = <?php echo $c15 ?> ; 
		changeColor(waiting15, 15);

		var waiting16 = <?php echo $c16 ?> ; 
		changeColor(waiting16, 16);

		var waiting17 = <?php echo $c17 ?> ; 
		changeColor(waiting17, 17);

		var waiting21 = <?php echo $c21 ?> ; 
		changeColor(waiting21, 21);

		var waiting22 = <?php echo $c22 ?> ; 
		changeColor(waiting22, 22);

		var waiting23 = <?php echo $c23 ?> ; 
		changeColor(waiting23, 23);

		var waiting24 = <?php echo $c24 ?> ; 
		changeColor(waiting24, 24);

		var waiting25 = <?php echo $c25 ?> ; 
		changeColor(waiting25, 25);

		var waiting26 = <?php echo $c26 ?> ; 
		changeColor(waiting26, 26);
		
	}


	function changeColor(waiting, hr){
		let hr_id = 'cell' + hr ;
		var obj = document.getElementById(hr_id); 
		if(waiting>50){
    		obj.style.backgroundColor = '#ff0000b4'; 
		}else if(waiting>20){
			obj.style.backgroundColor = '#ff8741'; 
		}else{
		}
	}
*/

	window.onload = classify();
	</script>
</body>

</html>
