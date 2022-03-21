<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email($data) {
        
      \Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('srilathagoud11@gmail.com', 'enquiry')->subject
            ('survey results submitted');
         $message->from('srilathagoud11@gmail.com','enquiry');
      });
     
   }
  
}