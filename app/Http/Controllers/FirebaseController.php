<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
 
class FirebaseController extends Controller
{
    public function store( Request $request)
    {
        $postData=[];
        $postRef = $database->getReference('posts')->push($postData);

    }
}