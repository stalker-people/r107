<?php
/*==================================Address Book 1.0=============================
|  author - Sunout; Geo, http://e107.compolys.ru, support@compolys.ru		|
|  http://e107.ru, http://e107.ru, http://e107.org                            	|
|  GNU General Public License (http://gnu.org)					|
====================================19.11.2011=================================*/
// ----------------------------------------Plugin info------------------------------
$lan_file = e_PLUGIN."abook/languages/".e_LANGUAGE.".php";
include_once((file_exists($lan_file) ? $lan_file : e_PLUGIN."abook/languages/English.php"));

$eplug_name = LAN_AB_PLUG_NAME;				// Name Plugin
$eplug_version = "1.0";					// Version plugin
$eplug_author = "OSGroup";				// Author
$eplug_url = "http://r107.pro";				// Web address author and supprot
$eplug_email = "support@r107.pro";			// Mail author
$eplug_description = LAN_AB_PLUG_ABOUT;			// About plugin
$eplug_compatible = "e107v0.7++";			// Version e107
$eplug_readme = "doc/readme.txt";			// Leave blank if no readme file
$eplug_folder = "abook"; 				// Name of the plugin's folder
$eplug_menu_name = LAN_AB_PLUG_NAME; 			// Mane of menu item for plugin
$eplug_conffile = "admin_config.php"; 			// Name of the admin configuration file
$eplug_logo = "images/icon_32.png";			// Logo plugin
$eplug_icon = $eplug_folder."/images/icon_32.png"; 	// Icon image and caption text
$eplug_icon_small = $eplug_folder."/images/icon_16.png";// Logo plugin
$eplug_caption = LAN_AB_PLUG_EDIT;
$eplug_link = TRUE; 					// Create a link in main menu (yes=TRUE, no=FALSE)
$eplug_link_name = LAN_AB_PLUG_NAME;
$eplug_link_url = e_PLUGIN."abook/abook.php";		// Start file of plugin
$eplug_link_perms = "Everyone"; 			// Everyone, Guest, Member, Admin
$eplug_done =  LAN_AB_PLUG_INSTALL; 			// Text to display after plugin successfully installed
$eplug_prefs = array(					// List of preferences
    "ab_days" => "30",
    "ab_prolong" => "15",
    "ab_sizepicbig" => "600",
    "ab_sizepicsmall" => "200",
    "ab_showcols" => "2",
    "ab_showrows" => "40"
    );
$eplug_table_names = array("ab_cat", "ab_gnl");		// List of table names
$eplug_tables = array( // List of sql requests to create tables
//=============== table Addresss Book Config ======================// 
"create table ".MPREFIX."ab_cat (
cat_id int auto_increment not null,
cat_name varchar(200),
cat_desc varchar(250),
cat_icon varchar(200),
primary key(cat_id)
) ENGINE=MyISAM;",
//=============== table Address Book Config ======================//
"create table ".MPREFIX."ab_gnl (
gnl_id int auto_increment not null,
gnl_cat varchar(250),
gnl_name varchar(250),
gnl_office varchar(250),
gnl_city varchar(100),
gnl_address varchar(100),
gnl_site varchar(250),
gnl_mail varchar(200),
gnl_icq varchar(200),
gnl_user varchar(250),
gnl_conname varchar(50),
gnl_conphone varchar(50),
gnl_logo varchar(100),
gnl_img varchar(100),
gnl_devision blob,
gnl_desc blob,
gnl_check_admin varchar(10),
primary key(gnl_id)
) ENGINE=MyISAM;"
);

// upgrading ...
$upgrade_add_prefs = "";
$upgrade_remove_prefs = "";
$upgrade_alter_tables = "";
//array("ALTER TABLE `".MPREFIX."mycconf` ADD `adlength` VARCHAR(250);", "ALTER TABLE `".MPREFIX."mycads` ADD `pdate` VARCHAR(250);");
$eplug_upgrade_done = LAN_AB_PLUG_UPGRADE;
?>