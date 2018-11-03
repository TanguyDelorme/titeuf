<?php

// DB table to use
$table = 'titeuf';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'categorie', 'dt' => 1 ),
    array( 'db' => 'descriptif', 'dt' => 2 ),
    array( 'db' => 'commentaire', 'dt' => 3 )
);


$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'titeuf',
    'host' => 'localhost'
);

require( 'ssp.class.php' );

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
