<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:logout.php');
}else{
	$conn = new mysqli('localhost','root','','awt');
	$username = $_SESSION['username'];
	$sql = "select * from users where u_username = '$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>AWT|PHP</title>
		<link rel="stylesheet" type="text/css" href="css/myCss.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/phpjsupper.js"></script>
		<link rel="stylesheet" type="text/css" href="css/dropdown.css">
		<style type="text/css">
		input.transparent{
			background-color: rgba(255,255,255,0.4);
			color: black;
			padding:5px 0px 5px 0px;
			border: none;
		}
		.button{
			padding: 10px;
			color: white;
			font-family: verdana;
			background-color: rgba(255,99,71,1);
			border-radius: 4px;
			border: none;
		}
		.button:hover{
			background-color: rgba(255,80,50,1);
			cursor: pointer;
		}
		table.dbTable{
			border-collapse: collapse;
		}
		table.dbTable,td.dbTable{	
			border: 1px solid black;
		}
	</style>
</head>
<body class="bacImage"> 
	<header class="homePage">
		<div class="headOverlay">
			<center>
				<h1 class="headText" style="padding:7px 7px;">PHP</h1>
			</center>
		</header>
		<?php include('include/headbar.php') ?>
		<div style="display:inline;">
			<section class="html5">
				<a href="#" class='html5' id="pract15">Practicle 15</a>
				<a href="#" class="html5" id="pract16">Practicle 16</a>
				<a href="#" class="html5" id="pract17">Practicle 17</a>
				<a href="#" class="html5" id="pract18">Practicle 18</a>
				<a href="#" class="html5" id="pract19">Practicle 19</a>
				<a href="#" class="html5" id="pract20">Practicle 20</a>
			</section>
			<div class="containerDiv">
				<center>
					<div id="decision" class="practicles" style="display: none;">
						<div>
							<h5>Number is Even or Odd..</h5>
							Enter a number:
							<input class="transparent" type="text" name="number" id="oeNumber">
							<button class="button" name="submit" id="evenOdd" type="submit">Find</button>
							<br>
							<p id="evenOddRes"></p>
						</div>
					</div>
				</center>
				<center>
					<div id="function" class="practicles" style="display: none;">
						<div>
							<h5>Factorial of a Number</h5>
							Enter a number:
							<input class="transparent" type="text" name="number" id="fNumber">
							<button class="button" name="submit" id="fact" type="submit">Factorial</button>
							<br>
							<p id="factRes"></p>
						</div>
					</div>
				</center>
				
					<div id="arrays" class="practicles"  style="display: none;">
						<?php 
							echo "<p>Numeric Array</p>";
							$num = array('vatsal','aarsh','jay'); 
							echo "<pre>";
							print_r($num);
							echo "</pre>";
							echo "<p>Associative Array</p>";
							$asso = array('name' => 'vatsal','age'=>19,'surname'=>'gor' );
							echo "<pre>";
							print_r($asso);
							echo "</pre>";
							echo "<p>MultiDimensional Array</p>";
							$mul = array('name' => 'vatsal','sub'=>array('AWT','AJT','PCD','IS','WNMC'));
							echo "<pre>";
							print_r($mul);
							echo "</pre>";
						?>
					</div>
				
				<center>
					<div id="emails" class="practicles" style="display: none;">
						<div>
							<h5>Send a Mail</h5>
							<table>
								<tr>
									<td>To:</td>
									<td><input type="text" name="to" id="to"></td>
								</tr>
								<tr>
									<td>Subject:</td>
									<td><input type="text" name="subject" id="sub"></td>
								</tr>
								<tr>
									<td>Message:</td>
									<td><textarea class="transparent" type="text" name="msg" id="msg"></textarea></td>
								</tr>
								<tr>
									<center>
										<td colspan="2"><button class="button" id="emailButton">Send</button></td>
									</center>
								</tr>
							</table>
							<p id="emailRes"></p>
						</div>
					</div>
				</center>
				<center>
					<div id="file" class="practicles" style="display: none;">
						<form id="fileUpload" enctype="multipart/form-data">
							<input id="fileBrowse" type="file" name="files">
							<input type="submit" class="button" value="Upload">
						</form>
						<div id="fileResult"></div>
					</div>
				</center>
				<center>
					<div id="db" class="practicles" style="display: none;">
						<button class="button" id="db_insert">Insert</button>
						<button class="button" id="db_rud">View/Update/Delete</button>
						<div id="insert" style="display: none;">
							<br>
							<h3>Insert into DB</h3>
							<form id="db_form">
								<table>
									<tr>
										<td>Student Name: </td>
										<td><input id="s_name" type="text" name="s_name" required></td>
									</tr>
									<tr>
										<td>AJT Marks: </td>
										<td><input id="sm_ajt" type="text" name="sm_ajt" required></td>
									</tr>
									<tr>
										<td>AWT Marks: </td>
										<td><input id="sm_awt" type="text" name="sm_awt" required></td>
									</tr>
									<tr>
										<td>IS Marks: </td>
										<td><input id="sm_is" type="text" name="sm_is" required></td>
									</tr>
									<tr>
										<center><td><input id="db_insert" class="button" type="submit" name="submit" value="Insert"></td></center>
										<center><td><input class="button" type="reset" name="reset" value="Reset"></td></center>
									</tr>
								</table>
							</form>
							<p id="db_form_result"></p>
						</div>
						<div id="rud" style="display: none;">
							<br>
							<h3>View Update Delete</h3>
							<table class="dbTable" >
								<tr >
									<td class="dbTable">Student Name</td>
									<td class="dbTable">AJT Marks</td>
									<td class="dbTable">AWT Marks</td>
									<td class="dbTable">IS Marks</td>
									<td class="dbTable" colspan="2"></td>
								</tr>
								<?php 
								$conn = new mysqli('localhost','root','','awt') ;
								$sql = "select * from practical";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc()){
									?>
									<tr>
										<td class="dbTable">
											<center>
												<input id="<?php echo "s_r_name".$row['p_id'] ?>" type="text" style="width: 60px;" readonly name="s_name" value="<?php echo $row['p_name'] ?>">
											</center>
										</td>
										<td class="dbTable">
											<center>
												<input id="<?php echo "sm_r_ajt".$row['p_id'] ?>" type="text" style="width: 60px;" readonly name="s_name" value="<?php echo $row['p_ajt'] ?>">
											</center>
										</td>
										<td class="dbTable">
											<center>
												<input id="<?php echo "sm_r_awt".$row['p_id'] ?>" type="text" style="width: 60px;" readonly name="s_name" value="<?php echo $row['p_ajt'] ?>">
											</center>
										</td>
										<td class="dbTable">
											<center>
												<input id="<?php echo "sm_r_is".$row['p_id'] ?>" type="text" style="width: 60px;" readonly name="s_name" value="<?php echo $row['p_is'] ?>">
											</center>
										</td>
										<td class="dbTable">
											<center>
												<button class="button" onclick="edit(<?php echo $row['p_id']?>)" id="<?php echo "edit".$row['p_id']?>">Edit</button>
												<button class="button" style="display: none;" onclick="upda(<?php echo $row['p_id']?>)" id="<?php echo "update".$row['p_id'] ?>">Save</button>	
											</center>
										</td>
										<td class="dbTable">
											<center>
												<button  onclick="del(<?php echo $row['p_id'] ?>)" class="button" id="delete">Delete</button>
											</center>
										</td>
									</tr>
									<?php } ?>
								</table>
								<p id="rudResult"></p>
							</div>
						</div>
					</center>
				</div>
			</div>
			<script type="text/javascript" src="js/phpjs.js"></script>
		</body>
		</html>
		<?php 
	}
	?>