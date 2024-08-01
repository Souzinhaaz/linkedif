<?php  
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $url = "https://";   
    } else  {
        $url = "http://";   
    } 
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    

    // Get the last route
    $url_spliced = explode("/", $url);
    $finalRoute = end($url_spliced);
    $raw_url = str_replace("1", "", $finalRoute);

    $parts = explode('?', $raw_url);



    return $parts[0];