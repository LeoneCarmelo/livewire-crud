<ul class="nav nav-tabs bg-light" id="navId" role="tablist">
    <li class="nav-item">
        <a href="{{ route('welcome') }}" class="nav-link text-dark">Azienda X</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ url('customer/create') }}" class="nav-link text-dark">Create Customer</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ url('customer/index') }}" class="nav-link text-dark">Customers</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#tab2Id">Action</a>
            <a class="dropdown-item" href="#tab3Id">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
        </div>
    </li>
</ul>