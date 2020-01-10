<?php if( $s ) : ?>
			<div class="sidebar-affiliate-box">
				<?php if($s['type'] === 'review') : ?>
					<div class="sab-review">
						<?php if(!empty($s['logo'])) : ?>
							<div class="sab-logo">
								<img src="<?php echo $s['logo'] ?>" alt="<?php echo $s['title'] ?>">
							</div>
						<?php endif; ?>
						<div class="sab-title"><?php echo $s['title'] ?></div>
						<div class="sab-rating-stars">
							<div class="star-bg"></div>
							<div class="star-active" style="width: <?php echo find_rating_star_width($avg_rating); ?>"></div>
							<span class="sab-rating-value"><?php echo $avg_rating ?>/5</span>
						</div>
							
						<?php if(!empty($s['highlight_pros']) || !empty($s['highlight_cons'])) : ?>
							<div class="sab-highlights">
								<div class="sab-hl-title">Highlights:</div>
								<?php if(!empty($s['highlight_pros'])) : ?>
									<ul class="sab-hl-list shl-pros">
										<?php foreach($s['highlight_pros'] as $h) : ?>
										<li><?php echo $h ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<?php if(!empty($s['highlight_cons'])) : ?>
									<ul class="sab-hl-list shl-cons">
										<?php foreach($s['highlight_cons'] as $h) : ?>
										<li><?php echo $h ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<?php if( !empty($s['price']) ) : ?>
							<div class="sab-price">
								Price: <strong><?php echo $s['price']; ?></strong>
							</div>
						<?php endif; ?>

						<div class="sab-btn"><a rel="noreferrer noopener nofollow" target="_blank" href="<?php echo $s['aff_link'] ?>"><?php echo $s['aff_link_text'] ?><i class="fas fa-long-arrow-alt-right"></i></a></div>	

						<div class="sab-disclaimer">
							<p>Disclosure: We might earn a commission if you buy using our affiliate links</p>
						</div>
					</div>
				<?php endif; ?>

				<?php if($s['type'] === 'image') : ?>
					<div class="sab-image">
						<a rel="noreferrer noopener nofollow" target="_blank" href="<?php echo $s['link'] ?>"><img src="<?php echo $s['image'] ?>" alt="<?php $s['title'] ?>"></a>
					</div>
					<div class="sab-disclaimer">
						<p>Disclosure: Affiliate links used</p>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>