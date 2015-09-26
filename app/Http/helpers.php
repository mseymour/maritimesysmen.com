<?php

/**
 * Checks whether a section has been captured yet.
 *
 * @param  string  $section
 * @return bool
 */
function content_for($section)
{
    return array_key_exists($section, app('view')->getSections());
}

function region_year($date = null)
{
  if($date == null) {
    $date = new \DateTime();
  }
  $current_month = (int)$date->format('n');
  if($current_month <= 8) {
    $next_year = (int)$date->format('Y');
    $current_year = $next_year - 1;
  } else {
    $current_year = (int)$date->format('Y');
    $next_year = $current_year + 1;
  }
  return compact('current_year', 'next_year');
}

function date_range_to_str($dtstart, $dtend)
{
    $start         = Carbon\Carbon::instance($dtstart);
    $end           = Carbon\Carbon::instance($dtend);
    $is_full_range = ($start->hour == 0
                      && $start->minute == 0
                      && $start->second == 0
                      && $end->hour == 23
                      && $end->minute == 59
                      && $end->second == 59 );
    $spans_month   = ($start->month != $end->month);
    $spans_year    = ($start->year != $end->year);
    return $start->format('F j<\s\up>S</\s\up>') .
           (($spans_year) ? $start->format(', Y ') : '') .
           ' – '.
           (($spans_month) ? $end->format('F ') : '') .
           $end->format('j<\s\up>S</\s\up>, Y');
}

function html_catchwordify ($string, $words = ['&']) {
    $patterns = array();
    foreach($words as $word)
        $patterns[] = '/('.preg_quote(htmlentities($word)).')/i';

    return preg_replace($patterns, '<span class="catchword">$0</span>', htmlentities($string));
}