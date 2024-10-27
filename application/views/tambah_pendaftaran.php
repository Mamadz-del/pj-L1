<h1>Tambah Pendaftaran</h1>


<form action="<?= base_url() ?>Tambah/simpanPendaftaran" method="post">

    <select name="id_lomba" id="lomba">
        <option value="" disabled selected>Pilih Lomba</option>
            <?php foreach($tb_jns_lomba as $lomba) : ?>
                <option value="<?= $lomba['idLomba'] ?>"><?= $lomba['namaLomba'] ?></option>
            <?php endforeach; ?>
    </select>
    <label for="nama_pendaftar">Nama Pendaftar</label>
    <input type="text" id="nama_pendaftar" name="nama_pendaftar"><br>

    <label for="kelas">Kelas</label>
    <input type="text" id="kelas" name="kelas"><br>

    <label for="no_hp">No Handphone</label>
    <input type="text" id="no_hp" name="no_hp"><br>

    <button type="submit">Tambah</button>
</form>