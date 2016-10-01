<?php

    function data_page($dbc, $id) {

        //Running Querry and storing Result
        $query = "SELECT * FROM pages WHERE id=$id";
        $result = mysqli_query($dbc, $query);
        //converting mysql object into associative array
        $data = mysqli_fetch_assoc($result);

        return $data;


    }



?>
