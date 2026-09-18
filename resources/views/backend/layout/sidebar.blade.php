<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">


    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ url('admin') }}"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboards</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>

            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Bnner</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('banners') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Create Bnner</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('lists') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="List">List</span></a>
                    </li>

                </ul>
            </li>
            

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Why Chosses</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('chooses') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Create Chooses</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('chooselist') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="List">List</span></a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">villas</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('villas') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Create villas</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('villaslist') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="List">List</span></a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Blogs</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('blogs') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Create villas</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('blogslist') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="List">List</span></a>
                    </li>

                </ul>
            </li>
            
                    <li><a class="d-flex align-items-center" href="{{ route('contacts') }}"><i
                                data-feather="phone"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Contact details</span></a>
                    </li>
                    
            </li>

                
                    <li><a class="d-flex align-items-center" href="{{ route('abouts') }}"><i
                                data-feather="file-text"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">About details</span></a>
                    </li>
            </li>
        </ul>
    </div>
</div>