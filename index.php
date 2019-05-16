<?php include "header.php"?>


<section class="main-container">
	<div class="main-wrapper">
		<?php

			if(isset($_SESSION['u_uid'])){
				echo '<h2>Upload files</h2><br>
					<form action="upload.php" method="POST" enctype="multipart/form-data">
						<input type="file" name="file">
						<button type="submit" name="submit">Upload</button>
					</form>';
			}
		?>
	</div>
</section>

<?php include "footer.php"?>
