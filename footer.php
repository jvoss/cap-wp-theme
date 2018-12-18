								</div>
							</div>
						</div>
						<div class="mainContentBottom"></div>
					</div>
					<div class="contentBorder"></div>
				</div>

			</div>

		</div>

		<div id="footer">
			<div class="page">
				<div class="footerBox1">
				    <?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_column_1' ); ?>
                    <?php else: ?>
                        <div class="footerBoxTitle">Connect With Us</div>
                        <p>
                            <a href="https://www.facebook.com/capnhq/" class="fb">&nbsp;</a>
                            <a href="https://twitter.com/CivilAirPatrol" class="twitter">&nbsp;</a>
                            <a href="https://www.youtube.com/channel/UCCkwx7Ld3SCzDwfsEZN1_xg" class="youtube">&nbsp;</a>
                            <a href="https://www.linkedin.com/company/civil-air-patrol" class="linkedin">&nbsp;</a>
                            <a href="https://plus.google.com/+TXWGCAPorg" class="googlePlus">&nbsp;</a>
                        </p>
                    <?php endif; ?>
				</div>

				<div class="footerBox2">
                    <?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_column_2' ); ?>
                    <?php else: ?>
                        <div class="footerBoxTitle">Footer Column 2</div>
                        <p>
                            This is the content area for the Footer Column 2 Widget.
                        </p>
                    <?php endif; ?>
				</div>

				<div class="footerBox3">
					<?php if ( is_active_sidebar( 'footer_column_3' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                    <?php else: ?>
                        <div class="footerBoxTitle">Footer Column 3</div>
                        <p>
                            This is the content area for the Footer Column 3 Widget.
                        </p>
                    <?php endif; ?>
				</div>

				<div class="footerBox4">
                    <?php if ( is_active_sidebar( 'footer_column_4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_column_4' ); ?>
                    <?php else: ?>
                        <div class="footerBoxTitle">Footer Column 4</div>
                        <p>
                            This is the content area for the Footer Column 4 Widget.
                            It typically contains links to resources around CAP.
                        </p>
                    <?php endif; ?>
                </div>

				<div class="footerBox5">
					<div class="copyright">
					    <p>
					        &copy; <?php print date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>,
					        <?php if (!empty(get_bloginfo( 'description' )) ) : ?>
                                <?php echo get_bloginfo( 'description' ); ?>,
                            <?php endif; ?>
                            Civil Air Patrol. All rights reserved.
                        </p>
                        <p>
                            LINKS OR REFERENCES TO INDIVIDUALS OR COMPANIES DO
                            NOT CONSTITUTE AN ENDORSEMENT OF ANY INFORMATION OR
                            SERVICE YOU MAY RECEIVE FROM SUCH SOURCES.
                        </p>
					</div>
					<div class="footerLinks">
					    <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
					        <ul id="footer-perm-links">
					            <li>
                                    <a href="http://www.capmembers.com" title="CAP Members.com" class="selected">CAP Members.com</a>
                                </li>
                                <li>
                                    <a href="http://www.cap.news" title="CAP.news" class="selected">CAP.news</a>
                                </li>
                                 <li></li>
					        </ul>
                            <?php wp_nav_menu( array('menu' => 'footer-menu', 'theme_location' => 'footer-menu', 'container' => null) ); ?>
                            <ul id="top-ul">
                                <li class="top">
                                    <a href="#top" title="Top">Top</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <ul>
                                <li>
                                    <a href="http://www.capmembers.com" title="CAP Members.com" class="selected">CAP Members.com</a>
                                </li>

                                <li>
                                    <a href="http://www.cap.news" title="CAP.news" class="selected">CAP.news</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="top">
                                    <a href="#top" title="Top">Top</a>
                                </li>
                            </ul>
                        <?php endif; ?>
					</div>
				</div>
			</div>

		</div>

		<div id="printFooter">
			&copy; <?php print date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>,

			<?php if (!empty(get_bloginfo( 'description' )) ) : ?>
			    <?php echo get_bloginfo( 'description' ); ?>,
			<?php endif; ?>

			Civil Air Patrol. All rights reserved.

			<br/>
			LINKS OR REFERENCES TO INDIVIDUALS OR COMPANIES DO NOT CONSTITUTE
			AN ENDORSEMENT OF ANY INFORMATION OR SERVICE YOU MAY RECEIVE FROM
			SUCH SOURCES.
		</div>

		<?php wp_footer(); ?>

	</body>

</html>