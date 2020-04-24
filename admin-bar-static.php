<?php if (current_user_can('level_10')){ ?>
<link href="/wp-includes/css/dashicons.min.css" rel="stylesheet">

	<div class="top-edit-menu">
		<a data-title="Edit Page" class="edit-btn" href="<?php bloginfo('wpurl');?>/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit"><span class="dashicons dashicons-edit"></span></a>
		<a data-title="New Page" class="edit-btn" href="<?php bloginfo('wpurl');?>/wp-admin/post-new.php?post_type=page"><span class="dashicons dashicons-admin-page"></span></a>
		<a data-title="Reusable Blocks" class="edit-btn" href="<?php bloginfo('wpurl');?>/wp-admin/edit.php?post_type=wp_block"><span class="dashicons dashicons-controls-repeat"></span></a>
		<a data-title="Dashboard" class="edit-btn settings" href="<?php bloginfo('wpurl');?>/wp-admin/"><span class="dashicons dashicons-dashboard"></span></a>
		<a data-title="Custom Fields" class="edit-btn settings" href="<?php bloginfo('wpurl');?>/wp-admin/edit.php?post_type=acf-field-group"><span class="dashicons dashicons-welcome-widgets-menus"></span></a>
		<a data-title="Theme Settings" class="edit-btn settings" href="<?php bloginfo('wpurl');?>/wp-admin/admin.php?page=theme-general-settings"><span class="dashicons dashicons-admin-generic"></span></a>
	</div>
	
<style type="text/css">

.top-edit-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
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
    border-radius: 0 0 6px 6px;
    transition: all .5s
}

.top-edit-menu:hover {
    top: 0;
    border-width: 0 0 10px 0
}

.top-edit-menu .edit-btn:first-child {
    border-radius: 0 0 0 6px
}

.top-edit-menu .edit-btn:last-child {
    border-radius: 0 0 6px 0
}

.edit-btn {
    color: #fff!important;
    text-decoration: none!important;
    display: inline-block;
    top: 0;
    left: 0;
    background-color: #000;
    transition: all .5s;
    -webkit-box-shadow: 0 0 5px #000;
    border-style: solid;
    border-width: 0 1px 1px 1px;
    border-color: #999;
    text-align: center;
    height: 45px;
    text-align: center;
    opacity: .3;
    transition: all .5s;
    cursor: pointer
}

.edit-btn:hover {
    opacity: 1;
    top: 0;
    background-color: #333
}

.edit-btn.add {
    -webkit-border-radius: 0;
    border-radius: 0;
    border-style: solid;
    border-color: #fff;
    text-decoration: none;
    color: #fff
}

.edit-btn.add-playlist {
    -webkit-border-radius: 0;
    border-style: solid;
    border-color: #fff;
    text-decoration: none;
    color: #fff
}

.edit-btn.settings {
    border-style: solid;
    border-color: #fff;
    text-decoration: none;
    color: #fff
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
    cursor: pointer
}

[data-title]:hover:after {
    opacity: 1;
    transition: all .3s ease .3s;
    visibility: visible
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
    box-shadow: 0 0 1px rgba(0, 0, 0, .79);
    opacity: 0;
    border: 1px solid #999;
    z-index: 99999;
    visibility: hidden;
    border-style: solid;
    border-width: 1px;
    border-color: #999
}

[data-title] {
    position: relative
}

</style>


<?php } ?>
