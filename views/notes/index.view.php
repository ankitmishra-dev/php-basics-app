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
			<button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Create Note</button>
			</div>
			<div>

				<div class="title mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
					<ul style="padding: 0; list-style-type: none;">
						<?php foreach ($contactData as $id => $contact) : ?>
							<li style="display: flex; ">
								<?= $contact['title'] ?> :  &nbsp;<a href="post?id=<?= $contact['id'] ?>" style="color:blue">view</a>
								<form action="post" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="id" value="<?= $contact['id'] ?>">
									<button style="color:red" class="px-4">del</button>
								</form>
							</li>
						<?php endforeach ?>
					</ul>
				</div>



			</div>
		</main>
	</div>

</body>

</html>