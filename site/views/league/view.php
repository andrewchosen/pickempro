<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Teams;

/* @var $this yii\web\View */
/* @var $model app\models\League */

$this->title = $model[0]->name;
$this->params['breadcrumbs'][] = ['label' => 'Leagues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <section id="page-title">
        <div class="container">
            <h2><?php Html::encode($this->title) ?></h2>
        </div>
    </section>

    <section id="league">
        <div class="container">

        <?php print_r($model[1]); ?>

        <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model[0]->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model[0]->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        </div>
    </section>

    <!-- Main Content -->
    <section id="main">
        <section id="picks">
                <h3>Your Week 10 Picks</h3>
                <table>
                <?php
                $i = count($model[1]);
                echo "<tr>";
                echo    "<th colspan='4'>Thursday</th>";
                echo "</tr>";
                foreach ($model[1] as $match) {
                    if ($match->day == "Thursday")
                    {
                        echo "<tr>";
                        echo "  <td>" . $i . " pts</td>";
                        echo "  <td><p><label><input type='radio' name='game1'>" . $match->away_team . "</label></p></td>";
                        echo "  <td>@</td>";
                        echo "  <td><p><label>" . $match->home_team . "<input type='radio' name='game1'></label></p></td>";
                        echo "</tr>";
                        $i--;
                    }
                }
                echo "<tr>";
                echo    "<th colspan='4'>Sunday</th>";
                echo "</tr>";
                foreach ($model[1] as $match){
                    if ($match->day == "Sunday")
                    {
                        echo "<tr>";
                        echo "  <td>" . $i . " pts</td>";
                        echo "  <td><p><label><input type='radio' name='game1'>" . $match->away_team . "</label></p></td>";
                        echo "  <td>@</td>";
                        echo "  <td><p><label>" . $match->home_team . "<input type='radio' name='game1'></label></p></td>";
                        echo "</tr>";
                        $i--;
                    }
                }
                echo "<tr>";
                echo    "<th colspan='4'>Monday</th>";
                echo "</tr>";
                foreach ($model[1] as $match){
                    if ($match->day == "Monday")
                    {
                        echo "<tr>";
                        echo "  <td>" . $i . " pts</td>";
                        echo "  <td><p><label><input type='radio' name='game1'>" . $match->away_team . "</label></p></td>";
                        echo "  <td>@</td>";
                        echo "  <td><p><label>" . $match->home_team . "<input type='radio' name='game1'></label></p></td>";
                        echo "</tr>";
                        $i--;
                    }
                }
                ?>
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
