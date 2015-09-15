<body>
	<video id="video" width="640" height="480" autoplay></video>
	<button id="snap">Snap Photo</button>
	<canvas id="canvas" width="640" height="480" style="border: 5px solid black;"></canvas>
	<form method="POST" action="try.php">
		<input type="hidden" name="object" value="" id="object">
		<input type="submit" name="deconnexion" value="Me déconnecter">
	</form>
	<canvas id="canvas2" width="640" height="480" style="border: 5px solid black;"></canvas>
</body>