<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_plugins/calendar/subscribe.php $
|     $Revision: 11678 $
|     $Id: subscribe.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/

require_once("../../class.php");
include_lan(e_PLUGIN . "calendar/languages/".e_LANGUAGE.".php");

define("PAGE_NAME", EC_LAN_80);
require_once(HEADERF);


if ((USER) && (isset($pref['eventpost_asubs']) && ($pref['eventpost_asubs'] == '1')))
{
$cal_db = new db;			// Probably best to keep this

if (isset($_POST['upsubs']))
{
    $cal_cats = $tp -> toDB($_POST['event_list']);		// IDs of allowed categories
    $cal_subs =  $tp -> toDB($_POST['event_subd']);		// Checkbox results
    $cal_db->db_Delete("event_subs", "event_userid='" . USERID . "'");		// Delete all for this user to start
    foreach($cal_cats as $cal_row)
    {	// Now add in a subscription for each allowed category
        if ($cal_subs[$cal_row])
        {
            $cal_inargs = "0,'" . USERID . "','" . $cal_row . "'";
            $cal_db->db_Insert("event_subs", $cal_inargs);
        } 
        // print $cal_row .  $cal_subs[$cal_row] . "<br>";
    } 
    $caltext = "<table class='r_border' width='97%'>
<tr><td class='r_caption' >" . EC_LAN_130 . "</td></tr>
<tr><td class='r_header3' ><a href='calendar.php'>" . EC_LAN_131 . "</a></tr>
<tr><td class='r_caption' >&nbsp;</td></tr></table>";
} 
else
{
    $caltext = "<form id='calsubs' action='" . e_SELF . "' method='post' >
<table class='r_border' width='97%'>
<tr><td class='r_caption' colspan='3'>" . EC_LAN_125 . "</td></tr>
<tr><td class='r_header2' >" . EC_LAN_126 . "</td><td class='r_header2' >" . EC_LAN_127 . "</td><td class='r_header2' >" . EC_LAN_136 . "</td></tr>"; 
    // Get list of currently subscribed
  $cal_db->db_Select("event_subs", "event_cat", "where event_userid='" . USERID . "'", "nowhere");
  while ($cal_s = $cal_db->db_Fetch())
  {
    extract($cal_s);
    $cal_array[] = $event_cat;
  } // while 

    // Get list of categories that have subscriptions and are visible to this member
  $cal_args = "select * from #event_cat 
	where event_cat_subs>0  and (find_in_set(event_cat_class,'".USERCLASS_LIST."')  OR find_in_set(event_cat_force_class,'".USERCLASS_LIST."'))";
  if ($cal_db->db_Select_gen($cal_args))
  { 
	// echo $cal_args."<br />";
    while ($cal_row = $cal_db->db_Fetch())
    {
      extract($cal_row);
      $caltext .= "<tr><td class='r_header3' style='width:10%;'>";
	  if (check_class($event_cat_force_class))
	  {
	    $caltext .= EC_LAN_126;
	  }
	  else
	  {
	    $caltext .= "<input type='hidden' name='event_list[]' value='" . $event_cat_id . "' />
	    <input type='checkbox' class='tbox' value='1' name='event_subd[$event_cat_id]' " . (in_array($event_cat_id, $cal_array)?"checked='checked' ":"") . " /> </td>";
	  }
	  $caltext .= "<td class='r_header3'>{$event_cat_name}</td><td class='r_header3'>{$event_cat_description}</td></tr>";
    } 
  } 
  else
  {
    $caltext .= "<tr><td class='r_header3' colspan='3'>" . EC_LAN_128 . "</td></tr>";
  } 
  $caltext .= "<tr><td class='r_header3' colspan='3'><input class='tbox' type='submit' value='" . EC_LAN_129 . "' name='upsubs' /></td></tr>";
  $caltext .= "</table></form>";
}
}
else
{
  if (isset($pref['eventpost_asubs']) && ($pref['eventpost_asubs'] == '1'))
  $caltext = EC_LAN_142;	// Register or log in 
  else
  $caltext = EC_LAN_143;	// No facility
} 
$ns->tablerender(EC_LAN_124, $caltext);
require_once(FOOTERF);

?>