<?php
                $cep = $_POST['cep'];
                $url = "https://ws.apicep.com/cep/$cep.json";
                $results = json_decode(file_get_contents($url));
                     // var_dump($result);
                echo '<pre>', var_dump($results) , '</pre>';
                exit;
?>