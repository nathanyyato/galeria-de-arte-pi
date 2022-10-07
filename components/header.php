<style>
	:root {
		--color-primary: #3f8afa;
		--color-secondary: #78e2f9;
		--color-white: #fff;
		--color-black: #000;
	}

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.header {
		background-color: var(--color-primary);
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 10px 20px;
	}

	.header h1 {
		width: 100%;
		text-align: center;
		color: var(--color-white);
		font-family: "Calistoga", sans-serif;
		font-weight: 400;
	}



	/* === NAVEGAÇÂO === */
	nav {
		margin: 82px 0;
	}

	nav ul {
		background-color: var(--color-secondary);
		width: 80%;
		margin: 0 auto;
		list-style: none;
		display: flex;
		justify-content: space-around;
		align-items: center;
		padding: 10px;
	}

	nav ul a {
		color: var(--color-black);
		text-decoration: none;
		font-family: "Inter", sans-serif;
		transition: all 0.3s ease;
	}

	nav ul a:hover {
		color: rgb(112, 112, 112);
	}
</style>


<header>
	<div class="header">
		<div class="logo">
			<img src="./images/logo.png" alt="Yato, personagem de Noragami" />
		</div>
		<h1>Artplace</h1>
	</div>
	<nav>
		<ul>
			<?php
			if (isset($_SESSION['user'])) :
			?>
				<li><a href='./pages/logout.php'>Logout</a></li>

			<?php
			endif;
			$links = [
				["Home", ""],
				["Artes", "pages/artes.php"],
				["Design Gráfico", "pages/Design Gráfico.html"],
				["Quiz", "quiz.php"],
				["Mensagem", "pages/messagens.html"],
				["Login", "pages/login.html"],
			];
			foreach ($links as $link) :
			?>
				<li><a href='<?= $link[1] ?>'><?= $link[0] ?></a></li>
			<?php
			endforeach;
			?>

		</ul>
	</nav>
</header>

<script>
	const links = document.querySelectorAll("nav a");
	const currentLocation = location.href;
	const routes = {};

	for (const link of links) {
		if (link.href === currentLocation) {
			link.classList.add("active");
			link.href = "#";
			document.title = `Artplace - ${routes[link.pathname]}`;

		} else {
			link.classList.remove("active");

		}

	}
</script>
