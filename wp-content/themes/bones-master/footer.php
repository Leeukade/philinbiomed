			<footer id="footer" class="footer main_content" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<div class="wpb_text_column wpb_content_element ">
						<div class="wpb_wrapper" style="text-align: center;">
							<h2 style="font-size: 1.4em;"><strong>CONTACT US</strong></h2>
							<p>Le lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
						</div>
					</div>
					<div class="footer_display vc_row wpb_row vc_inner vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-3">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<div>
												<h3>ADDRESS</h3>
												<p>PhilInBioMed
												<br>Thomas Pradeu
												<br>UMR5164
												<br>Université de Bordeaux
												<br>146 rue Léo Saignat
												<br>33076 Bordeaux
												</p>
											</div>
											<div>
												<div>
													<h3>PHONE</h3>
													<p>+33 0 00 00 00</p>
												</div>
												<div>
													<h3>EMAIL</h3>
													<p>email@mail.com</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wpb_column vc_column_container vc_col-sm-6">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<P><?php echo do_shortcode( '[contact-form-7 id="114" title="Formulaire de contact 1"]' ); ?></P>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wpb_column vc_column_container vc_col-sm-3">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<div>
												<h3>FOLLOW US</h3>
												<a class="twitter-timeline" href="https://twitter.com/philbiomed" data-tweet-limit="1">Tweets by philbiomed</a>
												<!-- <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>  -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | <a href="#">Terms</a></p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</body>

</html> <!-- end of site. what a ride! -->
