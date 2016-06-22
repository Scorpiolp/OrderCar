<?php
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/22
 * Time: 15:22
 */?>

<script language="JavaScript">
function pay() {
    alert("Pay Successfully");
    window.location.href='/index.php/Custom';
}
</script>

<style>
    .get {
        background: #D5D5D5;
        color: #1E5B94;
        text-align: center;
        padding: 80px 0;
    }

    .get-title {
        font-size: 100%;
        border: 2px;
        padding: 10px;
        display: inline-block;
    }

    .get-btn {
        background: #1E5B94;
    }

    .get-center {
        text-align: center;
    }
</style>
<div class='get'>
    <div class="am-g am-g-fixed"  >
        <form name="contactForm" class="am-form am-form-horizontal" method="post" action="/index.php/Custom/returncar2">

            <div class="get-title">
                <h1 style="font-size:36px;">Order Bill</h1>
                <p>Check the Bill annd Pay the Bill. </p>
            </div>


            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Name</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$_SESSION['name']?>">
                </div>
            </div>

            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Phone</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$_SESSION['phone']?>">
                </div>
            </div>

            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Order Number</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$orderid?>">
                </div>
            </div>

            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Credit number</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$credit?>">
                </div>
            </div>

            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Miles</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$miles?>">
                </div>
            </div>

            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Oil Remained</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$oil?>">
                </div>
            </div>

            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">Total Price</label>
                <div class="am-u-sm-9">
                    <input type="text"  value="<?=$totalprice?>">
                </div>
            </div>

            <div class="am-form-group" >
                <button name="return" type="button" onclick="pay()" class="am-btn am-btn-primary">Pay the Bill</button>
            </div>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
