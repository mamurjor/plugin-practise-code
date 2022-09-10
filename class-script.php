

<?php

class mamurjor_plugin_script{

    public function myscript(){
        wp_enqueue_style('myid',plugin_dir_path(__FILE__).'css/admin.css');
    }


    function myscirptregister(){
        add_action('admin_enqueue_scripts',array($this,'myscript'));
    }

    

   
    
}

if(class_exists('mamurjor_plugin_script')){
    $mamuror_newInfo = new mamurjor_plugin_script();

    $mamuror_newInfo->myscirptregister();

}


?>