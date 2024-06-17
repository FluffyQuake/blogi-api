<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DefaultController extends Controller
{
    private function lurescape($limit) {
        $response = Http::get('https://lurescape.matlikofficial.com/api/fish?limit=' . $limit);

        return $response->json();
    } 

    private function phone($limit) {
        $response = Http::get('https://api.tak21vakkum.itmajakas.ee/api/phone?limit=' . $limit);

        return $response->json();
    } 

    private function mannicoon($limit) {
        $response = Http::get('https://mannicoon.com/api/cats?limit=' . $limit);

        return $response->json();
    }

    public function index() {
        
        $limit = request()->get('limit') ?? '';

        if ($limit == 0) {
            $limit = '';
        }

        if (request()->get('whatapi') == 'lurescape') {
            $response = $this->lurescape($limit);
        } else if (request()->get('whatapi') == 'mannicoon'){
            $response = $this->mannicoon($limit);
        } else if (request()->get('whatapi') == 'phone'){
            $response = $this->phone($limit);                        
        } else {
            $response = response()->json('vali api palun', 400);
        }

        return $response;
    }
} 
