<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

?>
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#users-nav">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="userlist.php" class="navbar-brand"><span class="fa fa-fw fa-users"></span> <?php echo $lang['Users'] ?></a>
	</div>
	<div class="collapse navbar-collapse" id="users-nav">
		<form class="navbar-form navbar-right" id="userlist" method="get" action="userlist.php">
			<div class="form-group">
				<select class="form-control hidden-xs" name="sort">
					<option value="username"<?php if ($sort_by == 'username') echo ' selected' ?>><?php echo $lang['Sort username'] ?></option>
					<option value="registered"<?php if ($sort_by == 'registered') echo ' selected' ?>><?php echo $lang['Sort registered'] ?></option>
					<option value="num_posts"<?php if ($sort_by == 'num_posts') echo ' selected' ?>><?php echo $lang['Sort no of posts'] ?></option>
				</select>
			</div>
			<div class="form-group">
				<div class="input-group">
					<input class="form-control" type="text" name="username" value="<?php echo luna_htmlspecialchars($username) ?>" placeholder="<?php echo $lang['Search'] ?>" maxlength="25" />
					<span class="input-group-btn">
						<button class="btn btn-default btn-search" type="submit" name="search" accesskey="s" /><span class="fa fa-fw fa-search"></span></button>
					</span>
				</div>
			</div>
		</form>
	</div>
</nav>
<?php echo $paging_links ?>

<div class="userlist col-xs-12">
	<div class="row forum-header">
		<div class="col-sm-8 col-xs-9"><?php echo $lang['Username'] ?></div>
		<div class="col-sm-1 align-center hidden-xs"><p class="text-center"><?php echo $lang['Posts table'] ?></p></div>
		<div class="col-sm-3 col-xs-3"><?php echo $lang['Registered table'] ?></div>
	</div>
	<?php draw_user_list() ?>
</div>

<?php echo $paging_links ?>