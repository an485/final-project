

                
<!--Footer-->
<footer class="page-footer center-on-small-only stylish-color-dark">

    <!--Footer Links-->
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
                <h5 class="title mb-4 mt-3 font-bold">Task Manager</h5>
                <p>Create, Edit, and Manage ToDo Task items from an intuitive and easy to use interface.</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
       
                  <ul>
         <?php 
			if (isset($_SESSION["userID"])) {
				echo '<li><a href="index.php?page=all_tasks&action=all">My Tasks</a></li>';
				echo '<li><a href="index.php?page=show_account&action=show">My Profile</a></li>';
				echo '<li><a href="index.php?page=homepage&action=logout">Logout</a></li>';
			}
				else {
					echo '<li><a href="index.php">Home</a></li>';
					echo '<li><a href="index.php?page=userlogin&action=login">Login</a></li>';
				
			}
				// if session active then show logout ?>
		</ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold ">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <ul>
            <li>
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li><a href="index.php?page=userlogin&action=login" class="btn btn-danger btn-rounded">Sign up!</a></li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="social-section text-center">
        <ul>

            <li><a class="btn-floating btn-sm btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-sm btn-dribbble"><i class="fa fa-dribbble"> </i></a></li>

        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
                
</body>
</html>