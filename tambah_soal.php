<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
</head>
<body>
    <h1>Tambah Soal</h1>
    <form action="proses_tambah.php" method="POST">
        <label for="pertanyaan">Pertanyaan:</label><br>
        <textarea name="pertanyaan" id="pertanyaan" rows="4" required></textarea><br><br>
        
        <label for="opsi_a">Opsi A:</label>
        <textarea name="opsi_a" id="opsi_a" ></textarea>
        <br>
        
        <label for="opsi_b">Opsi B:</label>
        <textarea name="opsi_b" id="opsi_b" ></textarea><br>
        
        <label for="opsi_c">Opsi C:</label>
        <textarea name="opsi_c" id="opsi_c" ></textarea><br>
        
        <label for="opsi_d">Opsi D:</label>
        <textarea name="opsi_d" id="opsi_d" ></textarea><br>
    
        <label for="opsi_d">Opsi E:</label>
        <textarea name="opsi_e" id="opsi_e" ></textarea><br>

        <label for="jawaban">Jawaban Benar:</label>
        <select name="jawaban" id="jawaban" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
