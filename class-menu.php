<?php

class menuadmin{

public function menuregister(){
    add_action('admin_menu',array($this,'mymenu'));
}
public function mymenu(){
    add_menu_page('admin_m',
    'Admin Setting',
    'manage_options',
    'admin_m',
    array($this,'myadminsetting'),
    'dashicons-admin-tools',
    99);
}


public function myadminsetting(){
    echo "Allah Mohan";
}
}


$menuadmin = new menuadmin();

$menuadmin->menuregister();


?>