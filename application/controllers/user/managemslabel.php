<?php 

/**
 * MapIgniter
 *
 * An open source GeoCMS application
 *
 * @package		MapIgniter
 * @author		Marco Afonso
 * @copyright	Copyright (c) 2012, Marco Afonso
 * @license		dual license, one of two: Apache v2 or GPL
 * @link		http://mapigniter.com/
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'controllers/admin/adminmslabel.php';

class Managemslabel extends Adminmslabel {

    public function __construct() {
        parent::__construct();
        
        $this->layout = 'registered';
        $this->ctrlpath = 'user/'.$this->router->fetch_class();
    }
    
    /**
     * Action edit
     * Opens a form for edition of a mapserver label
     * @param string $id 
     */
    public function edit($id)
    {
        if ($id != 'new') {
            if (!$this->database_model->isOwner($this->account, 'mslabel', $id)) {
            //if (!$this->database_model->isOnGroup($this->account, 'ollayer', $id)) {
                return $this->accessDenied();
            }
        }
        parent::edit($id);
    }
    
}