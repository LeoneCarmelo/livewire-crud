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
</ul>