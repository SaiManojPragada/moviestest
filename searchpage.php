<?php include 'header.php';

$key = $_GET['key'];
?>
		<div>
			<div class="container" style="color: white; margin-top: 100px">
				<h4>Results for '<?php echo $key;?>'</h4></br>
				<div class="container row">
					<?php
					$json = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=9826759f386f8b0e344e522c867b9432&language=en-US&query='.$key.'%20vil&page=1&include_adult=false');
					$obj = json_decode($json);
					$results = $obj->results;
					for ($i=0; $i < sizeof($results); $i++) { 
						$title = $results[$i]->title;
						$rating = $results[$i]->vote_average;
						$image_url = "https://www.themoviedb.org/t/p/w780".$results[$i]->poster_path;
						echo '
						<div class="col-md-3" style="margin-bottom:25px ;border: 2px solid #0a0a0a40;padding: 0; background-colo:#0a0a0a40;">
							<img src="'.$image_url.'" style="height: 85%; width: 100%; object-fit: cover">
							<i style="color: #ffffff50; font-size: 12px">Title : </i><b style="color: white; font-size: 14px; margin-left: 2px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis">'.$title.'</b></br>
							<i style="color: #ffffff50; font-size: 12px">Rating : </i><b style="font-size: 12px"><img src="assets/images/rating.png" style="height: 14px">'.$rating.'</b>
						</div>';
					}
					?>
				</div>
			</div>
		</div>

<? include 'footer.php'; ?>
