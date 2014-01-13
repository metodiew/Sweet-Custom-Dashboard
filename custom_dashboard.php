<?php
/**
 * Our custom dashboard page
 */

/** WordPress Administration Bootstrap */
require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>
<div class="wrap about-wrap">

	<h1><?php _e( 'Welcome to Your Custom Dashboard' ); ?></h1>
	
	<div class="about-text">
		<?php _e( 'Heading' ); ?>
	</div>
	
	<h2 class="nav-tab-wrapper">
		<a href="#tab-1" class="nav-tab nav-tab-active">
			<?php _e( 'Tab 1' ); ?>
		</a>
		<a href="#tab-2" class="nav-tab">
			<?php _e( 'Tab 2' ); ?>
		</a>
		<a href="#tab-3" class="nav-tab">
			<?php _e( 'Tab 3' ); ?>
		</a>
	</h2>
	
	<div id="tab-1" class="tab">
		<h3><?php _e( 'Heading' ); ?></h3>
	
		<div class="feature-section images-stagger-right">
			<?php echo '<img src="' . plugins_url( '/example-logo.jpg' , __FILE__ ) . '" alt="logo" class="image-50" /> '; ?>
			
			<h4><?php _e( 'Risus Consectetur Elit Sollicitudin' ); ?></h4>
			
			<p>
				<?php _e( 'Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.' ); ?>
			</p>

			<h4><?php _e( 'Mattis Justo Purus' ); ?></h4>
			
			<p>
				<?php _e( 'Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.' ); ?>
			</p>
		</div>
	</div><!-- end of #tab-1 -->

	<div id="tab-2" class="tab">
		<h3><?php _e( 'Second Tab here' ); ?></h3>
	
		<div class="feature-section images-stagger-right">
			<h4><?php _e( 'Risus Consectetur Elit Sollicitudin' ); ?></h4>
			
			<p>
				<?php _e( 'Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.' ); ?>
			</p>
	
			<h4><?php _e( 'Example links' ); ?></h4>
			<p>
				<a href="#">Click me</a>
			</p>
			<p>
				<a href="#">Click me</a>
			</p>
			<p>
				<a href="#">Click me</a>
			</p>
		</div>
	</div><!-- end of #tab-2 -->
	
	<div id="tab-3" class="tab">
		<h3><?php _e( 'Third Tab here' ); ?></h3>
	
		<div class="feature-section images-stagger-right">
			<h4><?php _e( 'Risus Consectetur Elit Sollicitudin' ); ?></h4>
			<p>
				<?php _e( 'Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.' ); ?>
			</p>
	
			<h4><?php _e( 'Unordered List Items' ); ?></h4>
			<ul>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
			</ul>
			
			<h4><?php _e( 'Ordered List Items' ); ?></h4>
			<ol>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
			</ol>
		</div>
	</div><!-- end of #tab-3 -->
</div><!-- end of .wrap about-wrap -->

<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
	$( '.tab' ).hide();
	$( '.tab:first' ).show();
	//$( '.nav-tab-wrapper a:first').addClass( 'nav-tab-active' ); // probably won't needed if you have active class in desired tab button

	$( '.nav-tab-wrapper a' ).click( function( e ) {
		e.preventDefault();
		
		var activeTab = $( this ).attr( 'href' );

		$( '.nav-tab-wrapper a').removeClass( 'nav-tab-active' );
		$( this ).addClass( 'nav-tab-active' );
		$( '.tab' ).hide();
		$( activeTab ).fadeIn();
	});
});
</script>

<?php 
// TODO: Not sure if this is needed?
//include( ABSPATH . 'wp-admin/admin-footer.php' );