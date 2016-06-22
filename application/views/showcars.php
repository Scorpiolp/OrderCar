<?php
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/21
 * Time: 19:18
 */
?>
<body>
    <?php foreach($list as $item): ?>
    <table class="am-table">
        <caption>Car Information</caption>
        <tr>
            <td class="am-success" width="50%">Car License</td>
            <td class="am-primary" width="50%"><?=$item->license?></td>
        </tr>
        <tr>
            <td class="am-success" width="50%">Car Type</td>
            <td class="am-primary" width="50%"><?=$item->type?></td>
        </tr>
        <tr>
            <td class="am-success" width="50%">Car Place</td>
            <td class="am-primary" width="50%"><?=$item->place?></td>
        </tr>
        <tr>
            <td class="am-success" width="50%">Car Office</td>
            <td class="am-primary" width="50%"><?=$item->office?></td>
        </tr>
        <tr>
            <td class="am-success" width="50%">Car Price</td>
            <td class="am-primary" width="50%"><?=$item->price?></td>
        </tr>
        <tr>
            <td class="am-success" width="50%">Car Capacity</td>
            <td class="am-primary" width="50%"><?=$item->capacity?></td>
        </tr>
        <tr>
            <td width="50%">
            </td>
            <td width="50%">
                <input type="button" name="order" value="Order" onclick="location='/index.php/Custom/saveorder?license=<?=$item->license?>&r_time=<?=$r_time?>&t_time=<?=$t_time?>&t_place=<?=$t_place?>&r_place=<?=$r_place?>&credit=<?=$credit?>&driver=<?=$driver?>&r_office=<?=$r_office?>&t_office=<?=$t_office?>'">
            </td>
        </tr>
        <hr>
    </table>
    <?php endforeach;?>
</body>

