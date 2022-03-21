<div class="mt-5 container-lg">
    <div class="card">
        <div class="card-header text-white bg-secondary">
            Data registrasi
        </div>
        <div class="card-body">
            <table class="table" id="tableRegistrasion">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">JK</th>
                        <th scope="col">Address</th>
                        <th scope="col">religion</th>
                        <th scope="col">Junior High School</th>
                        <th scope="col">Major</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $urut = 1;
                    foreach ($results as $key => $data) {
                        $id = $data['id'];
                        $name = $data['name'];
                        $jk = $data['jk'];
                        $address = $data['address'];
                        $religion = $data['religion'];
                        $from_jhs = $data['from_jhs'];
                        $major = $data['major'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <td scope="row"><?php echo $name ?></td>
                            <td scope="row"><?php echo $jk ?></td>
                            <td scope="row"><?php echo $address ?></td>
                            <td scope="row"><?php echo $religion ?></td>
                            <td scope="row"><?php echo $from_jhs ?></td>
                            <td scope="row"><?php echo $major ?></td>
                            <td class="d-flex justify-content-around">
                                <a href="?page=update&id=<?= $data['id'] ?>" class="btn btn-sm m-1 btn-secondary">Edit</a>
                                <form method="post">
                                    <input type="hidden" name="student_id" value="<?= $data['id'] ?>">
                                    <button class="btn btn-sm m-1 btn-danger" type="submit" name="delete">Hapus</button>
                                </form>
                                <a href="?page=print&id=<?= $data['id'] ?>" class="btn btn-sm m-1 btn-success">Cetak</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
