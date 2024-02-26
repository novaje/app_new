{{-- sidebar --}}
<aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="dashboard/index.html" class="navbar-brand">
            
            <!--Logo start-->
            <div class="logo-main">
                <img src="{{ asset('template/assets/images/logo_dinkes.png') }}" alt="Logo" width="45" height="40">
            </div>            
            <!--logo End-->            
            <h4 class="logo-title" data-setting="">APLIKASI - JKN</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                
                <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z" fill="white"/>
                    <path d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z" fill="white"/>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                        <span class="default-icon">Home</span>
                        <span class="mini-icon" data-bs-toggle="tooltip" title="Home" data-bs-placement="right">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.v_home') }}">
                        <i class="icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#master-data" role="button" aria-expanded="false" aria-controls="master-data">
                        <i class="icon" data-bs-toggle="tooltip" title="Plugins" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                                <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">MASTER DATA</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="master-data" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard/plugins/apexcharts.html">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                <span class="item-name">Setting Aplikasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('unit_puskesmas.v_unit') }}">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                <span class="item-name">Unit/ Puskesmas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dpa.v_data_dpa') }}">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                <span class="item-name">Data Program/<br>Kegiatan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#rekening-belanja" role="button" aria-expanded="false" aria-controls="rekening-belanja">
                                <i class="icon" data-bs-toggle="tooltip" title="Rekening Belanja" data-bs-placement="right">
                                </i>
                                <span class="item-name">Rekening Belanja</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="rekening-belanja" data-bs-parent="#master-data">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('rekstruktur.v_rekstruktur') }}">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Rekening Struktur</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('rekkelompok.v_rekeningKelompok') }}">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Rekening Kelompok</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard/plugins/apexcharts.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Rekening Jenis</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard/plugins/apexcharts.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Rekening Objek</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard/plugins/apexcharts.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Rekening Rincian <br>Objek</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard/plugins/apexcharts.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Rekening Rekening 6</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#obat-alkes" role="button" aria-expanded="false" aria-controls="obat-alkes">
                                <i class="icon" data-bs-toggle="tooltip" title="Rekening Belanja" data-bs-placement="right">
                                    <!-- ... (icon SVG untuk Rekening Belanja) ... -->
                                </i>
                                <span class="item-name">Obat dan Alkes</span>
                                <i class="right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="obat-alkes" data-bs-parent="#master-data">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('obat.v_obat') }}">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Data Obat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard/plugins/apexcharts.html">
                                        <i class="icon">
                                            <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                        </i>
                                        <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                        <span class="item-name">Data Alkes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-plugins" role="button" aria-expanded="false" aria-controls="sidebar-user">
                        <i class="icon" data-bs-toggle="tooltip" title="Plugins" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                                <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">ANGGARAN</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-plugins" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/plugins/apexcharts.html">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                <span class="item-name">RKA Penyusun</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/plugins/apexcharts.html">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                <span class="item-name">RKA Perubahan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/plugins/apexcharts.html">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Apexcharts" data-bs-placement="right"> A </i>
                                <span class="item-name">Anggaran Kas</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false" aria-controls="utilities-error">
                        <i class="icon" data-bs-toggle="tooltip" title="Utilities" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">PENATAUSAHAAN</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/errors/error404.html">
                                <i class="icon" data-bs-toggle="tooltip" title="Awal" data-bs-placement="right">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Saldo Awal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/errors/error404.html">
                                <i class="icon" data-bs-toggle="tooltip" title="Error 404" data-bs-placement="right">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Penerimaan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/errors/error404.html">
                                <i class="icon" data-bs-toggle="tooltip" title="Error 404" data-bs-placement="right">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/errors/error404.html">
                                <i class="icon" data-bs-toggle="tooltip" title="Error 404" data-bs-placement="right">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Dokumentasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/errors/error404.html">
                                <i class="icon" data-bs-toggle="tooltip" title="Error 404" data-bs-placement="right">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Nomor Surat</span>
                            </a>
                        </li>
                    </ul>
                </li>
               

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false" aria-controls="sidebar-form">
                        <i class="icon" data-bs-toggle="tooltip" title="Form" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">LAPORAN</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> RKA </i>
                               <span class="item-name">RKA Puskesmas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> RKA </i>
                               <span class="item-name">RKA Dinas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> BKU </i>
                               <span class="item-name">BKU</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> Realisasi </i>
                               <span class="item-name">Realisasi NON BLUD </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> BLUD </i>
                               <span class="item-name">Realisasi BLUD</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> Dinas </i>
                               <span class="item-name">Realisasi Dinas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard/form/form-element.html">
                               <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                               <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Elements" data-bs-placement="right"> Laporan </i>
                               <span class="item-name">Laporan Keuangan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-auth">
                        <i class="icon" data-bs-toggle="tooltip" title="Auth Skins" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                                <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">ADMINISTRATOR</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.v_level_user') }}">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Lock Screen" data-bs-placement="right">LS</i>
                                <span class="item-name">Level User</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="icon">
                                    <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Lock Screen" data-bs-placement="right">LS</i>
                                <span class="item-name">Data User</span>
                            </a>
                        </li>  
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="dashboard/crypto-dashboard.html">
                        <i class="icon" data-bs-toggle="tooltip" title="Crypto" data-bs-placement="right">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M10.1167 0.333496H3.88856C1.61893 0.333496 0.333008 1.61942 0.333008 3.88905V10.1113C0.333008 12.3809 1.61893 13.6668 3.88856 13.6668H10.1167C12.3863 13.6668 13.6663 12.3809 13.6663 10.1113V3.88905C13.6663 1.61942 12.3863 0.333496 10.1167 0.333496Z" fill="currentColor"/>
                                <path d="M3.91244 5.24609C3.61022 5.24609 3.36133 5.49498 3.36133 5.80313V10.3839C3.36133 10.6861 3.61022 10.935 3.91244 10.935C4.22059 10.935 4.46948 10.6861 4.46948 10.3839V5.80313C4.46948 5.49498 4.22059 5.24609 3.91244 5.24609Z" fill="currentColor"/>
                                <path d="M7.02279 3.05957C6.72057 3.05957 6.47168 3.30846 6.47168 3.61661V10.384C6.47168 10.6862 6.72057 10.9351 7.02279 10.9351C7.33094 10.9351 7.57983 10.6862 7.57983 10.384V3.61661C7.57983 3.30846 7.33094 3.05957 7.02279 3.05957Z" fill="currentColor"/>
                                <path d="M10.0932 7.66406C9.78502 7.66406 9.53613 7.91295 9.53613 8.2211V10.3841C9.53613 10.6863 9.78502 10.9352 10.0872 10.9352C10.3954 10.9352 10.6443 10.6863 10.6443 10.3841V8.2211C10.6443 7.91295 10.3954 7.66406 10.0932 7.66406Z" fill="currentColor"/>
                            </svg>
                        </i>
                        <span class="item-name">PROFIL USER</span>
                    </a>
                </li> 
                
                <li><hr class="hr-horizontal"></li>
            </ul>
            <!-- Sidebar Menu End -->        
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>