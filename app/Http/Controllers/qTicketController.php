<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{

    public function store(ProductStoreRequest $request): RedirectResponse
    {   
        Ticket::create($request->validated());
            
        return redirect()->route('createTicket')
                ->with('success', 'Ticket created successfully.');
    }
}
