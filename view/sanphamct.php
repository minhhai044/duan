<div class="sanpham_chitiet">
    <?php extract($onesp); ?>
    <div class="sanpham_chitiet_ten">
        <h2><?= $tensp ?></h2>
    </div>
    <div class="sanpham_chitiet_hienthi">
        <?php
        $img = $imm . $img;
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
                Giá tiền :
                <?php
                echo '  <p  id="giasp" >' . $giasp . '</p>';
                ?><p id="hienthi"></p>
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

</div>
</div>

<!-- <button>Mua ngay</button> -->

<script>
    let giasp = document.getElementById('giasp');
    let hienthi = document.getElementById('hienthi');
    // console.log(+giasp.textContent);
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    //  console.log(amount);
    let render = (amount) => {
        amountElement.value = amount;

    }
    let b = 1 * +giasp.textContent;
    hienthi.innerHTML = b;
    hienthi.style.display = "none";

    // Plus
    let handlePlus = () => {
        amount++;
        render(amount);

        let b = amount * +giasp.textContent;
        hienthi.innerHTML = b;
        giasp.style.display = "none";
        hienthi.style.display = "block";

    }
    // Minus
    let handleMinus = () => {
        if (amount > 1) {
            amount--;
        }
        render(amount);
        let b = amount * +giasp.textContent;
        hienthi.innerHTML = b;
        giasp.style.display = "none";
        hienthi.style.display = "block";




    }
    amountElement.addEventListener('input', () => {
        amount = amountElement.value
        //     console.log(amount);
        amount = parseInt(amount);
        amount = (isNaN(amount) || amount === 0) ? 1 : amount;
        render(amount);
    })
</script>