<?php
#Configs For Atom CMS

//variables
$site_title = 'AtomCMS 2.0';

//Constants
DEFINE('D_TEMPLATE','template');

//Database Connection
$dbc = mysqli_connect('localhost','dev','thepassword1','atomcms') or die('Cannot connect because : '.mysqli_connect_error());

if( isset ($_GET['page']) ) {

    $pageid = $_GET['page'];

} else{

    $pageid = 1;

}

//Functions
include ('functions/data.php');
include ('functions/template.php');

#Page Setup

 $page = data_page($dbc, $pageid);








?>
