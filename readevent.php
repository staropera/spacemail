<?php
$start_time = microtime(true);
require_once('auth.php');
require_once('config.php');
require_once('loadclasses.php');

if (session_status() != PHP_SESSION_ACTIVE) {
  echo('<p>You dont have permissions to view calendar events.</p>');
  die();
}

if (!isset($_GET['eid']) || !isset($_GET['cid'])) {
  echo('<p>Required information missing.</p>');
  die();
}

if (!isset($_SESSION['characterID']) || $_SESSION['characterID'] != $_GET['cid']) {
  echo('<p>You dont have permissions to view this event.</p>');
  die();
}

function idToName($id, $dict) {
  if (isset($dict[$id])) {
    return $dict[$id];
  } else {
    return 'Unknown';
  }
}

$characterID = $_GET['cid'];
$eventID = $_GET['eid'];

$esicalendar = new ESICALENDAR($characterID);
$event = $esicalendar->getEvent($eventID);
if ($esicalendar->getError()) {
    echo('Error fetching event: '.$esimail->getMessage());
    exit;
} 

$html = '<div class="row" style="display: none"><div class="col-xs-12"><span class="h5">'.$event['title'].'</span></div></div>
           <div class="well well-sm"><div class="row">
             <div class="col-xs-5 col-md-3 col-lg-2">Date: </div><div class="col-xs-7 col-md-9 col-lg-10">'.gmdate('Y/m/d', strtotime($event['date'])).'</div>
             <div class="col-xs-5 col-md-3 col-lg-2">Time: </div><div class="col-xs-7 col-md-9 col-lg-10">'.gmdate('H:i', strtotime($event['date'])).'</div>
             <div class="col-xs-5 col-md-3 col-lg-2">Duration: </div><div class="col-xs-7 col-md-9 col-lg-10">'.($event['duration']).'</div>
             <div class="col-xs-5 col-md-3 col-lg-2">Creator: </div><div class="col-xs-7 col-md-9 col-lg-10"><span class="evechar" eveid="'.$event['owner_id'].'">'.$event['owner_name'].'</span></div>
           </div></div>
           <div class="well well-sm"><div class="row">
             <div class="col-xs-12"><p>'.EVEHELPERS::mailparse($event['text']).'</p></div>
           </div></div>
         </div>';
echo(preg_replace( "/\r|\n/", "", $html));
?>
