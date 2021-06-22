<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Belajar Perulangan Dengan PHP</h1>

	<!-- perulangan dengan while...!
	-->
	<table border="1" cellpadding="10" cellspacing="0">

		<p><?php echo "Ini Perulangan Dengan While :" ?></p>
		<?php
$i = 0;
while ($i < 3):
    $i++;?>
				<tr>
					<?php
    $j = 0;
    while ($j < 5):
        $j++;?>
							<td><?php echo "$i, $j"; ?></td>
						<?php endwhile;?>
				</tr>
			<?php endwhile;?>

	</table>


<!-- perulngan dengan for...!
-->
<table border="1" cellpadding="10" cellspacing="0">

	<p><?php echo "Ini Perulangan Dengan For :" ?></p>
	<?php
for ($i = 1; $i <= 4; $i++): ?>

		<tr>
			<?php
for ($j = 1; $j <= 5; $j++): ?>

				<td><?php echo "$i, $j"; ?></td>
			<?php endfor;?>
		</tr>
	<?php endfor;?>


</table>
</body>
</html>