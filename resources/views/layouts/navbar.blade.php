<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <!--Profil -->
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="assets/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">
                            UX Designer
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item">
                            <a href="user-profile.html">
                                <i class="feather icon-user m-r-5"></i>
                                View Profile
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#!">
                                <i class="feather icon-settings m-r-5"></i>
                                Settings
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="auth-normal-sign-in.html">
                                <i class="feather icon-log-out m-r-5"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Edn Profil -->
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/blog') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Form Blog</span>
                    </a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-lock"></i>
                        </span>
                        <span class="pcoded-mtext">Authentication</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{ url('/register') }}" target="">Sign up</a>
                        </li>
                        <li>
                            <a href="auth-signin.html" target="_blank">Sign in</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
