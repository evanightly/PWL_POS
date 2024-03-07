<body>
    <h1>Form Tambah Data User</h1>
    <form action="/user/tambah_simpan" method="post">
        @csrf
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level Pengguna">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
