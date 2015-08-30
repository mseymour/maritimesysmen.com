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