<?php

/* @var $this yii\web\View */

$this->title = 'Create League - Pick \'Em Pro';
?>
	<!-- Page Title -->
	<section id="page-title">
		<div class="container">
			<h2>Create a League</h2>
		</div>
	</section>
	<!-- Form -->
	<section id="create-league-form">
		<div class="container">
			<form action="dashboard.html">
				<fieldset>
					<h3>League Info</h3>
					<p>
						<label for="league-name">League Name
						<input type="text" name="league-name"></label>
					</p>
					<p>
						<label for="league-private">Private League?
						<input type="radio" name="league-private" value="yes"> Yes
						<input type="radio" name="league-private" value="no"> No</label>
					</p>
					<p>
						<label for="league-password">League Password
						<input type="password" name="league-password"></label>
					</p>
					<p>
						<label for="league-password-retype">Retype Password
						<input type="password" name="league-password-retype"></label>
					</p>
					<p>
						<label for="league-max-players">Maximum Players
						<input type="number" name="league-max-players"></label>
					</p>
				</fieldset>
				<fieldset>
					<h3>Game Mode</h3>
					<p>
						<label>
							<strong>Classic Mode</strong>
							This is the classic pick'em game mode where players/teams gain points each week and winners are chosen either weekly or accumulative or both.
							<input type="radio" name="mode" value="classic">
						</label>
					</p>
					<p>
						<label>
							<strong>Versus Mode</strong>
							A fantasy-style league that allows you to match teams/players against each other every week in a win-lose format. The top teams then face off in a playoff bracket all the way to a final showdown in the championship.
							<input type="radio" name="mode" value="versus">
						</label>
					</p>
				</fieldset>
				<fieldset>
					<h3>League Rules</h3>
					<p>
						<label for="non-underdog-win-pts">Points Per Non-Underdog Win</label>
						<input type="number" name="non-underdog-win-pts">
					</p>
					<p>
						<label for="underdog-win-pts">Points Per Underdog Win</label>
						<input type="number" name="underdog-win-pts">
					</p>
					<p>
						<label for="odds-database">Choose Your Odds Database</label>
						<select name="odds-database">
							<option value="pepdb">PEPDB</option>
							<option value="nfl-com">NFL.com</option>
							<option value="espn">ESPN</option>
							<option value="yahoo-fantasy">Yahoo Sports</option>
							<option value="vegas-insider">Vegas Insider</option>
							<option value="cbs-sports">CBS Sports</option>
							<option value="sportsline">Sportsline</option>
							<option value="custom">Custom</option>
						</select>
					</p>
				</fieldset>
				<fieldset class="footer">
					<p>
						<button type="submit" class="green">Create</button>
						<button class="blue">Cancel</button>
					</p>
				</fieldset>
			</form>
		</div>
	</section>
	<!-- Footer -->