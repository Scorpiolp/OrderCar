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
                <td class="am-success" width="50%">Order Number</td>
                <td class="am-primary" width="50%"><?=$item->orderid?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Credit Information</td>
                <td class="am-primary" width="50%"><?=$item->creditinfo?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Driver Information</td>
                <td class="am-primary" width="50%"><?=$item->driverinfo?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Take-car Place</td>
                <td class="am-primary" width="50%"><?=$item->t_place?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Take-car Office</td>
                <td class="am-primary" width="50%"><?=$item->t_office?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Take-car Time</td>
                <td class="am-primary" width="50%"><?=$item->t_time?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Return-ar place</td>
                <td class="am-primary" width="50%"><?=$item->r_place?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Return-car Office</td>
                <td class="am-primary" width="50%"><?=$item->r_office?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">Return-car Time</td>
                <td class="am-primary" width="50%"><?=$item->r_time?></td>
            </tr>
            <tr>
                <td class="am-success" width="50%">License</td>
                <td class="am-primary" width="50%"><?=$item->license?></td>
            </tr>
            <tr>
                <td width="50%">
                </td>
                <td width="50%">
                    <?php if ($item->status==0){?>
                        <input type="button" name="addoil" onclick="location='/index.php/Custom/deleteorder?orderid=<?=$item->orderid?>'" value="Delete" class="am-btn am-btn-primary am-radius">
                    <?php }?>
                </td>
            </tr>
            <hr>
        </table>
    </div>
<?php endforeach;?>
