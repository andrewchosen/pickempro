<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Teams;

/* @var $this yii\web\View */
/* @var $model app\models\League */

$this->title = $model['league']->name;
$this->params['breadcrumbs'][] = ['label' => 'Leagues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<pre>
<?php //print_r($model['league']); die(); ?>
</pre>

    <section id="page-title">
        <div class="container">
            <h2><?php echo Html::encode($this->title) ?></h2>
        </div>
    </section>

    <!-- Main Content -->
    <section id="main">
        <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>
        <section id="picks">
                <h3>Your Week 6 Picks</h3>
                <table>
                <?php
                $count = count($model['match']);
                echo "<tr>";
                echo    "<th colspan='4'>Thursday</th>";
                echo "</tr>";
                for ($i = 0; $i < count($model['match']); $i++) {
                    $teams = $model['teams'][$i];
                    $awayTeam = $teams->awayTeam->location . " " . $teams->awayTeam->team_name . " (" . $teams->awayTeam->current_wins . "-" . $teams->awayTeam->current_losses . ")";
                    $homeTeam = $teams->homeTeam->location . " " . $teams->homeTeam->team_name . " (" . $teams->homeTeam->current_wins . "-" . $teams->homeTeam->current_losses . ")";
                    if ($model['match'][$i]->day == "Thursday")
                    {
                        echo "<tr>";
                        echo "  <td>" . $count . " pts</td>";
                        echo "  <td><p><label><input type='radio' name='game".$count."'>" . $awayTeam . "</label></p></td>";
                        echo "  <td>@</td>";
                        echo "  <td><p><label>" . $homeTeam . "<input type='radio' name='game".$count."'></label></p></td>";
                        echo "</tr>";
                        $count--;
                    }

                }
                echo "<tr>";
                echo    "<th colspan='4'>Sunday</th>";
                echo "</tr>";
                for ($i = 0; $i < count($model['match']); $i++) {
                    $teams = $model['teams'][$i];
                    $awayTeam = $teams->awayTeam->location . " " . $teams->awayTeam->team_name . " (" . $teams->awayTeam->current_wins . "-" . $teams->awayTeam->current_losses . ")";
                    $homeTeam = $teams->homeTeam->location . " " . $teams->homeTeam->team_name . " (" . $teams->homeTeam->current_wins . "-" . $teams->homeTeam->current_losses . ")";
                    if ($model['match'][$i]->day == "Sunday")
                    {
                        echo "<tr>";
                        echo "  <td>" . $count . " pts</td>";
                        echo "  <td><p><label><input type='radio' name='game".$count."'>" . $awayTeam . "</label></p></td>";
                        echo "  <td>@</td>";
                        echo "  <td><p><label>" . $homeTeam . "<input type='radio' name='game".$count."'></label></p></td>";
                        echo "</tr>";
                        $count--;
                    }

                }
                echo "<tr>";
                echo    "<th colspan='4'>Monday</th>";
                echo "</tr>";
                for ($i = 0; $i < count($model['match']); $i++) {
                    $teams = $model['teams'][$i];
                    $awayTeam = $teams->awayTeam->location . " " . $teams->awayTeam->team_name . " (" . $teams->awayTeam->current_wins . "-" . $teams->awayTeam->current_losses . ")";
                    $homeTeam = $teams->homeTeam->location . " " . $teams->homeTeam->team_name . " (" . $teams->homeTeam->current_wins . "-" . $teams->homeTeam->current_losses . ")";
                    if ($model['match'][$i]->day == "Monday")
                    {
                        echo "<tr>";
                        echo "  <td>" . $count . " pts</td>";
                        echo "  <td><p><label><input type='radio' name='game".$count."'>" . $awayTeam . "</label></p></td>";
                        echo "  <td>@</td>";
                        echo "  <td><p><label>" . $homeTeam . "<input type='radio' name='game".$count."'></label></p></td>";
                        echo "</tr>";
                        $count--;
                    }

                }
                ?>
                </table>
            </section>
            <aside>
                <section id="admin-menu">
                    <h3>Admin Menu</h3>
                    <ul>
                        <li><a href="">Invite/Accept Teams</a></li>
                        <li><a href="">Manage Teams</a></li>
                        <li><?= Html::a('League Settings', ['update', 'id' => $model['league']->id]) ?></li>
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
