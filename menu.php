<?php $curpage = basename($_SERVER['PHP_SELF']); ?>
<nav>
<ul>
	<li><a href="page1.php" <?php if($curpage == 'page1.php') {echo 'class="active"'; } ?>> <img src="buttom1.png"> </a></li>
    <li><a href="page2.php" <?php if($curpage == 'page2.php') {echo 'class="active"'; } ?>> <img src="buttom2.png"></a></li>
    <li><a href="page3.php" <?php if($curpage == 'page3.php') {echo 'class="active"'; } ?>> <img src="buttom3.png"></a></li>
</ul>
</nav>


