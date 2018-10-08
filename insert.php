<?
    require ('db.php');
    //$json_url = "https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_joke";
    //$result = file_get_contents($json_url);
    //echo $result;
    
       echo "<pre>";
       //print_r($data);
       echo "</pre>";
    //$randomJoke = array()
    $singledata = array ();

    while (count($singledata) < 57){
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
           );
           
           
           $json_url = "https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_ten";
           $data= file_get_contents($json_url,false,stream_context_create($arrContextOptions));
    
           //echo $json;
           $data = json_decode($data, TRUE);
    foreach ($data as $value){
        if (array_search($value, $singledata)== false){
            array_push($singledata, $value);
        } 
    }
    }
    echo "<pre>";
    //print_r($singledata);
    echo "</pre>";
    // foreach($data as $row){
       foreach ($singledata as $row) {
            $JokeId = $row['id'];
            $setup = $row['setup'];
            $punchline = $row['punchline'];
            $sql = "INSERT INTO jokes (setup, punchline, joke_id)
                 VALUES ('$setup', '$punchline', '$JokeId')";
            mysqli_query($connection, $sql);
            
            
        } 

    
?>