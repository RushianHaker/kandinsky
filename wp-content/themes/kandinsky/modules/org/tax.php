<?php

class KND_OrgCategory {
    
    public static function setup_starter_data() {
        wp_insert_term(__('Partners', 'knd'), 'org_cat', array('slug' => 'partners'));
        wp_insert_term(__('Homepage Partners', 'knd'), 'org_cat', array('slug' => 'home-partners'));
    }
    
}