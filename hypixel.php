<?php
    require_once 'HypixelPHP.php'; /* Hypixel PHP Location */
    use HypixelPHP\HypixelPHP;
    $options = [
        'api_key'    => '#########-####-####-####-############',
        'cache_time' => 600,
        'timeout'    => 2,
        'logging'    => false,
        'debug'      => false,
    ];
    
        /* Interaction with HypixelAPI / Hypixel PHP */
    $hypixel = new HypixelPHP($options);
    $usernames = $_GET['name'];
    $player = $hypixel->getPlayer(['unknown' => $usernames ]);
    if ($player === null || $player->getStats() === null) {

        $errorInfo = $hypixel->getUrlError();
        $error = true;
        header('Location: error.php');  
    } else {
        $error       = false;
        $username    = $player->getName();
        $rank        = $player->getRank(false);
        $displayName = $player->getFormattedName();
        $mainStatistics = $player->getStats();
        
        /* Player Stats */
        $networklevel = $player->get('networkLevel') + 1; 
        $multiplier = $player->getMultiplier();
        $achievements = $player->getAchievementPoints();
        $guilds = $player->get('guild');
        $eula = $player->get('achievementPoints', false, WIP);
        
        
        /* Mega Walls Stats */
        $mwStats = $mainStatistics->getGame('Walls3');
        $mwKills      = $mwStats->get('kills', false, 0);
        $mwWins = $mwStats->get('wins', false, 0);
        $mwLosses = $mwStats->get('losses', false, 0);
        $mwCoins = $mwStats->get('coins', false, 0);
        $mwDeaths = $mwStats->get('deaths', false, 0);
        $mwFinals = $mwStats->get('finalKills', false, 0);
        $mwChosenClass = $mwStats->get('chosen_class', false, 0);
        $mwKD = $mwKills/$mwDeaths;
        $mwWinLoss= $mwWins/$mwLosses;
        
           /* Mega Walls Choosen Class */
            }
            if ($mwChosenClass === "Herobrine") {
                $kitkills = $mwStats->get('kills_Herobrine', false, 0);
                $kitfinals= $mwStats->get('finalKills_Herobrine', false, 0);
            } elseif ($mwChosenClass === "Skeleton") {
                $kitkills = $mwStats->get('kills_Skeleton', false, 0);
                $kitfinals= $mwStats->get('finalKills_Skeleton', false, 0);
            } elseif ($mwChosenClass === "Zombie") {
                $kitkills = $mwStats->get('kills_Zombie', false, 0);
                $kitfinals= $mwStats->get('finalKills_Zombie', false, 0);
            } elseif ($mwChosenClass === "Spider") {
                $kitkills = $mwStats->get('kills_Spider', false, 0);
                $kitfinals= $mwStats->get('finalKills_Spider', false, 0);
            } elseif ($mwChosenClass === "Enderman") {
                $kitkills = $mwStats->get('kills_Enderman', false, 0);
                $kitfinals= $mwStats->get('finalKills_Enderman', false, 0);
            } elseif ($mwChosenClass === "Arcanist") {
                $kitkills = $mwStats->get('kills_Arcanist', false, 0);
                $kitfinals= $mwStats->get('finalKills_Arcanist', false, 0);
            } elseif ($mwChosenClass === "Golem") {
                $kitkills = $mwStats->get('kills_Golem', false, 0);
                $kitfinals= $mwStats->get('finalKills_Golem', false, 0);
            } elseif ($mwChosenClass === "Shaman") {
                $kitkills = $mwStats->get('kills_Shaman', false, 0);
                $kitfinals= $mwStats->get('finalKills_Shaman', false, 0);
            } elseif ($mwChosenClass === "Dreadlord") {
                $kitkills = $mwStats->get('kills_Dreadlord', false, 0);
                $kitfinals= $mwStats->get('finalKills_Dreadlord', false, 0);
            } elseif ($mwChosenClass === "Blaze") {
                $kitkills = $mwStats->get('kills_Blaze', false, 0);
                $kitfinals= $mwStats->get('finalKills_Blaze', false, 0);
            } elseif ($mwChosenClass === "Pigman") {
                $kitkills = $mwStats->get('kills_Pigman', false, 0);
                $kitfinals= $mwStats->get('finalKills_Pigman', false, 0);
            } else {
                  $kitkills = 'No class selected';
                  $kitfinals = 'No class selected';
            }

       /* Blitz Stats */
       $blitzStats = $mainStatistics->getGame('HungerGames');
       $blitzWins = $blitzStats->get('wins', false, 0);
       $blitzCoins = $blitzStats->get('coins', false, 0);
       $blitzKills = $blitzStats->get('kills', false, 0);
       $blitzDeaths = $blitzStats->get('deaths', false, 0);
       $blitzWinsTeam = $blitzStats->get('wins_teams', false, 0);
       $blitzKD = $blitzKills/$blitzDeaths;
       $blitzWinLoss = ($blitzWins + $BlitzWinsTeam)/$blitzDeaths;
       
       /* Blitz Coins Goal */
       $blizCoinsGoal = 0;
       if ($blitzCoins < 100) {
           $blitzCoinsGoal = 100;
       } elseif ($blitzCoins < 1000) {
           $blitzCoinsGoal = 1000;
       } elseif ($blitzCoins < 2000) {
           $blitzCoinsGoal = 2000;
       } elseif ($blitzCoins < 4000) {
           $blitzCoinsGoal = 4000;
       } elseif ($blitzCoins < 16000) {
           $blitzCoinsGoal = 16000;
       } elseif ($blitzCoins < 50000) {
           $blitzCoinsGoal = 50000;
       } elseif ($blitzCoins < 100000) {
           $blitzCoinsGoal = 100000;
       } elseif ($blitzCoins < 250000) {
           $blitzCoinsGoal = 250000;
       } else {
           $blitzCoinsGoal = 1000000;
       }
       
       $blitzWork = ($blitzCoins/$blitzCoinsGoal)*100;
       $blitzCoinsTillGoal = ($blitzCoinsGoal-$blitzCoins)/(200*$multiplier);
      

	    
?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                <meta charset="utf-8">
                <title>Hypixel API | Statistics</title>
                <meta name="generator" content="Bootply" />
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <!--[if lt IE 9]>
                        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <link href="css/styles.css" rel="stylesheet">
        </head>
        <body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hypixel API</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="search.php">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">

  <div class="text-center">
    <h1>Search Results</h1>
    <p class="lead">Here are your results, make sure to add them to your secret diary!<br>
          <?php
      echo '<h3>Player: ' . $displayName . '</h3>';
          ?>
          <?php
      echo '<img src="https://mcapi.ca/avatar/3d/'.$usernames.'/70">';
      ?>
  </div>
  </br>
  <p>
        <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Player Information</h3>
        </div>
        <div class="panel-body">
     <?php
            echo '<p><b>Rank:</b> ' . $rank;
            echo '</br><b>Network Level:</b> '.$networklevel;
            echo '</br><b>Multiplier:</b> '.$multiplier.'x';
            echo '</br><b>Achievement Points:</b> WIP';
            echo '</br><b>Guild:</b> WIP';
            echo '</br>'.$statusHypixel;
            echo '</p>'; // Close the p-tag.
    ?>
        </div>
      </div>
        </p>
  <p>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Mega Walls</h3>
        </div>
        <div class="panel-body">
      <?php
            echo '<p><b>Kills:</b> ' . $mwKills;
            echo '</br><b>Finals:</b> '.$mwFinals;
            echo '<br/><b>Deaths:</b> ' . $mwDeaths;
            echo '<br><b>Kill/Death Ratio</b> '.round($mwKD, 2);
            echo '<br>';
            echo '<br><b>Wins:</b> ' .$mwWins;
            echo '<br><b>Loses:</b> ' .$mwLosses;
            echo '<br><b>Win/Loss Ratio</b> ' .round($mwWinLoss, 2);
            echo '<br><b>Coins:</b> '.$mwCoins;
            echo '<br>';
            echo '</br><b>Current Class:</b> '.$mwChosenClass;
            echo '</br><b>Class Kills:</b> '.$kitkills;
            echo '</br><b>Class Finals:</b> '.$kitfinals;
            echo '</p>';
    ?>
        </div>
      </div>
  </p>
    <p>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Blitz Survival Games</h3>
        </div>
        <div class="panel-body">
      <?php
            echo '<p><b>Kills:</b> ' . $blitzKills;
            echo '<br><b>Deaths:</b> ' . $blitzDeaths;
            echo '<br><b>Kill/Death Ratio:</b> ' .round($blitzKD, 2);
            echo '<br>';
            echo '<br><b>Wins:</b> ' . $blitzWins;
            echo '<br><b>Team Wins:</b> ' . $blitzWinsTeam;
            echo '<br><b>Win/Loss Ratio:</b> ' .round($blitzWinLoss, 2);
            echo '<br><b>Coins:</b> ' . $blitzCoins;
            echo '</p>';
       ?>
       	    <p><b>Progress till NEXT upgrade:</b></p>
	    <div class="progress progress-striped">
	  <?php
	    echo '<div class="progress-bar progress-bar-info" style="width:'.$blitzWork.'%"></div>';
	  ?>
		</div>
	<?php	
	    echo '<center><p> '.$blitzCoins.' / '.$blitzCoinsGoal.' Coins - '.round($blitzWork, 2).'% - (Roughly) '.round($blitzCoinsTillGoal, 0).' wins left.</p></center>';
        ?>
        </div>
      </div>
  </p>
	  <?php
	       echo '<p class="text-center">Link to page: <a href="http://hypixel.nickm.pw/hypixel.php?name='.$usernames.'">http://hypixel.nickm.pw/hypixel.php?name='.$usernames.'</a></p>';
	  ?>
	  <br>
</div><!-- /.container -->
        <!-- script references -->
                <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
        </body>
</html>
