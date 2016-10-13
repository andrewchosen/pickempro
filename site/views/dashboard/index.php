	<section id="page-title">
		<div class="container">
			<h2>Dashboard</h2>
		</div>
	</section>
	<!-- Main Content -->
	<section id="main">
		<section id="leagues">
			<h3>Your Leagues</h3>
			<?php
			foreach ($model as $league) {
				echo "<ul>";
				echo "<li><strong>" . $league->name . "</strong>";
				echo " <a href='/league/{$league->id}'>Select</a></li>";
				echo "</ul>";
			}
			?>
		</section>
		<section id="picks">
				<h3>Your Week 10 Picks</h3>
				<table>
					<tr>
						<th colspan="4">Thursday, November 10th</th>
					</tr>
					<tr>
						<td>15pts</td>
						<td>
							<p><label><input type="radio" name="game1"> Cleveland Browns (3-6)</label></p>
							<p>Underdog(-3)</p>
						</td>
						<td>@</td>
						<td><p><label>Baltimore Ravens (5-4) <input type="radio" name="game1"></label></p></td>
					</tr>
					<tr>
						<th colspan="4">Sunday, November 13th</th>
					</tr>
					<tr>
						<td>14pts</td>
						<td>
							<p><input type="radio" name="game2"> Texans (6-3)</p>
						</td>
						<td>@</td>
						<td>
							<p><label>Jaguars (6-3) <input type="radio" name="game2"><label></p>
							<p>Underdog(-2)</p>
						</td>
					</tr>
					<tr>
						<td>13pts</td>
						<td>
							<p><input type="radio" name="game3"> Broncos (2-7)</p>
							<p>Underdog(-5)</p>
						</td>
						<td>@</td>
						<td>
							<p>Saints (4-5) <input type="radio" name="game3"></p>
						</td>
					</tr>
					<tr>
						<td>12pts</td>
						<td>
							<p><input type="radio" name="game4"> Rams (6-3)</p>
						</td>
						<td>@</td>
						<td>
							<p>@Jets (2-7) <input type="radio" name="game4"></p>
							<p>Underdog(-6)</p>
						</td>
					</tr>
					<tr>
						<td>11pts</td>
						<td>
							<p><input type="radio" name="game5"> Falcons (3-6)</p>
							<p>Underdog(-4)</p>
						</td>
						<td>@</td>
						<td>Eagles (5-4) <input type="radio" name="game5"></td>
					</tr>
				</table>
			</section>
			<aside>
				<section id="admin-menu">
					<h3>Admin Menu</h3>
					<ul>
						<li><a href="">Invite/Accept Teams</a></li>
						<li><a href="">Manage Teams</a></li>
						<li><a href="">League Settings</a></li>
					</ul>
				</section>
				<section id="league-menu">
					<h3>League Menu</h3>
					<ul>
						<li><a href="">Weekly Results</a></li>
						<li><a href="">Schedule</a></li>
						<li><a href="">Team Settings</a></li>
						<li><a href="">Account Settings</a></li>
					</ul>
				</section>
				<section id="scoreboard">
					<h3>League Scoreboard</h3>
					<table>
						<tr>
							<td>Andrew's Team</td>
							<td>270pts</td>
						</tr>
						<tr>
							<td>Justin's Team</td>
							<td>263pts (-7)</td>
						</tr>
						<tr>
							<td>Jake's Team</td>
							<td>197pts (-73)</td>
						</tr>
						<tr>
							<td>Michael's Team</td>
							<td>185pts (-85)</td>
						</tr>
					</table>
				</section>
			</aside>
		</section>
	</section>