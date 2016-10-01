<?php
#Configs For Atom CMS

//variables
$site_title = 'AtomCMS 2.0';


//Database Connection
$dbc = mysqli_connect('localhost','dev','thepassword1','atomcms') or die('Cannot connect because : '.mysqli_connect_error());


if( isset ($_GET['page']) ) {

    $pageid = $_GET['page'];

} else{

    $pageid = 1;

}


#Page Setup
//Running Querry and storing Result
$query = "SELECT * FROM pages WHERE id=$pageid";
$result = mysqli_query($dbc, $query);
//converting mysql object into associative array
$page = mysqli_fetch_assoc($result);









?>
