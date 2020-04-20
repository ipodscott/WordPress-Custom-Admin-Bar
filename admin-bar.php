
	<?php if (current_user_can('level_10')){ ?>
<link href="/wp-includes/css/dashicons.min.css" rel="stylesheet">
	
	<div class="top-edit-menu">
		
		
		<?php  while(has_sub_field('admin_bar', 'option')): ?>
	       
	      	<?php if(get_row_layout() == "dashboard"): // layout: Content ?>
	      	
		  		<a data-title="<?php the_sub_field('title');?>" class="edit-btn" href="<?php bloginfo('wpurl');?>/wp-admin/"><span class="dashicons dashicons-<?php the_sub_field('dash_icon');?>"></span></a>
		  		
		  	<?php elseif(get_row_layout() == "edit_page"): // layout: Content ?>
		  	
		  		<a data-title="<?php the_sub_field('title');?>" class="edit-btn" href="<?php bloginfo('wpurl');?>/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit"><span class="dashicons dashicons-<?php the_sub_field('dash_icon');?>"></span></a>
	      	
	      	<?php elseif(get_row_layout() == "custom_link"): // layout: Content ?>
	      	
	      	 	<a data-title="<?php the_sub_field('title');?>" class="edit-btn" href="<?php bloginfo('wpurl');?>/wp-admin/<?php the_sub_field('admin_link');?>"><span class="dashicons dashicons-<?php the_sub_field('dash_icon');?>"></span></a>
	       
		    <?php elseif(get_row_layout() == "logout"): // layout: File ?>
	       	       
	      		<a data-title="<?php the_sub_field('title');?>" class="edit-btn" href="/wp-login.php?action=logout"><span class="dashicons dashicons-<?php the_sub_field('dash_icons');?>"></span></a>
	       
	      	<?php endif; ?>
	       
	      <?php endwhile; ?>			 
		
	</div>
	
<style type="text/css">

.top-edit-menu{
	display: flex;
	align-items: center;
	justify-content: center;
	position: absolute;
	top: -46px;
	width: calc(100% - 40px);
	left: 20px;
	text-align: center;
	z-index: 999;
	height: auto;
	border-style: solid;
	border-width: 0 0 15px 0;
	border-color: transparent;
	padding-bottom: 0 0 18px 0;
	border-radius: 0px 0px 6px 6px;
	transition: all 0.5s;
}

.top-edit-menu:hover{
	top: 0px;
	border-width: 0 0 10px 0;
}	

.top-edit-menu .edit-btn:first-child{
	border-radius: 0 0 0 6px;
}

.top-edit-menu .edit-btn:last-child{
	border-radius: 0 0 6px 0;
}



.edit-btn {
    color: #fff !important;
    text-decoration: none !important;
    display: inline-block;
    top: 0;
    left:0;
    background-color: rgba(0, 0, 0, 1);
    transition: all 0.5s;
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 1);
    border-style: solid;
    border-width: 0 1px 1px 1px;
    border-color: #999;
    text-align: center;	
    height: 45px;
    text-align: center;
    opacity: 0.3;
    transition: all 0.5s;
    cursor: pointer;
}


.edit-btn:hover{
    opacity: 1;
    top: 0;
    background-color: #333;
}

.edit-btn.add {
    -webkit-border-radius:0;
    border-radius: 0;
    border-style: solid;
    border-color: #fff;
    text-decoration: none;
    color: #fff;
}

.edit-btn.add-playlist {
    -webkit-border-radius:0;
    border-style: solid;
    border-color: #fff;
    text-decoration: none;
    color: #fff;
}

.edit-btn.settings {
    border-style: solid;
    border-color: #fff;
    text-decoration: none;
    color: #fff;
}

.edit-btn .dashicons {
    display: block;
    position: relative;
    margin: 0 auto;
    color: #999;
    font-size: 24px;
    width: auto;
    padding: 8px 10px 15px 10px;
    white-space: nowrap;
    cursor: pointer;
}

/*Tool Tip*/

[data-title]:hover:after {
    opacity: 1;
    transition: all 0.3s ease 0.3s;
    visibility: visible;
}
[data-title]:after {
    content: attr(data-title);
    background-color: #333;
    border-radius: 6px;
    color: #fff;
    font-size: 14px;
    position: absolute;
    padding: 3px 8px 3px 8px;
    bottom: -2.2em;
    left: 0;
    white-space: nowrap;
    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.79);
    opacity: 0;
    border: 1px solid #999;
    z-index: 99999;
    visibility: hidden;
    border-style: solid;
    border-width: 1px;
    border-color: #999;
}
[data-title] {
    position: relative;
}

</style>	


<?php } ?>
