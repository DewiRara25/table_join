<html>
    <head>
</head>
<body>
    <h1>table siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">nama :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="kelas">kelas :</label>
                    <input type="text" name="kelas" />
                </p>
                <p>
                    <label for="jurusan">jurusan :</label>
                    <input type="text" name="jurusan" />
                </p>
                <p>
                    <label for="tahun">tahun :</label>
                    <input type="number" name="tahun" />
                </p>
                <p>
                    <label for="nominal">nominal :</label>
                    <input type="number" name="nominal" />
                </p>
                <p>
                    <input type="submit" value="daftar" name="tambah" />
                </p>
            </fieldset>
        </form>
</body>
</html>