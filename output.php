<?php

//echo 'hello';
//sleep( 5 );
//echo 'world';


//
//$file = fopen( './sample.csv', 'r' );
//
//while ( $data = fgets( $file ) ) {
//    echo $data;
//    ob_flush();
//    flush();
//    sleep( 1 );
//
//}


function streamFile( $file ) {
    $fp = fopen( $file, 'rb' );

    while ( ( $line = fgets( $fp ) ) !== false )
        yield rtrim( $line, "\r\n" );

    fclose( $fp );
}


foreach ( streamFile( './sample.csv' ) as $line ) {
    ob_flush();
    flush();
    echo $line;
    sleep( 1 );
}


//for ( $i = 1; $i <= 10; $i++ ) {
//    printf( "%d%s", $i, '<br>' );
//    ob_flush();
//    flush();
//    sleep( 1 );
//}


//ob_flush();
//flush();
//sleep( 5 );
