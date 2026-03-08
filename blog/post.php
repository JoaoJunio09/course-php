<?php
	include_once("templates/header.php");

	if (isset($_GET['id'])) {
		$postId = $_GET['id'];
		$currentPost;

		foreach($posts as $post) {
			if ($post['id'] == $postId) {
				$currentPost = $post;
			}
		}
	}

?>
	<main id="post-container">
		<div id="content-container">
			<h1 id="main-title"><?= $currentPost['title'] ?></h1>
			<p id="post-description"><?= $currentPost['description'] ?></p>
			<div class="img-container">
				<img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
			</div>
			<p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa labore aspernatur dolorem, ullam doloremque reprehenderit non quaerat velit dignissimos sequi cumque incidunt minima? Eos, voluptatibus optio. Incidunt accusamus molestias voluptates.
				Delectus doloremque quam beatae provident atque commodi perspiciatis, et nobis culpa consequatur. Numquam libero expedita dolore recusandae fugiat iusto, a ducimus molestias praesentium optio neque impedit illum sequi! Itaque, adipisci.
				Id rem quas repudiandae, in, neque temporibus necessitatibus fugit vel recusandae sed quia ullam sequi labore ipsum sapiente impedit. Necessitatibus voluptatem ipsum recusandae tempore molestiae odit quos obcaecati maiores modi.
				Optio possimus vero voluptas eligendi beatae dignissimos, atque eum maxime consectetur quisquam nesciunt veniam esse repellendus? Sequi eligendi pariatur iusto nostrum veritatis, quae aspernatur maiores repellendus voluptatum natus porro sint.
				Unde, at veniam, recusandae vel atque, sequi eius maiores mollitia provident non quis perspiciatis dolorem eum ut nemo in quaerat vitae doloremque? Officia maiores reiciendis deserunt repellat deleniti distinctio delectus.
			</p>
			<p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa labore aspernatur dolorem, ullam doloremque reprehenderit non quaerat velit dignissimos sequi cumque incidunt minima? Eos, voluptatibus optio. Incidunt accusamus molestias voluptates.
				Delectus doloremque quam beatae provident atque commodi perspiciatis, et nobis culpa consequatur. Numquam libero expedita dolore recusandae fugiat iusto, a ducimus molestias praesentium optio neque impedit illum sequi! Itaque, adipisci.
				Id rem quas repudiandae, in, neque temporibus necessitatibus fugit vel recusandae sed quia ullam sequi labore ipsum sapiente impedit. Necessitatibus voluptatem ipsum recusandae tempore molestiae odit quos obcaecati maiores modi.
				Optio possimus vero voluptas eligendi beatae dignissimos, atque eum maxime consectetur quisquam nesciunt veniam esse repellendus? Sequi eligendi pariatur iusto nostrum veritatis, quae aspernatur maiores repellendus voluptatum natus porro sint.
				Unde, at veniam, recusandae vel atque, sequi eius maiores mollitia provident non quis perspiciatis dolorem eum ut nemo in quaerat vitae doloremque? Officia maiores reiciendis deserunt repellat deleniti distinctio delectus.
			</p>
		</div>
	</main>
	<aside id="nav-container">
		<h3 id="tags-title">Tags</h3>
		<ul class="tag-list">
			<?php foreach($currentPost['tags'] as $tag): ?>
				<li><a href="#"><?= $tag ?></a></li>
			<?php endforeach; ?>
		</ul>
		<h3 id="categories-title">Categorias</h3>
		<ul id="categories-list">
			<?php foreach($categories as $category): ?>
				<li><a href="#"><?= $category ?></a></li>
			<?php endforeach; ?>
		</ul>
	</aside>
<?php
	include_once("templates/footer.php");
?>