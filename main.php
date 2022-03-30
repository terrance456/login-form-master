<?php
   session_start();
?>
<main>
<div class="wrapper-main">
<section class="section-default">

	<?php
	if(isset($_SESSION['userId'])) {
		echo '<p class="login-status">you are logged in!</p>';

	}
	else{
		echo '<p class="login-status">you are logged out!</p>';
		
	}
	?>
</section>
</div>
</main>



    <form action="includes/logout.inc.php" method="post">
      <button type="submit" name="logout-submit">logout</button>
    </form>
