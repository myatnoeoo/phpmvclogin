<?php
    class APIFunc{
        public static function AuthPathAPI()
        {
        include($_SERVER['DOCUMENT_ROOT'] . '/mvcloginregister/app/config/api.php');
        $ch = curl_init($init_path);
        // Setup request to send json via POST
        $ar = array('user' => $_POST['username'] , 'password' => $_POST['password'] , 'userData' => 'true' );

        $payload = json_encode(array(
            'jsonrpc'=>  '2.0',
            'method'=>  'user.login',

            'params'=> $ar,

            'id'=>  1
        ));
 
        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);

        // Close cURL resource
        curl_close($ch);

        return $result;
        }

    }


?>