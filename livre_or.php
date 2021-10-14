<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="stylesheet" href="style.css" />
	<link rel="icon" href="img/logo.ico" />
	<title>Flo's Cafe</title>
</head>
<div id="screen">

	<body>
		<div class="header">
			<div class="navigation-bar">
				<a href="index.html"><img src="img/logo.png" alt="Home" /></a>
				<ul>
					<li><a class="normal" href="carte.html">Carte</a></li>
					<li><a class="normal" href="about.html">A propos</a></li>
					<li><a class="reservation" href="reservation.html">Réservation</a></li>
					<li><a class="active" href="livre_or.php">Livre d'or</a></li>
					<li><a class="normal" href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="main-content">
			<section class="livre_or_section" id="livre_or">
				<div class=container>
					<div class="section_name">
						<h2>Le livre d'or</h2>
					</div>
					<div class="columns">
                        <div class="livre_or_container_0">
                            <h3 class="title">Derniers commentaires</h3>
							<?php
                                include "dbConn.php"; // Using database connection file here
                                $records = mysqli_query($db,"select * from tbl_livreor ORDER BY ID DESC"); // fetch data from database
                                while($data = mysqli_fetch_array($records))
                                {
                            ?>
								<div class="mini_livre_or_container_0">
									<div class="given_rating">
										<div class="rating_given_0">
											<?php echo $data['Rating']; ?>
										</div>
									</div>
									<p><?php echo $data['Message']; ?></p>
									<div id="commenter_name"><?php echo $data['Nom']; ?></div>
								</div>
							<?php
                                }
                            ?>
							<?php mysqli_close($db); // Close connection ?>
                        </div>
                        <div class="livre_or_container_1">
                            <h3 class="title">Ecrire un avis</h3>
							<form name="livreor_form" action="livreor_form.php" method="post" autocomplete="on">

								<!-- NOM -->

								<label for="txtNamec">Nom :</label><br>
								<input type="text" id="txtNamec" name="txtNamec" minlength="1" required><br><br>
								
								<!-- EMAIL-->

								<label for="txtEmailc">Adresse mail :</label>
								<input type="email" id="txtEmailc" name="txtEmailc" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" required><br>

								<!-- RATING -->

								<label for="txtRatingc" >Note :</label>
								<div class="rating" required >
									<input id="star1" name="txtRatingc" type="radio" value="5" class="radio-btn hide">
									<label for="star1">☆</label>
									<input id="star2" name="txtRatingc" type="radio" value="4" class="radio-btn hide">
									<label for="star2">☆</label>
									<input id="star3" name="txtRatingc" type="radio" value="3" class="radio-btn hide">
									<label for="star3">☆</label>
									<input id="star4" name="txtRatingc" type="radio" value="2" class="radio-btn hide">
									<label for="star4">☆</label>
									<input id="star5" name="txtRatingc" type="radio" value="1" class="radio-btn hide" required>
									<label for="star5">☆</label>
									<div class="clear"></div>
								</div><br>

								<!-- COMMENT -->

								<textarea name="txtMessagec" placeholder="Partagez votre expérience..." rows="4" cols="30"></textarea><br>

								<!-- SUBMIT -->	
																
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
								<script src="jquery.js"></script>
								<input type="submit" value="Réserver">
							</form>
                        </div>
                    </div>
				</div>
			</section>
		</div>
	</body>
</div>

</html>