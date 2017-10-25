<?php 

$cars = [
    ['Volvo', 22, 18],
    ['BMW', 15, 13],
    ['Saab', 0, 5],
    ['Land Rover', 17, 15],
];


    sort($cars);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 13</title>
</head>
<body>
	<table>
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Verkocht</th>
			<th>Totaal</th>
		</tr>

<?php for ($i = 0; $i < 4; $i++): ?>
		<tr>
<?php for ($y = 0; $y < 3; $y++): ?>
<?php if ($cars[$i][1] == 0): ?>
			<td background="red"><?=$cars[$i][$y]?></td>
<?php else: ?>
			<td background="white"><?=$cars[$i][$y]?></td>
<?php endif; ?>
<?php endfor; ?>
			<td>Totaal</td>
		</tr>
<?php endfor; ?>

	</table> 
</body>
</html>