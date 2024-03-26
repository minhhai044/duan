<div class="sanpham_chitiet">
    <?php extract($onesp); ?>
    <div class="sanpham_chitiet_ten">
        <h2><?= $tensp ?></h2>
    </div>
    <div class="sanpham_chitiet_hienthi">
        <?php
        $img = $imm . $img;
        $gia_fomat = number_format($giasp, 0, '.', '.');
        echo '<div class="sanpham_chitiet_hienthi_left"><img src="' . $img . '"></div>';

        ?>
        <div class="sanpham_chitiet_hienthi_right">
            <div class="mota">

                <h2>Mô tả sản phẩm</h2>
                <?php
                echo '<p>' . $mota . '</p>';

                ?>
            </div>
            <div class="soluong">

                <button class="minus-btn" onclick="handleMinus()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    </svg>
                </button>
                <input type="text" name="amount" id="amount" value="1">
                <button onclick="handlePlus()" class="plus-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>
            <div class="giasp">

                <?php
                echo ' <h5 style="display:inline
                ">Giá gốc sản phẩm :</h5> <span style="font-size: 20px;" > ' . $gia_fomat . '</span> <span style="font-size: 20px;"> VND</span>
                <input type="text" hidden  id="giasp" value="' . $giasp . '">
                
                ';

                ?> <br>
                <h5 style="display:inline
               "> Giá thay đổi : </h5>
                <span style="font-size: 20px;" id="hienthi"></span><span style="font-size: 20px;"> VND</span>
            </div>
            <div class="buttom_chitiet">
                <button>Mua ngay</button>
                <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</div>
<div class="sanpham_chitiet">
    <div class="sanpham_chitiet_lienquan">
        <h2>Sản phẩm tương tự</h2>
    </div>
    <div class="sanpham_chitiet_hienthilienquan">

        <?php
        foreach ($spcungloai as $spcungloai) {
            extract($spcungloai);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $imm . $img;
            $gia_fomat = number_format($giasp, 0, '.', '.');
            echo '<div class="sanphamlienquan">
            <a href="' . $linksp . '"><img src="' . $img . '"></a>
            <h5><a href="' . $linksp . '">' . $tensp . '</a></h5>
                <a href="' . $linksp . '"><p>' . $gia_fomat . ' VND</p></a>
    <p><button type="button" class="btn btn-success">Thêm giỏ hàng</button></p>
                
                </div>
                ';
        }
        ?>


    </div>
</div>
<div class="sanpham_chitiet">
    <div class="sanpham_chitiet_lienquan">
    <h2>Bình luận</h2>

    </div>
    <div class="sanpham_chitiet_hienthilienquan">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluanform.php", {
                idpro: <?= $id ?>
            });
        });
    </script>
    <div class="item1-bl-content" id="binhluan">

    </div>
    <div>
        <!-- <iframe src="view/binhluanform.php?idpro=<?= $id ?>" frameborder="0" width="100%" height="200px"></iframe> -->
    </div>


    </div>
</div>

<!-- <button>Mua ngay</button> -->

<script>
    // Lấy các phần tử DOM 
    let giasp = document.getElementById('giasp');
    let hienthi = document.getElementById('hienthi');
    let amountElement = document.getElementById('amount');

    // Lấy giá và số lượng ban đầu
    let giaBanDau = +giasp.value;
    console.log(giaBanDau);
    let amount = parseInt(amountElement.value);
    // console.log([giasp.innerHTML]);
    // Hàm tính toán và hiển thị tổng giá
    let hienThiTongGia = () => {
        let tongGia = +giaBanDau * amount;
        // console.log(tongGia);
        hienthi.innerHTML = tongGia.toLocaleString();
    };

    //  tăng số lượng 
    let handlePlus = () => {
        amount++;
        amountElement.value = amount;
        hienThiTongGia();
    };

    // giảm số lượng 
    let handleMinus = () => {
        if (amount > 1) {
            amount--;
            amountElement.value = amount;
            hienThiTongGia();
        }
    };

    // Xử lý sự kiện khi nhập số lượng
    amountElement.addEventListener('input', () => {
        amount = parseInt(amountElement.value);
        if (isNaN(amount) || amount < 1) {
            amount = 1;
            amountElement.value = amount;
        }
        hienThiTongGia();
    });

    // Hiển thị tổng giá ban đầu
    hienThiTongGia();
</script>