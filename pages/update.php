<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="?page=registers">New Student List</a><br>
            Update Register To SMK Semangat 45
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" name="student_id" value="<?= $data['id'] ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="jk" name="jk" value="<?= $data['jk'] ?>">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    
                    <input type="text" class="form-control" id="address" name="address" value="<?= $data['address'] ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="religion" class="form-label">Religion</label>
                    <select class="form-select form-control" name="religion" id="religion">
                        <option value="<?= $data['religion'] ?>" selected hidden><?= $data['religion'] ?></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fromjhs" class="form-label">Junior High School</label>
                    
                    <input type="text" class="form-control" id="fromjhs" name="from_jhs" value="<?= $data['from_jhs'] ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">Major</label>
                    
                    <select class="form-select form-control" id="major" name="major">
                        <option value="<?= $data['major'] ?>" selected hidden><?= $data['major'] ?></option>
                        <option value="" disabled selected>- Your Major Interest</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Tata Boga">Tata Boga</option>
                        <option value="Tata Busana">Tata Busana</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                </div>
                <div class="">
                    <input type="submit" name="update" value="Update Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
