<html>
<head>

	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="options.css">

</head>

<body>

	<div class="header">
		<h1 >Catherine McMahon</h1>
	</div>
	
	<div class="navigation">
	<ul>
		<li><a class = "HTML" href="html.html">html</a></li>
		<li><a id = "PHP" href="php.php">php</a></li>
		<li><a id = "JS" href="js.html">js</a></li>
	</ul>
	</div>

	<div class="content">
		<h1>Content</h1>

		<p>
			Algorithms to Implement:
			<select>
			  <option value="integer">Integer</option>
			  <option value="palindrome">Palindrome</option>
			  <option value="list">List</option>
			  <option value="bgcolor">BGColor</option>
			</select>
		</p>

			<form action="form.php" method="post">
			Info Collector?: <input type="text"><br>
			<input type="submit">
		</form>
	</div>

	<div class="footer">
		<p>I'm Catherine, the creator of this aesthetically pleasing and slick website. Enjoy</p>
		<a href="mailto:cmcmahon@headroyce.org">Email</a>
	</div>
</body>
</html>

<?php
   // ONLY PHP code can go here
?>