<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package kstheme
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer">
      <div class="container text-center">
        <ul class="footer">
        	<li><a href="index.html">Home</a></li>
          	<li><a href="work.html">Work</a></li>
          	<li><a href="contact.html">Contact</a></li>
          	<li><a href="resume.pdf">Resume</a></li>
          	<li><a href="https://twitter.com/kathrynrefined" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-twitter-white.png"></a></li>
          	<li><a href="https://github.com/kathrynstoddard" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-github-white.png"></a></li>
          	<li><a href="http://www.linkedin.com/in/kathrynpdx/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-linkedin-white.png"></a></li>
        </ul>
				<div class="site-footer-inner col-sm-12">
					<p>&copy;2014 Kathryn Stoddard</p>

					</div><!-- close .site-info -->
      </div>
    </div><!-- End footer -->
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
