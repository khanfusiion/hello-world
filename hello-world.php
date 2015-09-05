<?php

// security

if (!defined ('IN_MYBB')) {
    die('Error: Please make sure IN_MYBB is defined.);
}

// hooks

$plugins->add_hook ('index_start', 'khanfusiion_do_stuff');

// functions

function khanfusiion_do_stuff () {
  str_replace ('<div id="content">', '<div id="content">-khanfusiion-');
}

// info

function khanfusiion_info ()
{
    return array(
        'name'          => 'khanfusiion',
        'description'   => 'A sample MyBB plugin.',
        'website'       => 'http://khanfusiion.me',
        'author'        => 'khanfusiion',
        'authorsite'    => 'http://khanfusiion.me',
        'version'       => '1.0',
        'guid'          => ,
        'codename'      => 'khanfusiion',
        'compatibility' => *
    );
}
