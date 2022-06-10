<?php
include('koneksi.php');
$sql = mysqli_query($koneksi, "SELECT * FROM tag ORDER by no DESC LIMIT 1");
$row = mysqli_fetch_array($sql);
?>
<div class="form-floating mb-3">
    <input type="number" class="form-control" name="tag" id="floatingInput" placeholder="Tap untuk Menginput Tag" value="<?php echo $row['tag']; ?>" required><br>
    <label for="floatingInput"> Tag RFID</label>
</div>