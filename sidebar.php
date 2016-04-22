<div class="sidebar"> 
	<ul>
		<li>
			<h2>Archives</h2>
			<ul>
				<?php $args = array(
					'type'            => 'monthly'
				);
				wp_get_archives($args); ?>   
			</ul>
		</li>
	</ul> 
</div>