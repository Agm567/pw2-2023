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

function edit_produk($data)
{
  global $conn;

  $id = $data['id'];
  $kode =  $data["kode"];
  $nama =  $data["nama"];
  $harga_beli =  $data["harga_beli"];
  $harga_jual =  $data["harga_jual"];
  $stok =  $data["stok"];
  $min_stok =  $data["min_stok"];
  $jenis_produk_id =  $data["jenis_produk_id"];

  $query = "UPDATE produk SET 
		kode = '$kode',
		nama = '$nama',
		harga_beli = '$harga_beli',
		harga_jual = '$harga_jual',
		stok = '$stok',
		min_stok = '$min_stok',
		jenis_produk_id = '$jenis_produk_id'
		WHERE id = $id
		";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}


$produk = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST['edit'])) {
  if (edit_produk($_POST) > 0) {
    echo "
            <script>
                alert('Berhasil Edit Data');
                window.location.href='list_produk.php';
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
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $produk['kode']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $produk['nama']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="harga_beli" name="harga_beli" value="<?= $produk['harga_beli']; ?>" type="text"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="harga_jual" name="harga_jual" value="<?= $produk['harga_jual']; ?>" type="text"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="stok" name="stok" value="<?= $produk['stok']; ?>" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="min_stok" name="min_stok" value="<?= $produk['min_stok']; ?>" type="text"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
        <div class="col-8">
            <?php
      $sqljenis = "SELECT * FROM jenis_produk";
      $rsjenis = $dbh->query($sqljenis);
      ?>
            <select id="jenis" name="jenis_produk_id" class="custom-select">

                <option value="<?= $produk['jenis_produk_id']; ?>"><?= $produk['jenis_produk_id']; ?></option>
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