<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/api/card', function () {
    return 'You pay by credit card!';
});

Route::get('/api/card/{id}', function (string $id) {
    return response()->json([
        'card-name' => 'Abigail',
        'card-cod' => $id,
    ]);
});

Route::post('/api/card/', function (Request $request) {
    $bodyContent = $request->getContent();
    return response($bodyContent, 201);
});