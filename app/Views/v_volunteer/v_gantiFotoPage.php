<div class="container" style="padding-top: 130px;">

    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <?php if ($volunteer['status'] == 1) { ?>
                        <?php echo '<span class="badge badge-success">Sudah verifikasi</span>';
                        } ?>

                        <?php if ($volunteer['status'] != 1) { ?>
                        <?php echo '<span class="badge badge-danger">Belum verifikasi</span>';
                        } ?>


                        <img src="<?= base_url() ?>/img/data_volunteer/<?= $volunteer['foto']; ?>" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4><?= $volunteer['nama_volunteer'] ?></h4>
                            <?php if ($volunteer['id_pengguna'] == session()->get('id')) { ?>
                                <p class="text-secondary mb-1">@<?= session()->get('username') ?></p>

                                <p class="text-muted font-size-sm"><?= $volunteer['alamat'] ?></p>
                                <a href="/profil" class="btn btn-primary">Profil</a>
                                <a href="/updateDataDiri" class="btn btn-outline-primary">Perbarui data diri</a>
                            <?php } else { ?>

                                <p class="text-muted font-size-sm"><?= $volunteer['alamat'] ?></p>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>Komunitas</h6>
                        <span class="text-secondary">Tidak tergabung</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" stroke="currentColor">

                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />

                            </svg>Laporan terkirim</h6>
                        <span class="text-secondary"><?= $jumlah; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" stroke="currentColor">

                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />

                            </svg>Jumlah partisipasi</h6>
                        <span class="text-secondary">bootdey</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">

            <div class="card mb-3">

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">


                        <div class="mt-3">
                            <p class="text-secondary mb-1"></p>

                            <p class="text-muted font-size-sm">Pilih gambar untuk mengganti foto profil</p>
                            <form action="/ProfilController/updateFoto" id="formFoto" method="POST" enctype="multipart/form-data" onsubmit="validateForm(event)">
                                <img src=" <?= base_url() ?>/img/data_volunteer/<?= $volunteer['foto']; ?>" alt="Admin" class="rounded-circle img-preview" width="150">
                                <br><br>
                                <input type="file" class="form-control" id="foto" name="foto" onchange="showPreview();">
                                <input type="submit" class="btn btn-danger">
                            </form>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>


<script>
    function validateForm(e) {
        e.preventDefault();
        var foto = document.getElementById("foto").value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (foto == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Harap memilih file',
            });

            return false;

        } else if (!allowedExtensions.exec(foto)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'File yang diupload harus memiliki ektensi .JPG, .JPEG, atau .PNG',
            });
            return false;
        } else {
            Swal.fire({
                title: 'Foto yang dipilih sudah benar?',
                showDenyButton: true,
                confirmButtonText: `Save`,
                denyButtonText: `Don't save`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Foto terkirim!', 'Foto profil telah terganti', 'success')
                    document.getElementById('formFoto').submit();
                } else if (result.isDenied) {
                    return false
                }
            })

        }

    }

    function showPreview() {

        const foto = document.querySelector('#foto');
        const fotoLabel = document.querySelector('.form-control');
        const imgPreview = document.querySelector('.img-preview');

        fotoLabel.textContent = foto.files[0].name;
        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);
        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }

    }
</script>