<?php

function getTotalDays($date_str) {
    $now = new DateTime();
    $datetime = new DateTime($date_str);
    $diff = $datetime->diff($now);

    return $diff->days;
}


function formatDateTime($date_str, $format_str = "", $include_time = true) {
    $datetime = new DateTime($date_str);

    if ($format_str == "") {
        $format_str = getDateTimeFormat($include_time);
    }

    return $datetime->format($format_str);
}


function getDateTimeFormat($include_time = true) {
    if ($include_time) {
        return "M j Y g:i A";
    }

    return "j M Y";
}
