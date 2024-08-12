<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <!-- <div class="search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a href="avascript:;" class="btn d-flex align-items-center"><i class='bx bx-search'></i>Search</a>
                    </div> -->

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                        </a>
                    </li>

                    <li class="nav-item dark-mode d-none d-sm-flex">
                        <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                        </a>
                    </li>








                </ul>
            </div>

            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-info">
                        <p class="user-name mb-0">Admin</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <li><a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="bx bx-log-out-circle"></i><span>Logout</span>
                            </a>
                        </li>
                    </form>
                </ul>
            </div>




            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('backend/assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
                    <div class="user-info">
                        <p class="user-name mb-0">Pauline Seitz</p>
                        <p class="designattion mb-0">Web Designer</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <li><a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="bx bx-log-out-circle"></i><span>Logout</span>
                            </a>
                        </li>
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</header>