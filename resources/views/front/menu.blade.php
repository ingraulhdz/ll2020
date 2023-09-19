
            <!-- Nav Item - Pages Collapse Menu -->

            @can('user.index')

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <i class="fas fa-fw fa-lock"></i>
                    <span>Admin</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Panel Security:</h6>
                                                

                        <a class="collapse-item"  href="{{ route('users.index')}}"> <i class='fas fa-fw fa-id-card'></i> Users</a>
                        <a class="collapse-item"  href="{{ route('roles.index')}}">  <i class='fas fa-fw fa-sitemap'></i>Rols</a>
                        <a class="collapse-item"  href="{{ route('permissions.index')}}"> <i class='fas fa-fw fa-list'></i> Permissions</a>
                    </div>
                </div>
            </li>
@endcan

<li class='nav-item'>
                <a class='nav-link' href="{{ route('accounts.index')}}">
                    <i class='fas fa-fw fa-credit-card'></i>
                    <span>Accounts</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('donations.index')}}">
                    <i class='fas fa-fw fa-donate'></i>
                    <span>Donations</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('investments.index')}}">
                    <i class='fas fa-fw fa-arrow-circle-down'></i>
                    <span>Expenses</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('members.index')}}">
                    <i class='fas fa-fw fa-users'></i>
                    <span>Members</span></a>
            </li>
            


<li class='nav-item'>
                <a class='nav-link' href="/db">
                    <i class='fas fa-fw fa-briefcase'></i>
                    <span>Projects</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('tickets.index')}}">
                    <i class='fas fa-fw fa-file'></i>
                    <span>Tickets</span></a>
            </li>
            
            
            <li class='nav-item'>
                <a class='nav-link' href="{{ route('registros.index')}}">
                    <i class='fas fa-fw fa-cubes'></i>
                    <span>Inventory</span></a>
            </li>
            