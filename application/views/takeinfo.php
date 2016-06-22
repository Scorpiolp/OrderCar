<?php
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/22
 * Time: 12:53
 */?>
<style>
    .get {
        background: #D5D5D5;
        color: #1E5B94;
        text-align: center;
        padding: 100px 0;
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
        <form name="contactForm" class="am-form am-form-horizontal" method="post" action="/index.php/Custom/takecar2">

            <div class="get-title">
                <h1 style="font-size:36px;">Take Car</h1>
                <p>Fill out the form below to take a car. </p>
            </div>


            <div class="am-form-group">
                <label for="doc-ipt-1" class="am-u-sm-3 am-form-label">Order Number</label>
                <div class="am-u-sm-9">
                    <input type="text" name="ordernum" id="doc-ipt-1" placeholder="Order Number">
                </div>
            </div>

            <div class="am-form-group">
                <label for="doc-ipt-3" class="am-u-sm-3 am-form-label">Insurance</label>
                <div>
                    <select name="insurance" data-am-selected id="doc-ipt-3">
                        <option value="20">$20</option>
                        <option value="50">$50</option>
                        <option value="100">$100</option>
                    </select>
                </div>
            </div>

            <div class="am-form-group" >
                <button name="submit" type="submit" class="am-btn am-btn-primary">Take Car</button>
            </div>
            <p>&nbsp;</p>

        </form>
    </div>
</div>