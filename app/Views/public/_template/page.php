<!doctype html>
<html lang="<?= $locale ?>">
	<head>
		<meta charset="<?= $charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Public</title>
		<link rel="canonical" href="<?= current_url() ?>">
	</head>
	<body>
		<header>
			<?= $this->include('public/_template/header') ?>
		</header>
		<main class="overflow-hidden">
			<?= $this->renderSection('content') ?>
		</main>
		<footer>
			<?= $this->include('public/_template/footer') ?>
		</footer>
	</body>
</html>