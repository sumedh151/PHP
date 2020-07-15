<?php

    mysqli_connect("localhost", "root", "");		//used to connect to database.
    //syntax: mysqli_connect(host,username,password,dbname,port,socket);

    if (mysqli_connect_error()) {
        
        echo "There was an error connecting to the database";
        
    } else {
        
        echo "Database connection successful!";
        
    }


?>