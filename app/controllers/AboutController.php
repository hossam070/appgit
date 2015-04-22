<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AboutController extends BaseController {
    
    public function showAbout()
    {
        return View::make('about');
    }
    
    public function showSubject($theSubject)
    {
        return $theSubject. ' content';
    }
    
    public function showDirections()
    {
        $theURL = URL::route('directions');
        return "DIRECTIONS go to this URL: $theURL";
    }
    
}