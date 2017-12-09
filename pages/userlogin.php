<?php include('header.php') ?>
<h2><?php include('message.php'); ?><br><br></h2>
<h2>User Login</h2>

<form action="index.php?page=show_account&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>


</form>
</body>
</html>