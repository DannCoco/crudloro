<div class="pcoded-navigation-label" style="color: black;">Menú</div>
    <ul class="pcoded-item pcoded-left-item">
        @if(Auth::user()->rol == 1)
            <li class="pcoded-hasmenu">
                <a>
                    <span class="pcoded-micon">
                        <i class="ti-shield"></i>
                    </span>
                    <span class="pcoded-mtext">Seguridad</span>
                </a>
                <ul class="pcoded-submenu">
                    <li>
                        <a href="{{ route('persons.index') }}">
                            <span class="pcoded-micon">
                                <i class="ti-user"></i> 
                            </span>
                            <span class="pcoded-mtext"> Personas</span>
                        </a>
                    </li>
                </ul>
            </li>         
            <li class="nohasmenu">
                <a href="{{ route('areas.index') }}">
                    <span class="pcoded-micon">
                        <i class="ti-layout-media-right-alt"></i>
                    </span>
                    <span class="pcoded-mtext"> Áreas</span>
                </a>
            </li> 
        @endif       
    </ul>
</div>