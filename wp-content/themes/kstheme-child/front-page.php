<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package kstheme
 */

get_header(); ?>

<div class="jumbotron">
      <div class="container">
        <h1><?php bloginfo('title'); ?></h1>
    		<h2><?php bloginfo('description'); ?></h2>
    		<h3>Let's Build Something Together</h3>
    		<div class="contactme"><a href="contact.html">Contact Me</a></div>
      </div> <!-- End container -->
    </div> <!-- End Jumbotron -->

    <div id="skills">
        <div class="skills">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-4">
        				<span class="glyphicon align-center glyphicon-heart"></span>
        				<h3>HTML5/CSS3/JavaScript</h3>
        				<p>Code is where the magic happens. It is what translates beautiful designs into fully functional and delightful websites.</p>
        			</div>
        			<div class="col-md-4">
        				<span class="glyphicon glyphicon-user"></span>
        				<h3>UX Design</h3>
        				<p>Whether mocking up a project in Photoshop or my favorite text-editor, the user is always in mind. Usability isn’t a luxury, it’s a necessity.</p>
        			</div>
        			<div class="col-md-4">
        				<span class="glyphicon glyphicon-phone"></span>
        				<h3>Web Applications</h3>
        				<p>Single page web applications come to life using Backbone.js and Node.js. JavaScript isn’t only for the front-end.</p>
        			</div>
        		</div> <!-- End row -->

        	</div> <!-- End container -->
        </div> <!-- End div class skills -->
    </div>
        <div class="process">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pull-left">
    				<img src="<?php bloginfo('template_directory'); ?>-child/assets/images/process-medium.jpg">
    			</div>
    			<div class="col-md-6 pull-right">
    				<h3>Workflow &amp; Process</h3>
    				<p>Workflow is an important process to every developer. Mine starts with understanding the purpose of a website or a web application. With the multitude of tools available to developers these days, understanding the requirements of a project helps to determine the best tools for each unique project.</p>
    				<p>Once the scope of a project is determined, I develop user stories and sketch designs to create a strong foundation for mockups and prototypes using Photoshop or my favorite text editor.</p>
    				<p>After that, your application or website begins to come alive as I develop it using the most current web technologies available today.</p>
    			</div>
    		</div> <!-- End row -->

    	</div> <!-- End container -->
    </div> <!-- End div class process -->

	<?php while ( have_posts() ) : the_post(); ?>


	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
