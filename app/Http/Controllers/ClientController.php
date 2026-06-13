<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    // Show all clients
    public function index()
    {
        $clients = Client::where('user_id', Auth::id())
                        ->latest()
                        ->paginate(10);

        return view('clients.index', compact('clients'));
    }

    // Show create form
    public function create()
    {
        return view('clients.create');
    }

    // Save new client
    public function store(Request $request)
    {
        $request->validate([
            'company_name'   => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email'          => 'nullable|email|max:255',
            'phone'          => 'nullable|string|max:20',
            'address'        => 'nullable|string',
            'status'         => 'required|in:active,inactive,blocked',
            'notes'          => 'nullable|string',
        ]);

        Client::create([
            'user_id'        => Auth::id(),
            'company_name'   => $request->company_name,
            'contact_person' => $request->contact_person,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'address'        => $request->address,
            'status'         => $request->status,
            'notes'          => $request->notes,
        ]);

        return redirect()->route('clients.index')
                        ->with('success', 'Client added successfully!');
    }

    // Show single client
    public function show(Client $client)
    {
        // $this->authorizeClient($client);
        // return view('clients.show', compact('client'));
         abort(404);
    }

    // Show edit form
    public function edit(Client $client)
    {
        $this->authorizeClient($client);
        return view('clients.edit', compact('client'));
    }

    // Update client
    public function update(Request $request, Client $client)
    {
        $this->authorizeClient($client);

       $validated = $request->validate([
            'company_name'   => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email'          => 'nullable|email|max:255',
            'phone'          => 'nullable|string|max:20',
            'address'        => 'nullable|string',
            'status'         => 'required|in:active,inactive,blocked',
            'notes'          => 'nullable|string',
        ]);

        $client->update($validated);

        return redirect()->route('clients.index')
                        ->with('success', 'Client updated successfully!');
    }

    // Delete client
    public function destroy(Client $client)
    {
        $this->authorizeClient($client);
        $client->delete();

        return redirect()->route('clients.index')
                        ->with('success', 'Client deleted successfully!');
    }

    // Security: make sure client belongs to logged in user
    private function authorizeClient(Client $client)
    {
        if ($client->user_id !== Auth::id()) {
            abort(403);
        }
    }
}