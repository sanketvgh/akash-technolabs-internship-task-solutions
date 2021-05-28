<!-- Main -->
<?php 
	$photos = [
		["title" => "Naruto",
		"description" => "Naruto toy image taken by me.",
		"url" => "https://images.unsplash.com/photo-1594007759138-855170ec8dc0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		"alt" => "naruto image"],

		["title" => "Naruto Toy",
		"description" => "Naruto toy image taken by me.",
		"url" => "https://images.unsplash.com/photo-1595309959777-08d5da891d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=899&q=80",
		"alt" => "naruto image"],

		["title" => "Heaven",
		"description" => "Published on November 13, 2016",
		"url" => "https://images.unsplash.com/photo-1479030160180-b1860951d696?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80",
		"alt" => "Heaven on Earth"],

		["title" => "Night Sky",
		"description" => "Photos from night",
		"url" => "https://images.unsplash.com/photo-1491466424936-e304919aada7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1049&q=80",
		"alt" => "night image"],

		["title" => "Hils",
		"description" => "An image taken by me.",
		"url" => "https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1053&q=80",
		"alt" => "hils"],

		["title" => "Nature View",
		"description" => "An image taken by me.",
		"url" => "https://images.unsplash.com/photo-1436892777614-be9a19edb568?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80",
		"alt" => "nature view"],

	];
	
 ?>
					<div id="main">
						<?php for ($i=0; $i<count($photos); $i++) { ?>
							<article class="thumb">
								<a href="<?php echo $photos[$i]['url'] ?>" class="image"><img src="<?php echo $photos[$i]['url'] ?>" alt="" /></a>
								<h2><?php echo $photos[$i]['title'] ?></h2>
								<p><?php echo $photos[$i]['description'] ?></p>
							</article>
					
						<?php } //loop end?>
						
					</div>