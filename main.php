<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
    <link rel="stylesheet" href=" style.css"/>
</head>

<body>
	<div class="general_container">
		<div class="header">
			<?php include 'logo.inc.php'?>
			<?php include 'menu.inc.php'?>
		</div>	

		<div class="about_me">
			<h1> <?php echo $hello; ?> </h1>
			<div class="data">
				<div class="MyImage">	
					<?php echo $image ?>
				</div>
				<div class="basic_info">
					<p> Меня зовут
						<?php echo $name, ' ', $surname . '<br>';
						echo 'город', ' ', $city; ?>
					</p>
					<p> Мне 
						<?php echo $age, ' ', 'лет' ?>
					</p>	
					<p>Мы научились объявлять переменные и проводить базовые операции с ними!</p>
					<p>Еще мы научились сегментировать наш проект, выделяя каждый его элемент в отдельный, подключенный к основному, файл)</p>
				</div>
			</div>
			<div class="knowledge">
 				<?php include 'knowledge.inc.php'?>
				<?php echo $a, ' ', $b, ' ', $c ?> <br>

				<?php 
					$a = 10;
					$b = 90;
					echo $a + $b, " - сумма $a и $b" ?> <br>
				<?php 
					print($d)
				?>	
			</div>
			<div class="text_before_footer">
				<p class="text">
					The last module was dedicated to the php language and its work in combination with HTML!
					It was very interesting and actually this practice work is awesome)
				</p>
			</div>
		</div>
		
			<?php include 'footer.inc.php'; ?>

	</div>
</body>
</html>