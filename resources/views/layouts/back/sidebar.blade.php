
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        {{-- Start Home  --}}
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Dashboard</span>
                        </li>
                        <li class="sidebar-item @yield('home')">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('admin')}}" aria-expanded="false">
                                <i class="mdi mdi-comment-processing-outline"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        {{-- End Home --}}

                        {{-- Start Transaction --}}
                        <li class="sidebar-item  @yield('transaction')">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Transaction </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/recentorder')}}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Recent Order </span>
                                    </a>
                                </li>
                                {{-- <li class="sidebar-item">
                                    <a href="{{ url('admin/recentorder')}}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Confirmation Order </span>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- End Transaction --}}

                        {{-- Start Product  --}}
                        <li class="sidebar-item @yield('products')">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Products </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/product')}}" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> List Products </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/product/create')}}" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> Add Products </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Product --}}

                        {{-- Start Carousel Image --}}
                        <li class="sidebar-item @yield('carousel')">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Newest Images Carousel </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/carousel')}}" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> List Images </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Carousel Image --}}

                        {{-- Start Category  --}}
                        <li class="sidebar-item @yield('category')">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-crop-square"></i>
                                <span class="hide-menu">Category </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/category')}}" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> List Category </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Category  --}}

                        {{-- Start Complain --}}
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Complain</span>
                        </li>
                        <li class="sidebar-item @yield('complain')">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('admin/complain')}}" aria-expanded="false">
                                <i class="mdi mdi-comment-processing-outline"></i>
                                <span class="hide-menu">Recent</span>
                            </a>
                        </li>
                        {{-- End Complain --}}

                        {{-- Start Outlets  --}}
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Outlets</span>
                        </li>
                        <li class="sidebar-item @yield('outlets')">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Data Outlets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/outlet')}}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> List Outlets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/outlet/create')}}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Add Outlets </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Outlets --}}

                        {{-- Start Footer --}}
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Footer</span>
                        </li>
                        <li class="sidebar-item @yield('footer')">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false">
                            <i class="mdi mdi-crop-square"></i>
                            <span class="hide-menu">Page </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/contact')}}" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> Contact </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/terms')}}" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> Terms & Conditiion </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/privacy')}}" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> Privacy Policy </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/refund')}}" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> Refund Policy </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('admin/faq')}}" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> FAQ </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Footer --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
