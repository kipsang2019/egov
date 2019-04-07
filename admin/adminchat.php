<?php include 'header.php' ?>

<h1>Admins chatroom</h1>
<div id="adminchatpanel">
		<!-- chat output -->
		<?php

			//select dbs
			include 'dbcon.php';
			
			$sql = "SELECT * FROM messages ";
			$record = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($record);

			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($record)) {
					echo "<br><br>";
					if ($_SESSION['name'] = $row['name']) {
						if ($row['name'] == 'Admin') {
							echo "<br><br>";
							echo "<div id='adminchats'>";
								echo "<b>".$row['name']."</b><br>". $row['sendtext']."<br><br>". $row['date']."<br><br>";
								
							echo "</div><br><br>";
							
						}else{

							echo "<br><br>";
							echo "<div id='chats'>";
								echo "<b>".$row['name']."</b><br>". $row['sendtext']."<br><br>". $row['date']."<br><br>";
								
							echo "</div><br><br>";

							
					}

						}
								
				}
	
		}

		  ?>

		<!-- chat apk -->
		
		<form action="messages.php" method="POST">
			
			<textarea style="border-radius: 20px;" name="sendtext" placeholder="Reply citizens questions......" cols="40" rows="4"></textarea><br>
			<button class="btn btn-primary" type="submit" name="submit">Send</button>
		</form>

<?php include 'footer.php' ?>