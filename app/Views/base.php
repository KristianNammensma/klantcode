
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome to CodeIgniter 4!</title>
		<meta name="description" content="The small framework with powerful features">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/projecten.css">
		<link rel="stylesheet" href="./css/Ervaringen.css">
	</head>
	<body>


		<header>

			<?= $this->renderSection('header') ?> 	
		</header>


		<main>
			<?= $this->renderSection('main') ?> 	
			
			<section class="diensten">
				<?= $this->renderSection('onesection') ?> 	
			</section>


			<header class="projecten">
				<?= $this->renderSection('twosection') ?> 	
			</header>

			<section class="Ervaringen">
				<?= $this->renderSection('threesection') ?> 	
			</section>
		</main>
		
		<footer>			
			<div class="environment">

				<p>Page rendered in {elapsed_time} seconds</p>

				<p>Environment: <?= ENVIRONMENT ?></p>

			</div>

		<?= $this->renderSection('footer') ?> 	

		</footer>
	</body>
</html>
