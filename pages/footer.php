<footer class="footer-basic-centered">

			<p class="footer-company-motto">Task Manager</p>

			<p class="footer-links">
				
         
         <?php 
			if (isset($_SESSION["userID"])) {
				echo '<a href="index.php?page=all_tasks&action=all">My Tasks</a>  -  ';
				echo '<a href="index.php?page=show_account&action=show">My Profile</a>  -  ';
				echo '<a href="index.php?page=homepage&action=logout">Logout</a>    ';
			}
				else {
					echo '<a href="index.php">Home</a>  -  ';
					echo '<a href="index.php?page=userlogin&action=login">Login</a>';
				
			}
				// if session active then show logout ?>
			</p>

			<p class="footer-company-name">TaskManager &copy; 2017</p>

		</footer>

	</body>

</html>