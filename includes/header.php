
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<img src="img/gitam.jpg" alt="GITAM" height="60" width="60">
		<a href="#" class="logo" style="font-size:25px; padding: 12px; width: 340px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars" style="padding: 2px;"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<img src="img/gitam.jpg" alt="GITAM" height="60" width="60">
		<a href="#" class="logo" style="font-size: 25px; padding: 12px; width: 340px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>