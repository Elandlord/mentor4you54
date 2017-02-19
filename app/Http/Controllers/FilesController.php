<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function jongereFolder(){
    	   
    	$file= public_path(). "/files/mentor-zoeken.pdf";

    	$headers = array(
              'Content-Type: application/pdf',
            );

    	return response()->download($file, 'Folder - ik zoek een mentor.pdf', $headers);
    }

    public function mentorFolder(){

    	$file= public_path(). "/files/mentor-worden.pdf";

    	$headers = array(
              'Content-Type: application/pdf',
            );
    	
    	return response()->download($file, 'Folder - ik wil mentor worden.pdf', $headers);

    }
}