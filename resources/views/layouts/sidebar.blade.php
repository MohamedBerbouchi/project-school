<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class=" @if(request()->is('home*') or request()->is('/') ) active @endif">
                    <a href="{{ route('home') }}"><i class='bx bx-home'></i><span>Home</span></a>
                </li>
                <li class=" @if(request()->is('stagiaires*') or request()->is('/') ) active @endif">
                    <a href="{{  route('stagiaires.index') }}">
                        
                        <i class='bx bx-id-card'></i>
                        <span>les stagiaires</span></a>
                </li>
                <li class=" @if(request()->is('filieres*') or request()->is('/') ) active @endif">
                    <a href="{{  route('filieres.index') }}">
                        <!-- <i class="ion-university"></i> -->
                        <i class='bx bx-spreadsheet'></i> 
                        <span>les filiere</span></a>
                </li>
            
    
                <li class=" @if(request()->is('matieres*') or request()->is('/') ) active @endif">
                    <a href="{{  route('matieres.index') }}">
                        <!-- <i class="fa fa-tag"></i>  -->
                        <i class='bx bxs-detail'></i>
                        <span>les matiéres</span></a>
                </li>
            
            
                <li class=" @if(request()->is('programmes*') or request()->is('/') ) active @endif">
                    <a href="customers.html">
                        <!-- <i class='bx bxs-credit-card'></i>  -->
                        <i class='bx bxs-dashboard'></i>
                        <span>les programmes</span></a>
                </li>
                <li>
                    <a href="customers.html">
                        <i class='bx bx-group'></i>
                        <!-- <i class="fa fa-users"></i> -->
                        <span>les utilisateurs</span></a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
