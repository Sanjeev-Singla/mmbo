
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

{{-- <li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{{ route('invoices.index') }}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li> --}}

