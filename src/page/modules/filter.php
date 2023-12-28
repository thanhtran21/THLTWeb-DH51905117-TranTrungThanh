<?php 
    include'./../db/connect.php';

?>
<div class="filter">
    <form class="form-5" action="">
            <select class="text" name="hang">
                <option value="0">Hãng</option>
                <?php
                    $sql = "SELECT maNhaSanXuat as id,tenNhaSanXuat as ten from nhasanxuat";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['ten']?></option>
                    <?php
                    }
                ?>
            </select>
            <select class="text" name="gia" >
                    <option value="0">Giá</option>
                    <option value="2000000 AND 5000000">Từ 2 - 5 triệu</option>
                    <option value="5000000 AND 7000000">Từ 5 - 7 triệu</option>
                    <option value="7000000 AND 13000000">Từ 7 - 13 triệu</option>
                    <option value="1300000 AND 20000000">Từ 13 - 20 triệu</option>
                    <option value="> 20000000">Trên 20 triệu</option>
            </select>
            <select class="text" name="ram" >
                    <option value="0">Ram</option>
                    <option value="2GB">2GB</option>
                    <option value="3GB">3GB</option>
                    <option value="4GB">4GB</option>
                    <option value="6GB">6GB</option>
                    <option value="8GB">8GB</option>
                    <option value="12GB">12GB</option>
            </select>
            <input type="submit" name="submit" value="Tìm">
    </form>
</div>