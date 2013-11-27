<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BusLocationSystem</title>

		<?php
		session_start();
			require("HeaderProfile.php");
		?>		
	</head>
	
	<body>

    <div class="container">

      <form class="form-signin">
        <h3 class="form-signin-heading">メールアドレスに送信したい<br>　IDにチェックを入れてください</h3>
        <form method="post" action="example.cgi">
        
			<div class="box">
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
			</div>
			
			<div class="box">
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
			</div>
			
			<div class="box">
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
				
				<input type="checkbox" name="example" value="サンプル">　ID-1　田川庄内経由方面　　<br><br>
			</div>
			
			
			
			<div class="clear" />
			
		
		<h3>メールを届ける時間間隔を決めてください</h3>
		<p>
		<INPUT type="text" name="namae">(分)
		</p>

		<a href="#" class="btn btn-large btn-primary">登録する</a>

	</form>	
	<?php
		if(isset($_SESSION['user_id'])) {
			require("BootstrapProfile2.php");
		}else {
			require("BootstrapProfile.php");
		}
	?>			
		
	</body>

</html>