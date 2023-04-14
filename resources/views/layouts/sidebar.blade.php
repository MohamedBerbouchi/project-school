<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class=" @if(request()->is('home*') or request()->is('/') ) active @endif">
                    <a href="{{ route('home') }}"><i data-feather="home"></i> <span>Home</span></a>
                </li>
                <li class=" @if(request()->is('stagiaires*') or request()->is('/') ) active @endif">
                    <a href="{{  route('stagiaires.index') }}"><i data-feather="users"></i> <span>les stagiaires</span></a>
                </li>
                <li>
                    <a href="customers.html"><i data-feather="users"></i> <span>les filiere</span></a>
                </li>
             
     
                <li>
                    <a href="customers.html"><i data-feather="users"></i> <span>les matiéres</span></a>
                </li>
               
              
                <li>
                    <a href="customers.html"><i data-feather="users"></i> <span>les programmes</span></a>
                </li>
                <li>
                    <a href="customers.html"><i data-feather="users"></i> <span>les utilisateurs</span></a>
                </li>
                 
            </ul>
        </div>
    </div>
</div>
