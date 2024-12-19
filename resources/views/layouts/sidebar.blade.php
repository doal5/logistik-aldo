            <!-- Sidebar Start -->
            <div class="sidebar pe-7 pb-3">
                <nav class="navbar bg-light navbar-dark">
                    <div class="logo" style="margin-left:15px; margin-bottom:10px">

                        <a href="" class="navbar-brand mx-4 mb-3">
                            <img src="{{ asset('img/logo.png') }}" width="120" height="100" alt=""
                                style="width: 80px; height: 100px; margin-left:20px; border-radius:30%">
                        </a>
                        <h5 style="text-align: center"> <b> <i> <span class="badge bg-primary mt-2">ALDO -
                                        LOGISTIK</span></i>
                            </b> </h5>
                    </div>

                    <div class="d-flex align-items-center" style="margin-left:70px">
                        <div class="" style="align-items: center">
                            <h6 class="mb-0"></h6>
                            <span>
                            </span>
                        </div>
                        <div class="ms-3">
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="{{ route('barang_keluar_masuk') }}"
                            class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}"><i
                                class="fa fa-tachometer-alt me-2"></i>Barang
                            Keluar Masuk</a>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="{{ route('barang') }}"
                            class="nav-item nav-link {{ request()->is('barang') ? 'active' : '' }}"><i
                                class="fa-solid fa-box me-2"></i>Barang</a>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->
            {{-- SweetAlert --}}
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
