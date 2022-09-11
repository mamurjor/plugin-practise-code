        <?php

        class menuadmin{

            public $mianUrl;

            

            public function __construct(){
                $this->mianUrl=plugin_basename(__FILE__);
            }

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
        require_once(plugin_dir_path(__FILE__).'inc/admin-setting.php');
        }


        }


        $menuadmin = new menuadmin();

        $menuadmin->menuregister();

      



        ?>