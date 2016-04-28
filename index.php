<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>API Target retrieval</title>
        <meta 
    </head>
    <body>
        <pre>
        <?php
        // put your code here
        
        $data_o = file_get_contents("lastUsed.json");
        $data = json_decode($data_o);
        
        print_r($data)
        
        ?>
        </pre>
    </body>
</html>
