<?php

    function data_page($dbc, $id) {

        //Running Querry and storing Result
        $query = "SELECT * FROM pages WHERE id=$id";
        $result = mysqli_query($dbc, $query);
        //converting mysql object into associative array
        $data = mysqli_fetch_assoc($result);

        $data['no_html'] = strip_tags($data['body']);

        if ($data['body'] == $data['no_html']) {

            $data['body_formated'] = '<p>'.$data['body'].'</p>';

        } else {
            $data['body_formated'] = $data['body'];
        }

        return $data;


    }



?>
