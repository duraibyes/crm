<div class="list-group">
    <a href="{{ route('cms') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'cms' ? 'active' : '' }}">
        CMS
      </a>
    <a href="{{ route('users') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'users' ? 'active' : '' }}">
      Users
    </a>
    <a href="{{ route('roles') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'roles' ? 'active' : '' }}">
        Roles</a>
    <a href="{{ route('teams') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'teams' ? 'active' : '' }}">
        Teams</a>
    <a href="{{ route('organizations') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'organizations' ? 'active' : '' }}">
        Organizations</a>
    <a href="{{ route('country') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'country' ? 'active' : '' }}">
        Country</a>
    <a href="{{ route('leadsource') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'leadsource' ? 'active' : '' }}">
        Lead Source</a>
    <a href="{{ route('leadtype') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'leadtype' ? 'active' : '' }}">
        Lead Type</a>
    <a href="{{ route('dealstages') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'dealstages' ? 'active' : '' }}">
        Deal Stages</a>
    <a href="#" class="list-group-item list-group-item-action {{ Request::segment(2) == 'permissions' ? 'active' : '' }}">
        Permission</a>
    <a href="{{ route('pagetype') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'pagetype' ? 'active' : '' }}">
        Page Type</a>
    <a href="{{ route('subscriptions') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'subscriptions' ? 'active' : '' }}">
        Subcriptions
        </a>
    {{-- <a href="{{ route('company') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'company' ? 'active' : '' }}">
        Company
    </a> --}}
    <a href="{{ route('company-subscriptions') }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'company-subscriptions' ? 'active' : '' }}">
        Company Subcriptions
        </a>
        
</div>



