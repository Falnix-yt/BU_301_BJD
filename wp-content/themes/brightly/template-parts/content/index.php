<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer brightly-index__k__1MCYzfcZN-outer brightly-local-784-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner brightly-index__k__1MCYzfcZN-inner brightly-local-784-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container brightly-index__k__baLWB4dRKjp-container brightly-local-785-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner brightly-index__k__baLWB4dRKjp-inner brightly-local-785-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container brightly-index__k__kxeqsSpdy-n-container brightly-local-786-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner brightly-index__k__kxeqsSpdy-n-inner brightly-local-786-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-1 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align brightly-index__k__kxeqsSpdy-n-align brightly-local-786-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container brightly-index__k__CtKC_EuIZL-container brightly-local-787-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container brightly-index__k__vrf0UGkWrN-container brightly-local-788-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-1 gutters-row-v-md-3 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner brightly-index__k__vrf0UGkWrN-inner brightly-local-788-inner h-row">
										<?php brightly_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(brightly_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container brightly-index__k__vD7AVCTELY-container brightly-local-798-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner brightly-index__k__vD7AVCTELY-inner brightly-local-798-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container brightly-index__k__tBYU0uM8Xx-container brightly-local-799-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner brightly-index__k__tBYU0uM8Xx-inner brightly-local-799-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align brightly-index__k__tBYU0uM8Xx-align brightly-local-799-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(brightly_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing brightly-index__k__ELgmeRXRD--spacing brightly-local-800-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer brightly-index__k__ELgmeRXRD--outer brightly-local-800-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link brightly-index__k__ELgmeRXRD--link brightly-local-800-link h-w-100 h-global-transition" href="<?php brightly_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text brightly-index__k__ELgmeRXRD--text brightly-local-800-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'brightly'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container brightly-index__k__P2OarhUKUK-container brightly-local-801-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner brightly-index__k__P2OarhUKUK-inner brightly-local-801-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align brightly-index__k__P2OarhUKUK-align brightly-local-801-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer brightly-index__k__tRiQFlrj8q-outer brightly-local-802-outer" data-kubio="kubio/pagination-numbers">
														<?php brightly_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container brightly-index__k__2nd5yuWmz9-container brightly-local-803-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner brightly-index__k__2nd5yuWmz9-inner brightly-local-803-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align brightly-index__k__2nd5yuWmz9-align brightly-local-803-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(brightly_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing brightly-index__k__ELgmeRXRD--spacing brightly-local-804-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer brightly-index__k__ELgmeRXRD--outer brightly-local-804-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link brightly-index__k__ELgmeRXRD--link brightly-local-804-link h-w-100 h-global-transition" href="<?php brightly_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text brightly-index__k__ELgmeRXRD--text brightly-local-804-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'brightly'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
