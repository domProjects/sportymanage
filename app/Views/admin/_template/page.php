<!doctype html>
<html lang="<?= $locale ?>">
	<head>
		<meta charset="<?= $charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<link rel="canonical" href="<?= current_url() ?>">
	</head>
	<body>
		<header>
			<?= $this->include('admin/_template/header') ?>
		</header>
		<main class="overflow-hidden">
			<?= $this->renderSection('content') ?>
		</main>
		<footer>
			<?= $this->include('admin/_template/footer') ?>
		</footer>
	</body>
</html>