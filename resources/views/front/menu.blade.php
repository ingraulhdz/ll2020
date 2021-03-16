
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Admin</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Panel Security:</h6>
                        <a class="collapse-item"  href="{{ route('users.index')}}">Users</a>
                        <a class="collapse-item"  href="{{ route('roles.index')}}">Roles</a>
                        <a class="collapse-item"  href="{{ route('permissions.index')}}">Permissions</a>
                        <a class="collapse-item"  href="{{ route('products.index')}}">Products</a>
                    </div>
                </div>
            </li>


<li class='nav-item'>
                <a class='nav-link' href="{{ route('accounts.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Cuentas</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('donations.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Donaciones</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('investments.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Inversiones</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('members.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Miembros</span></a>
            </li>
            


<li class='nav-item'>
                <a class='nav-link' href="{{ route('projects.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Projectos</span></a>
            </li>
            

            <li class='nav-item'>
                <a class='nav-link' href="{{ route('tickets.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Tickets</span></a>
            </li>
            