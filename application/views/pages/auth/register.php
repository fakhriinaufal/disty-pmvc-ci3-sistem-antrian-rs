</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label class="form-label" for="inputEmail">Email</label>
                                            <input type="email" class="form-control form-control-user" id="inputEmail" placeholder="Email anda">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="inputNama">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="inputNama" placeholder="Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="inputTanggalLahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control form-control-user" id="inputTanggalLahir" placeholder="Tanggal Lahir Anda">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <br>
                                            <input type="radio" name="jenisKelamin" id=""> Laki-Laki
                                            <input type="radio" name="jenisKelamin" id=""> Perempuan
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="inputPassword">Password</label>
                                            <input type="password" class="form-control form-control-user" id="inputPassword" placeholder="Password">
                                        </div>
                                        <a href="#" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </a>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        Sudah memiliki akun? <a class="" href="<?= base_url(); ?>login">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>