

<?php

class mamurjor_plugin{

    function __construct(){
               
        
    }

  protected function mycustom(){
    add_action('init',array($this,'mamurjor_emp'));
  }

    public function myscript(){
        wp_enqueue_style('myid',plugin_dir_path(__FILE__).'css/admin.css');
    }


   public function myscirptregister(){
        add_action('admin_enqueue_scripts',array($this,'myscript'));
    }

   private function activate(){
    // Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
        
    }
    private function deactivate(){
   
     // Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
    }
    private function uninstall(){
      
       
    }

    function mamurjor_emp(){
        register_post_type('mamurjor_emp',[
                'public'    => true,
                'label'     =>"Emp Info"

        ]);
    }

   
    
}

if(class_exists('mamurjor_plugin')){
    $mamuror_newInfo = new mamurjor_plugin('');

    $mamuror_newInfo->myscirptregister();
   

}

class posttype extends mamurjor_plugin{
    public function mycustom(){
        add_action('init',array($this,'mamurjor_emp'));
      }
}

$cupost = new posttype();
$cupost->mycustom();


register_activation_hook(__FILE__,array($mamuror_newInfo,'activate'));

register_deactivation_hook( __FILE__, array($mamuror_newInfo,'deactivate') );



?>