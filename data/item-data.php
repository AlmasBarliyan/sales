<?php
    /* Database setup information */
    $dbhost = 'localhost';  // Database Host
    $dbuser = 'root';       // Database Username
    $dbpass = '';           // Database Password
    $dbname = 'sales';      // Database Name

    /* Connect to the database and select database */
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
    mysql_select_db($dbname);


    $return_arr = array();
    $param = $_GET["term"];

    $fetch = mysql_query("SELECT * FROM cd_material WHERE material_code REGEXP '^$param' or material_name LIKE '%$param%' LIMIT 10");

    /* Retrieve and store in array the results of the query.*/
    while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {

        $row_array['itemCode']          = $row['material_code'];
        $row_array['itemDesc']          = $row['material_name'];
        /*$row_array['itemPrice']         = $row['nicklot'];*/

        array_push( $return_arr, $row_array );
    }

    /* Free connection resources. */
    mysql_close($conn);

    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);

