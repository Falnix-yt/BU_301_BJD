<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> brightly-front-header__k__Gp3qTlxXlua-outer brightly-local-504-outer h-navigation_overlap" data-kubio="kubio/navigation" data-kubio-component="overlap" data-kubio-settings="true" id="navigation">
	<?php brightly_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav brightly-front-header__k__xLwdIMLPC_la-nav brightly-local-521-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0.5,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:true}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section brightly-front-header__k__xLwdIMLPC_la-nav-section brightly-local-521-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer brightly-front-header__k__DqcL_YF9LKJa-outer brightly-local-522-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container brightly-front-header__k__MqErEXZ17Jma-container brightly-local-523-container gutters-row-lg-2 gutters-row-v-lg-1 gutters-row-md-2 gutters-row-v-md-1 gutters-row-2 gutters-row-v-2" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner brightly-front-header__k__MqErEXZ17Jma-inner brightly-local-523-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-1 gutters-col-md-2 gutters-col-v-md-1 gutters-col-2 gutters-col-v-2">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container brightly-front-header__k__SFXC9Ze09eua-container brightly-local-524-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner brightly-front-header__k__SFXC9Ze09eua-inner brightly-local-524-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align brightly-front-header__k__SFXC9Ze09eua-align brightly-local-524-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php brightly_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row brightly-front-header__k__0xSC3AT64a-container brightly-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  brightly-front-header__k__0xSC3AT64a-image brightly-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   brightly-front-header__k__0xSC3AT64a-alternateImage brightly-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  brightly-front-header__k__0xSC3AT64a-text brightly-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container brightly-front-header__k__55MC4V_sLE-container brightly-local-526-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner brightly-front-header__k__55MC4V_sLE-inner brightly-local-526-inner d-flex h-flex-basis h-px-lg-1 v-inner-lg-1 h-px-md-1 v-inner-md-1 h-px-1 v-inner-1">
								<div class="position-relative wp-block-kubio-column__align brightly-front-header__k__55MC4V_sLE-align brightly-local-526-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container brightly-front-header__k__qti3cFN_5ka-container brightly-local-527-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container brightly-front-header__k__ZEkYpBrx7RAa-container brightly-local-528-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner brightly-front-header__k__ZEkYpBrx7RAa-inner brightly-local-528-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align brightly-front-header__k__ZEkYpBrx7RAa-align brightly-local-528-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php brightly_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
