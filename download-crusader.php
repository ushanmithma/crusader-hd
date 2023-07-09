<?php

	$connection = mysqli_connect('localhost', 'root', '', 'download_count');

	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_errno());
	}

	$download_date = date("Y-m-d");
	$download_ip = $_SERVER['REMOTE_ADDR'];

	if (isset($_POST['download-button'])) {

		header('Location: magnet:?xt=urn:btih:c391934b9699487dd6a151ba49fb913203d50c69&dn=Stronghold%20Crusader%20Extreme%20%5bfpgtorrents%5d&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.zer0day.to%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2710%2fannounce&tr=udp%3a%2f%2feddie4.nl%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.zer0day.to%3a1337%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.internetwarriors.net%3a1337%2fannounce');
		$select_query = "SELECT download_ip FROM shc_download WHERE download_ip = '{$download_ip}'";
		$result_set = mysqli_query($connection, $select_query);

		if ($result_set) {
			// query succesful

			if (mysqli_num_rows($result_set) == 0) {
				$insert_query = "INSERT INTO shc_download (download_date, download_ip) VALUES ('{$download_date}', '{$download_ip}')";
				mysqli_query($connection, $insert_query);
			}
		}
	}

	$query = "SELECT id FROM shc_download";
	$get_count = mysqli_query($connection, $query);
	$counter = mysqli_num_rows($get_count);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Download - Crusader HD</title>
	<link rel="icon" href="./image/greatest-lords-logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="./styles/common.css">
	<link rel="stylesheet" href="./styles/download-styles.css">
</head>
<body>
	<div class="chd-wrapper clearfix">
		<p>© | FireFly Studios</p>
	</div><!--.chd-wrapper-->
	<div class="chd-main clearfix">
		<div class="chd-name">
			<img src="./image/site-logo.png" alt="Web Site Logo">
		</div><!--.chd-name-->
		<div class="chd-logo clearfix">
			<img src="./image/chd-logo.jpg" alt="Crusader HD Logo">
		</div><!--.chd-logo-->
		<div class="chd-nav-bar clearfix">
			<ul>
				<a href="index.php"><li>Home</li></a><a style="background: maroon; color: #ffffff;" href="download-crusader.php"><li>Download</li></a><a href="play-crusader.php"><li>How To Play</li></a><a href="about-crusader.php"><li>About</li></a>
			</ul>
		</div><!--.chd-nav-bar-->
	</div><!--.chd-main-->
	<div class="chd-game-head">
		<h1>System Requirements</h1>
	</div><!--.chd-game-head-->
	<div class="chd-sys-req">
		<ul>
			<li>OS: Windows XP/Vista/7/8/10</li><li>Processor: Pentium® III 500 mhz</li><li>Memory: 128 MB RAM</li><li>Graphics: 64MB DirectX 8.1 Compatible</li><li>DirectX: Version 8.1</li><li>Hard Drive: 850 MB available space</li><li>Sound Card: DirectX 8.1 Compatible</li><li>Additional Notes: GameRanger software will be installed for mutiplayer matchmaking support</li>
		</ul>
	</div><!--.chd-sys-req-->
	<h1 class="chd-download-content-head">Stronghold Crusader HD <br>+ <br>You Download Today</h1>
	<div class="chd-download-content">
		<h2 class="chd-download-content-define">Stronghold Crusader HD updates the classic castle building game from Firefly Studios with high definition graphics, allowing generals to view an entire battlefield on a single screen.</h2>
		<p>The sequel to the classic Stronghold, Stronghold Crusader HD moves from Europe to the Middle East, introducing fiendish AI opponents, new units, new characters, 4 historical campaigns and over 100 unique skirmish missions.</p>
		<p>Stronghold Crusader HD features several campaigns documenting the First, Second and Third Crusades, as well as conflicts within the individual Crusader states. Battles such as Nicea, Heraclea, siege of Antioch, Krak des Chevaliers and the Siege of Jerusalem all feature, as do the Crusader Trails from the Stronghold Warchest and Stronghold Crusader Extreme.</p>
		<p>Both Stronghold Crusader and Stronghold Crusader Extreme are included in Stronghold Crusader HD.</p>
		<p>Extreme plays exactly like the original Stronghold Crusader, only with a few additions. The unit cap has been increased from 1000 to a staggering 10,000 troops, special Tactical Powers such as the Arrow Volley can be used and new buildings make their appearance alongside the Crusader Extreme skirmish trail.</p>
		<p>With new high resolution graphics players also have more control over their soldiers than ever before. The new HD battlefield view allows you to zoom out and play in real-time, with the whole map on one screen. Advance on the castle gates while flanking the enemy from behind, feign retreat and lead your foe into a deadly trap or just sit back and watch the destruction unfold.</p>
	</div><!--.chd-download-content-->
	<div class="d_count">
		<h3>Downloads <?php echo $counter; ?></h3>
	</div><!--.d_count-->
	<div class="chd-download-task clearfix">
		<div class="chd-download-butt">
			<form action="download-crusader.php" method="post">
				<button type="submit" name="download-button">Download</button>
			</form>
		</div><!--.chd-download-task-->
		<div class="chd-devol">
			<img src="./image/firefly-studios-logo.png" alt="FireFly Studios Logo">
		</div><!--.chd-devol-->
	</div><!--.chd-download-task-->
	<div class="chd-footer clearfix">
		<p class="chd-footer-left">© CRUSADER-HD.com</p>
		<p class="chd-footer-right">Powered By Greatest Lord<sup>®</sup></p>
	</div><!--.chd-footer-->
</body>
</html>