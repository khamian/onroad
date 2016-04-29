
	<section class="navigation">

		<div class="container">

			<div class="row-tight">

				<div class="span1">

					<?php $logo_header = get_field('logo_header', 'option'); ?>

					<?php if( !empty($logo_header) ): ?>

						<div class="logo">

							<a href="<?= SITE_URL; ?>"><img src="<?php echo $logo_header['url']; ?>" alt="<?php echo $logo_header['alt']; ?>"></a>

						</div>

					<?php endif; ?>

				</div>
				<!-- END span1 -->

				<div class="span11">

					<nav>

						<?php dynamic_sidebar('main_menu'); ?>

					</nav>


					<!-- search-panel toggle -->
					<button class="searchbox-toggle"></button>


					<!-- mobile nav toggle-->
					<a class="nav-toggle" href="#">

						<div class="menu-toggle">

							<div class="menu-bars">

								<span class="menu-bar"></span>
								<span class="menu-bar"></span>
								<span class="menu-bar"></span>

							</div>

						</div>
						<!-- END menu-toggle -->

					</a>

				</div>
				<!-- END span11 -->

			</div>

		</div>

	</section>
	<!-- END section navigation -->


	<!-- =================================================
		section mobile-navigation
	================================================== -->
	<section class="mobile-navigation">

		<nav>

			<?php dynamic_sidebar('main_menu'); ?>

		</nav>

	</section>
	<!-- END mobile-navigation -->