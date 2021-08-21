<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
/**
 * Description of CorporateGiftings
 *
 * @author Shanthas Designs
 */
class CorporateGiftings extends Controller {
    public function index() 
    {
        return view('corporate-giftings-view');
    }
}
