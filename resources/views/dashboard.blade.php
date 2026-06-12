<x-app-layout>
    <x-slot name="pageTitle">Dashboard</x-slot>
<h3 class="fw-bold">Welcome back, {{ Auth::user()->name }} 👋</h3>

<p class="text-muted">
Manage your clients, projects and invoices from one place.
</p>
    <!-- Stats Cards -->
    <div class="row g-4 mb-4">

        <!-- Total Clients -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="rounded-3 p-3" style="background:#ede9fe;">
                        <i class="bi bi-people fs-4" style="color:#6366f1;"></i>
                    </div>
                    <div>
                        <div class="text-muted" style="font-size:13px;">Total Clients</div>
                        <div class="fw-bold fs-4">0</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Projects -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="rounded-3 p-3" style="background:#dbeafe;">
                        <i class="bi bi-folder fs-4" style="color:#3b82f6;"></i>
                    </div>
                    <div>
                        <div class="text-muted" style="font-size:13px;">Total Projects</div>
                        <div class="fw-bold fs-4">0</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Tasks -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="rounded-3 p-3" style="background:#fef9c3;">
                        <i class="bi bi-check2-square fs-4" style="color:#eab308;"></i>
                    </div>
                    <div>
                        <div class="text-muted" style="font-size:13px;">Pending Tasks</div>
                        <div class="fw-bold fs-4">0</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="rounded-3 p-3" style="background:#dcfce7;">
                        <i class="bi bi-cash-stack fs-4" style="color:#22c55e;"></i>
                    </div>
                    <div>
                        <div class="text-muted" style="font-size:13px;">Total Revenue</div>
                        <div class="fw-bold fs-4">PKR. 0</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Recent Activity -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h6 class="fw-bold mb-0">Recent Activity</h6>
                </div>
                <div class="card-body px-4 pb-4">
                    <p class="text-muted" style="font-size:14px;">
                        No activity yet. Start by adding your first client!
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>