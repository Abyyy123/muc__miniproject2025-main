<?php

use Illuminate\Support\Facades\Route;

Route::prefix('proposal')->group(function() {
    
    Route::get('/', 'ProposalController@index'); 

    Route::get('/create', 'ProposalController@create')->name('proposal.create');
    Route::post('/', 'ProposalController@store')->name('proposal.store');
});