<?php

/**
 * Standardize relative URL to full URL
 */
function getFileUrl($ori_url_str, $category) {
    $url = trim($ori_url_str);
    
    if ($url != "" && 
        substr($url, 0, 4) != "http" && 
        substr($url, 0, 5) != "https") {

        $url = url("/upload/photo/{$category}", $url);
    }

    return $url;
}


function getFilePath($ori_file_link, $type) {
    $path = trim($ori_file_link);

    if ($path != "") {

        // internal file
        if (substr($path, 0, 4) != "http" && 
            substr($path, 0, 5) != "https") {

            $path = "upload/{$type}/{$path}";
        }
    }

    return $path;
}


function formatBytes($bytes, $precision = 2) { 
    $units = array("B", "KB", "MB", "GB", "TB"); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    // Uncomment one of the following alternatives
    $bytes /= pow(1024, $pow);
    // $bytes /= (1 << (10 * $pow)); 

    return round($bytes, $precision) . " " . $units[$pow]; 
} 