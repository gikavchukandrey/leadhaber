
<div class="container p-t-2">

	<div class="row">
		<div class="col-lg-3 col-md-4">		
							<?php echo get_ads("ads1","ads card card-block no-padding p-b-1 p-t-1"); ?>

			<?php if($top){ ?>
			<div class="card card-block">
				<h2 class="small p-b-1"><?php echo __("Top Sites"); ?></h2>
				<?php foreach ($top as $key => $value){ 
					
					?>
				<div class="site-list">
					<div class="score"><?php echo $value->score; ?></div>
					<div class="data">
						<div class="title truncate"><?php echo badWords($value->metaTitle); ?></div>
						<a href="<?php echo base_url(); ?><?php echo $value->url; ?>" class="subtitle truncate"><?php echo badWords($value->url); ?></a>
					</div>
				</div>
				<?php }  ?>				
			</div>
			<?php } ?>

			<?php if($recents){ ?>
			<div class="card card-block">
				<h2 class="small p-b-1"><?php echo __("Latest Sites"); ?></h2>
				<?php foreach ($recents as $key => $value){ 
					
					?>
				<div class="site-list">
					<div class="score"><?php echo $value->score; ?></div>
					<div class="data">
						<div class="title truncate"><?php echo badWords($value->metaTitle); ?></div>
						<a href="<?php echo base_url(); ?><?php echo $value->url; ?>" class="subtitle truncate"><?php echo badWords($value->url); ?></a>
					</div>
				</div>
				<?php }  ?>				
			</div>
			<?php } ?>


		</div>
		<div class="col-lg-9 col-md-8">		

			
			<h2 class="nice-title "><i class="zmdi zmdi-eye"></i><span><?php echo badWords($title); ?></span></h2>
			<div class="">
				<?php
					foreach ($list as $key => $value) {		
						if($key>=12)	
							continue;
						if(trim(badWords($value->metaTitle)) == '')				
							$value->metaTitle = '-';
						?>
						<div class="col-sm-6 col-md-4 col-lg-3 ">
							<a class="card-site link-black" href="<?php echo base_url(); ?><?php echo $value->url; ?>">
									<div class="score-hide"><span><div><?php echo $value->score; ?></div><small><?php echo __("Score"); ?></small></span></div>

						  		<img title="<?php echo badWords($value->metaTitle); ?>" class="lazy"  src="data:image/gif;base64,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" data-src="<?php echo renderScreenshot($value); ?>" alt="<?php echo badWords($value->metaTitle); ?>">
						  		
						  		<div class="data">
						  			<div class="truncate"><?php echo badWords($value->metaTitle); ?></div>
						  			<div class="truncate url text-muted"><?php echo badWords($value->url_real); ?></div>
						  			<!--<progress class="progress progress-sm <?php echo getColorProgress($value->score,80); ?>" value="<?php echo $value->score; ?>" max="100"></progress>								    		-->
									
									<span class="rating">
						  			<?php  score2star($value->score); ?>
						  			</span> 
								
									<!--<div>
										<small class="text-muted"><?php echo __("Last Updated:"); ?> <?php echo ago($value->updated); ?></small>
									</div>-->
						  		</div>
							</a>
						</div>
						<?php
					}
					?>
			</div>


			<?php  if(count($list)>12 && $filter)
			{
				?>
				
					<div class="text-xs-center">
						<nav aria-label="Page navigation">
						  <ul class="pagination">
						  	<?php if($offset>0){ ?>
						    <li class="page-item">
						      <a class="page-link" href="<?php echo base_url(); ?><?php echo config_item("slug_filter"); ?>/<?php echo $filter; ?>/<?php echo urlencode($search); ?>/<?php echo $currentPage-1; ?>" aria-label="Previous">
						        <span aria-hidden="true"><i class="zmdi zmdi-arrow-left"></i> <?php echo __("Previous"); ?></span>
						       
						      </a>
						    </li>
						      <li class="page-item active">
							      <a class="page-link" href="#"><?php echo $currentPage; ?></a>
							    </li>
						    <?php } ?>
					
						    <li class="page-item">
						      <a class="page-link" href="<?php echo base_url(); ?><?php echo config_item("slug_filter"); ?>/<?php echo $filter; ?>/<?php echo urlencode($search); ?>/<?php echo $currentPage+1; ?>" aria-label="Next">
						        <span aria-hidden="true"><?php echo __("Next"); ?> <i class="zmdi zmdi-arrow-right"></i></span>
						        
						      </a>
						    </li>
						  </ul>
						</nav>
					</div>
				
				<?php
			}
			else
			{
				if($offset>0)
				{
					?>
					<div class="text-xs-center">
						<nav aria-label="Page navigation">
						  <ul class="pagination">
						  
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Previous">
						        <span aria-hidden="true"><i class="zmdi zmdi-arrow-left"></i> <?php echo __("Previous"); ?></span>
						       
						      </a>
						    </li>
						 
					
						 
						  </ul>
						</nav>
					</div>
				<?php

				}
			}
			?>



		</div>


		

	</div>


</div>


