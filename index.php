<?php include 'header.php'; ?>
		<div>
			<div class="container" style="color: white; margin-top: 100px">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="top-tab" data-toggle="tab" href="#top" role="tab" aria-controls="top" aria-selected="true">
						<h4 id="cats">Top-Rated Movies</h4>
					</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="up-tab" data-toggle="tab" href="#up" role="tab" aria-controls="up" aria-selected="false">
						<h4 id="cats">Upcoming Movies</h4>
					</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent" style="margin-top: 10px">
					<div class="container row tab-pane fade show active" id="top" role="tabpanel" aria-labelledby="top-tab">
					<div class="container row">
					<?php
					$json = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=9826759f386f8b0e344e522c867b9432&language=en-US&page=1');
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
					<div class="tab-pane fade show active" id="up" role="tabpanel" aria-labelledby="up-tab">
						<div class="container row">
						<?php
						$json = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=9826759f386f8b0e344e522c867b9432&language=en-US&page=1');
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
			</div>
		</div>
<?php include 'footer.php';?>