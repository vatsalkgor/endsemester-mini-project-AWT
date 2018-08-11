		<nav>
			<ul style="display:inline;">
				<li><a class="navLink" href="AWT_Home.php">
					Home
				</a>
			</li>
			<li><a class="navLink" href="AWT_Html5.php">
				HTML5
			</a>
		</li>
		<li>
			<a class="navLink" href="AWT_PHP.php">
				PHP
			</a>
		</li>
		<li>
			<a class="navLink" href="AWT_Css.php">
				CSS3
			</a>
		</li>
		<li>
			<a class="navLink" href="AWT_JS.php">Advanced JS</a>
		</li>
		<li>
			<a class="navLink" href="AWT_Advance.php">Advance Practical</a>
		</li>
	</ul>
	<ul class="dropdownImage" style="display:inline;">
		<li style="float:right;">
			<div class="dropdown">
				<img src="<?php echo $row['u_image'] ?>" height="30px" width="30px" style="border-radius: 50%;
				padding:0px;">
				<div class="dropdown-content">
					<ul>
						<li>
							<a class="navLink" style="background-color: transparent;font-size: 15px;" href="profile.php">Profile</a>
						</li>
						<li style="display: block;">
							<a class="navLink" style="background-color: transparent;font-size: 15px;" href="changePassword.php">Change password</a>
						</li>
						<li>
							<a class="navLink" style="background-color: transparent;font-size: 15px;" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
	<ul style="display: inline;">
		<li style="float: right;">
			Welcome <?php echo $row['u_firstname'] ?>
		</li>
	</ul>
</nav>