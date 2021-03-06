<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Stock
 */

$social_links = cs_get_option('social_links');
?>

	<footer id="colophon" class="site-footer">
		<div class="container">

			<?php if(is_active_sidebar('stock_footer')) : ?>
					<div class="row">
						<?php dynamic_sidebar('stock_footer'); ?>
					</div>		
			<?php endif; ?>

			<div class="row">
				<div class="col-md-12">

					<div class="stock-footer-bottom">
						<div class="row">

							<div class="col-md-4">
								<?php esc_html_e( 'Copyright © 2017 FairDealLab - All Rights Reserved', 'stock_mr' ); ?>
							</div>

							<div class="col-md-4">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'footer-menu'								
									) );
								?>
							</div>

                            <div class="col-md-4">

                                <?php if( !empty( $social_links )) : ?>
                                    <div class="social-icons">

                                        <?php foreach($social_links as $social) : ?>
                                            <a href="<?php echo $social['link']; ?>" target="_blank">
                                                <i class="<?php echo $social['icon']; ?>"></i>
                                            </a>
                                        <?php endforeach; ?>

                                    </div>
                                <?php endif; ?>

                                    <!--
                                    <div class="social-icons">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                	-->
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
