<!DOCTYPE html class="h-full bg-gray-100">
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posts Data | PHP Basics</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">

	<div class="min-h-full">
		<?php require base_path('views/partials/nav.view.php'); ?>
		<?php require base_path('views/partials/head.view.php'); ?>

		<main>
			<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
				<h1>This is Post Us page</h1>
			</div>
			<div>

				<div class="title mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
					<?php foreach ($contactData as $id => $contact) : ?>
						<li><?= $contact['title'] ?> : <a href="post/<?= $contact['id'] ?>" style="color:blue">view</a> &nbsp;&nbsp; <a href="post/<?= $contact['id'] ?>" style="color:red">del</a></li>
					<?php endforeach ?>
				</div>

			</div>
		</main>
	</div>

</body>

</html>