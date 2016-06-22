<?php
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/22
 * Time: 16:22
 */?>
<?php foreach($list as $item): ?>
    <div>
        <table class="am-table">
            <caption>Order Information</caption>
            <tr>
                <td class="am-success">Order Number</td>
                <td class="am-primary"><?=$item->orderid?></td>
            </tr>
            <tr>
                <td class="am-success">Credit Information</td>
                <td class="am-primary"><?=$item->creditinfo?></td>
            </tr>
            <tr>
                <td class="am-success">Driver Information</td>
                <td class="am-primary"><?=$item->driverinfo?></td>
            </tr>
            <tr>
                <td class="am-success">Take-car Place</td>
                <td class="am-primary"><?=$item->t_place?></td>
            </tr>
            <tr>
                <td class="am-success">Take-car Office</td>
                <td class="am-primary"><?=$item->t_office?></td>
            </tr>
            <tr>
                <td class="am-success">Take-car Time</td>
                <td class="am-primary"><?=$item->t_time?></td>
            </tr>
            <tr>
                <td class="am-success">Return-ar place</td>
                <td class="am-primary"><?=$item->r_place?></td>
            </tr>
            <tr>
                <td class="am-success">Return-car Office</td>
                <td class="am-primary"><?=$item->r_office?></td>
            </tr>
            <tr>
                <td class="am-success">Return-car Time</td>
                <td class="am-primary"><?=$item->r_time?></td>
            </tr>
            <tr>
                <td class="am-success">License</td>
                <td class="am-primary"><?=$item->license?></td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <?php if ($item->status==0){?>
                        <input type="button" name="addoil" onclick="location='/index.php/Custom/deleteorder?orderid=<?=$item->orderid?>'" value="Delete" class="am-btn am-btn-primary am-radius">
                    <?php }?>
                </td>
            </tr>
            <hr>
        </table>
    </div>
<?php endforeach;?>
