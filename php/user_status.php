# This is un-code.


    <?php
	ini_set('error_reporting', E_ALL);
	$mysqliAccount = new mysqli("localhost", "root", "<password>", "AlwaysOnline");
	$resultAccount = $mysqliAccount->query("SELECT * FROM `always_online` WHERE name IN ('{$player}')");
	$Account = $resultAccount->fetch_array(MYSQLI_ASSOC);
	$uuidraw = $Account['uuid'];
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliNetworkLevels = new mysqli("localhost", "root", "<password>", "networklevels");
	$resultNetworkLevels = $mysqliNetworkLevels->query("SELECT * FROM `networklevels` WHERE uuid IN ('{$uuidraw}')");
	$NetworkLevels = $resultNetworkLevels->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliSuperbVote = new mysqli("localhost", "root", "<password>", "superbvote");
	$resultSuperbVote = $mysqliSuperbVote->query("SELECT * FROM `votes` WHERE uuid IN ('{$uuidraw}')");
	$SuperbVote = $resultSuperbVote->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliOnTime = new mysqli("localhost", "root", "<password>", "Ontime");
	$resultOnTime = $mysqliOnTime->query("SELECT * FROM `ontime-players` WHERE uuid IN ('{$uuidraw}')");
	$OnTime = $resultOnTime->fetch_array(MYSQLI_ASSOC);
	$played = $OnTime['playtime'];
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliFriends = new mysqli("localhost", "root", "<password>", "Friends");
	$resultFriends = $mysqliFriends->query("SELECT * FROM `FRIENDS_PLAYER` WHERE UUID IN ('{$uuidraw}')");
	$Friends = $resultFriends->fetch_array(MYSQLI_ASSOC);
	$mil = $Friends['LAST_PLAYED'];
	$lastplay = $mil / 1000;
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliPermissionsEx = new mysqli("localhost", "root", "<password>", "pex");
	$resultPermissionsEx = $mysqliPermissionsEx->query("SELECT * FROM `permissions_inheritance` WHERE child IN ('{$uuidraw}')");
	$PermissionsEx = $resultPermissionsEx->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliKitPvP_Stats = new mysqli("localhost", "root", "<password>", "KitPvP_Stats");
	$resultKitPvP_Stats = $mysqliKitPvP_Stats->query("SELECT * FROM `killstats_data` WHERE playerName IN ('{$player}')");
	$KitPvP_Stats = $resultKitPvP_Stats->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliKitPvPJecon = new mysqli("localhost", "root", "<password>", "KitPvP_jecon");
	$resultKitPvPJecon = $mysqliKitPvPJecon->query("SELECT * FROM `jecon_account` WHERE uuid IN ('{$uuidraw}')");
	$KitPvPJecon = $resultKitPvPJecon->fetch_array(MYSQLI_ASSOC);
	$KitPvPJeconID = $KitPvPJecon['id'];
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliArenaPvPJecon = new mysqli("localhost", "root", "<password>", "ArenaPvP_jecon");
	$resultArenaPvPJecon = $mysqliArenaPvPJecon->query("SELECT * FROM `jecon_account` WHERE uuid IN ('{$uuidraw}')");
	$ArenaPvPJecon = $resultArenaPvPJecon->fetch_array(MYSQLI_ASSOC);
	$ArenaPvPJeconID = $ArenaPvPJecon['id'];
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliArenaPvPJecon2 = new mysqli("localhost", "root", "<password>", "ArenaPvP_jecon");
	$resultArenaPvPJecon2 = $mysqliArenaPvPJecon2->query("SELECT * FROM `jecon_balance` WHERE id IN ('{$ArenaPvPJeconID}')");
	$ArenaPvPJecon2 = $resultArenaPvPJecon2->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliKitPvPJecon2 = new mysqli("localhost", "root", "<password>", "KitPvP_jecon");
	$resultKitPvPJecon2 = $mysqliKitPvPJecon2->query("SELECT * FROM `jecon_balance` WHERE id IN ('{$KitPvPJeconID}')");
	$KitPvPJecon2 = $resultKitPvPJecon2->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliKitPvP_Stats = new mysqli("localhost", "root", "<password>", "KitPvP_Stats");
	$resultKitPvP_Stats = $mysqliKitPvP_Stats->query("SELECT * FROM `killstats_data` WHERE playerName IN ('{$player}')");
	$KitPvP_Stats = $resultKitPvP_Stats->fetch_array(MYSQLI_ASSOC);
	?>
	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliArenaPvP_Stats = new mysqli("localhost", "root", "<password>", "StrikePractice");
	$resultArenaPvP_Stats = $mysqliArenaPvP_Stats->query("SELECT * FROM `stats` WHERE uuid IN ('{$uuidraw}')");
	$ArenaPvP_Stats = $resultArenaPvP_Stats->fetch_array(MYSQLI_ASSOC);
	?>

	<?php
	ini_set('error_reporting', E_ALL);
	$mysqliSurvivalGames = new mysqli("localhost", "root", "<password>", "sg");
	$resultSurvivalGames = $mysqliSurvivalGames->query("SELECT * FROM `sg_` WHERE player_uuid IN ('{$uuidraw}')");
	$SurvivalGames = $resultSurvivalGames->fetch_array(MYSQLI_ASSOC);
	?>
	<?php if ($PermissionsEx['parent'] == "Owner") {
		$pexcolor = "#D9534F";
	}
	if ($PermissionsEx['parent'] == "Admin") {
		$pexcolor = "#AD144D";
	}
	if ($PermissionsEx['parent'] == "Developer") {
		$pexcolor = "#71366B";
	}
	if ($PermissionsEx['parent'] == "Jr.Dev") {
		$pexcolor = "#713677";
	}
	if ($PermissionsEx['parent'] == "Jr.Admin") {
		$pexcolor = "#AD144D";
	}
	if ($PermissionsEx['parent'] == "Builder") {
		$pexcolor = "#27C054";
	}
	if ($PermissionsEx['parent'] == "Moderator") {
		$pexcolor = "#3498C7";
	}
	if ($PermissionsEx['parent'] == "Helper") {
		$pexcolor = "#20667E";
	}
	if ($PermissionsEx['parent'] == "YouTuber") {
		$pexcolor = "#BF8C19";
	}
	if ($PermissionsEx['parent'] == "PRO+") {
		$pexcolor = "#DB1922";
	}
	if ($PermissionsEx['parent'] == "PRO") {
		$pexcolor = "#DF1616";
	}
	if ($PermissionsEx['parent'] == "MVP+") {
		$pexcolor = "#E464E9";
	}
	if ($PermissionsEx['parent'] == "MVP") {
		$pexcolor = "#11E7F0";
	}
	if ($PermissionsEx['parent'] == "VIP+") {
		$pexcolor = "#5EE81C";
	}
	if ($PermissionsEx['parent'] == "VIP") {
		$pexcolor = "#E6771E";
	}
	if ($PermissionsEx['parent'] == "Member") {
		$pexcolor = "gray";
	}
	?>
    
	<?php function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => '年',
        'm' => 'ヶ月',
        'w' => '週間',
        'd' => '日',
        'h' => '時間',
        'i' => '分',
        's' => '秒',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . '' . $v . ($diff->$k > 1 ? '' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(',', $string) . '前' : 'ちょうど今';
}
$ip = $Account['ip'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
$country = mb_strtolower($details->country);
?>


 <?php
mysqli_close($mysqliNetworkLevels);
mysqli_close($mysqliOnTime);
mysqli_close($mysqliPermissionsEx);
mysqli_close($mysqliKitPvP_Stats);
mysqli_close($mysqliKitPvPJecon);
mysqli_close($mysqliArenaPvPJecon);
mysqli_close($mysqliArenaPvPJecon2);
mysqli_close($mysqliKitPvPJecon2);
mysqli_close($mysqliArenaPvP_Stats);
mysqli_close($mysqliSurvivalGames);
?>
