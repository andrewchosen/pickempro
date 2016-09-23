<?php

/* @var $this yii\web\View */

$this->title = 'Pick \'Em Pro';
?>
<!-- Banner -->
    <section id="banner">
        <div class="container">
            <h2>Banner</h2>
            <article>
                <p>Imagine a <strong>Pick'Em League</strong> that requires <strong>Strategy</strong></p>
                <p class="actions"><a class="button green">Get Started</a><a class="button blue">Learn More</a></p>
            </article>
        </div>
    </section>
    <!-- How It's Different -->
    <section id="how-its-different">
        <div class="container">
            <h2>How It's Different</h2>
            <article>
                <h3>Underdogs</h3>
                <p>Give bonus points for amount of underdogs a team picks or per underdog victory or both! Also the ability to set minimum underdogs a team can take each week, encouraging strategic thinking as opposed to going with the odds.</p>
            </article>
            <article>
                <h3>Versus Mode</h3>
                <p>Create a fantasy-style league that allows you to match teams/players against each other every week in a win-lose format. The top teams then face off in a playoff bracket all the way to a final showdown in the championship.</p>
            </article>
            <article>
                <h3>Customization</h3>
                <p>Instead of everybody relying on different odds from different places, choose the expert(s) that you want for your league. Or create your own odds and vote them in each week.</p>
            </article>
        </div>
    </section>
    <!-- Join or Create -->
    <section id="join-or-create">
        <article id="join-league">
            <h2>Join a League</h2>
            <form>
                <fieldset>
                    <p>
                        <label for="name">League Name
                        <input type="text" name="name"></label>
                    </p>
                    <p>
                        <label for="password">Password(if private)
                        <input type="password" name="password"></label>
                    </p>
                </fieldset>
                <p><button class="orange">Continue</button></p>
            </form>
        </article>
        <article id="create-league">
            <h2>Create League</h2>
            <form>
                <p>
                    <label for="name">What do you want to call your league?
                    <input type="text" name="name"></label>
                </p>
                <p><a href="create-league.html" class="button green">Continue</a></p>
            </form>
        </article>
    </section>