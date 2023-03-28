<?php
require_once 'dbkoneksi.php';

$id = $_GET['idedit'];
$conn  = mysqli_connect("localhost", "root", "", "dbpos");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};
function edit_pelanggan($data)
{
    global $conn;

    $id = $data['id'];
    $kode =  $data["kode"];
    $nama =  $data["nama"];
    $jk =  $data["jk"];
    $tmp_lahir =  $data["tmp_lahir"];
    $tgl_lahir =  $data["tgl_lahir"];
    $email =  $data["email"];
    $kartu_id =  $data["kartu_id"];

    $query = "UPDATE pelanggan SET 
		kode = '$kode',
		nama = '$nama',
		jk = '$jk',
		tmp_lahir = '$tmp_lahir',
		tgl_lahir = '$tgl_lahir',
		email = '$email',
		kartu_id = '$kartu_id'
		WHERE id = $id
		";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



$pelanggan = query("SELECT * FROM pelanggan WHERE id = $id")[0];

if (isset($_POST['edit'])) {
    if (edit_pelanggan($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil Edit Data');
                window.location.href='list_pelanggan.php';
            </script>
        ";
    }
}

?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?= $id; ?>">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $pelanggan['kode']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $pelanggan['nama']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>

                <input id="jk" name="jk" value="<?= $pelanggan['jk']; ?>" type="radio" class="form-control"><?= $pelanggan['jk']; ?> (data saat ini) <br>
                <input id="jk" name="jk" value="L" type="radio" class="form-control">Laki-Laki
                <input id="jk" name="jk" value="P" type="radio" class="form-control">Perempuan
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="<?= $pelanggan['tmp_lahir']; ?>" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="<?= $pelanggan['tgl_lahir']; ?>" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="email" name="email" value="<?= $pelanggan['email']; ?>" type="email" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Kartu</label>
        <div class="col-8">
            <?php
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id=" kartu_id" name="kartu_id" class="custom-select">
                <option value="<?= $pelanggan['kartu_id']; ?>"><?= $pelanggan['kartu_id']; ?></option>
                <?php
                foreach ($rsjenis as $rowjenis) {
                ?>
                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button type="submit" name="edit">Edit</button>
        </div>
    </div>
</form>