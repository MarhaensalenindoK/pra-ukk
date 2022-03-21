<div class="container w-100 mt-5">
    <div class="card border-primary mb-3" style="max-width: 100rem;">
        <div class="card-header">Info Pendaftaran</div>
        <div class="card-body">
        <form method="POST">
            <fieldset class="form-group">
                <h5>Nama Lengkap</h5>
                <h6><?= $data['name'] ?></h6>
            
            </fieldset>
            <fieldset class="form-group">
                <h5>Alamat Lengkap</h5>
                <p><?= $data['address'] ?></p>
            
            </fieldset>
            <fieldset class="form-group">
                <h5>Asal Sekolah</h5>
                <p><?= $data['from_jhs'] ?></p>
            
            </fieldset>
            <fieldset class="form-group">
                <h5>Jenis Kelamin</h5>
                <p><?= $data['jk']?></p>
                
            </fieldset>
            <fieldset class="form-group">
                <h5>Agama</h5>
                <p><?= $data['religion'] ?></p>
                
            </fieldset>
            <fieldset class="form-group">
                <h5>Jurusan</h5>
                <p><?= $data['major'] ?></p>
            </fieldset>
        </form>
        </div>
    </div>
    <script>
        window.print()
    </script>
</div>