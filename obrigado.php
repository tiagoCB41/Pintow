<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include "components/heads.php"; ?>
</head>

<body>
	<section class="bg-color1">
		<?php include "components/navbar.php" ?>
		<div class="grid max-w-screen-xl px-4 pb-40 lg:pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-6 lg:grid-cols-12 lg:pt-5">
            
        </div>
    </section>

	<footer class="bg-color1">
		<div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
			<div class="text-center">
				<a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold text-white">
					<img src="./assets/img/logo.png" class="h-6 mr-3 sm:h-9" alt="Pintow Logo" />
				</a>
				<span class="block text-sm text-center text-white">© Copyright 2023. All Rights Reserved.
				</span>
			</div>
		</div>
	</footer>
	<script src="./assets/js/script.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>