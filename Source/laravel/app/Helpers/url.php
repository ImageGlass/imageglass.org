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
