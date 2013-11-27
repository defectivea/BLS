<div class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php
			if ($_SERVER['REQUEST_URI'] == "Index.php") {
				echo '<a class="navbar-brand active" href="Index.php">Home</a>';
			}
			else {
				echo '<a class="navbar-brand" href="Index.php">Home</a>';
			}
			?>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<?php
				// 運行状況の表示
				if ($_SERVER['REQUEST_URI'] == "/BlsServer/remake/BusStatus.php") {
					echo '<li class="active"><a href="BusStatus.php">運行状況</a></li>';
				}
				else {
					echo '<li><a href="BusStatus.php">運行状況</a></li>';
				}
				
				// バス位置表示 の表示
				if ($_SERVER['REQUEST_URI'] == "/BlsServer/remake/LocationView.php") {
					echo '<li class="active"><a href="LocationView.php">バス位置表示</a></li>';
				}
				else {
					echo '<li><a href="LocationView.php">バス位置表示</a></li>';
				}

				if ($_SERVER['REQUEST_URI'] == "/BlsServer/remake/SignUp.php") {
					echo '<li class="active"><a href="SignUp.php">新規会員登録</a></li>';
				}
				else {
					echo '<li><a href="SignUp.php">新規会員登録</a></li>';
				}

				if ($_SERVER['REQUEST_URI'] == "/BlsServer/remake/SignIn.php") {
					echo '<li class="active"><a href="SignIn.php">サインイン</a></li>';
				}
				else {
					echo '<li><a href="SignIn.php">サインイン</a></li>';
				}
			?>
		</ul>
	</div>
</div>
