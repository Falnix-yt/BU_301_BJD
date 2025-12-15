<div class="<?php brightly_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container brightly-search__k__QtetVXHJ9I-container brightly-local-1004-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner brightly-search__k__QtetVXHJ9I-inner brightly-local-1004-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
		<div class="position-relative wp-block-kubio-query-loop-item__align brightly-search__k__QtetVXHJ9I-align brightly-local-1004-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container brightly-search__k__iE82N7AEu-container brightly-local-1005-container h-aspect-ratio--16-9 <?php brightly_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image brightly-search__k__iE82N7AEu-image brightly-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner brightly-search__k__iE82N7AEu-inner brightly-local-1005-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align brightly-search__k__iE82N7AEu-align brightly-local-1005-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer brightly-search__k__in2mlwF4a-metaDataContainer brightly-local-1006-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
						<?php echo esc_html(get_the_date('d.m.Y')); ?>
					</a>
				</span>
			</div>
			<a class="position-relative wp-block-kubio-post-title__link brightly-search__k__tstzQ_uACq-link brightly-local-1007-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container brightly-search__k__tstzQ_uACq-container brightly-local-1007-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text brightly-search__k__-hWWlFyCEF-text brightly-local-1008-text" data-kubio="kubio/post-excerpt">
				<?php brightly_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing brightly-search__k__7TrnS1SQ70-spacing brightly-local-1009-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer brightly-search__k__7TrnS1SQ70-outer brightly-local-1009-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link brightly-search__k__7TrnS1SQ70-link brightly-local-1009-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text brightly-search__k__7TrnS1SQ70-text brightly-local-1009-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'brightly'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
