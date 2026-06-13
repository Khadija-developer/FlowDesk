<x-app-layout>

    <x-slot name="pageTitle">
        Clients
    </x-slot>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">Clients</h2>
            <p class="text-muted mb-0">
                Manage all your clients from one place.
            </p>
        </div>

        <a href="{{ route('clients.create') }}" class="btn btn-primary">
            + Add Client
        </a>

    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body text-center py-5">

            <h5>No Clients Found</h5>

            <p class="text-muted">
                Start by adding your first client.
            </p>

            <a href="{{ route('clients.create') }}" class="btn btn-success">
                Create First Client
            </a>

        </div>

    </div>

</x-app-layout>