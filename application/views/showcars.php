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
            <td class="am-success">Car License</td>
            <td class="am-primary"><?=$item->license?></td>
        </tr>
        <tr>
            <td class="am-success">Car Type</td>
            <td class="am-primary"><?=$item->type?></td>
        </tr>
        <tr>
            <td class="am-success">Car Place</td>
            <td class="am-primary"><?=$item->place?></td>
        </tr>
        <tr>
            <td class="am-success">Car Office</td>
            <td class="am-primary"><?=$item->office?></td>
        </tr>
        <tr>
            <td class="am-success">Car Price</td>
            <td class="am-primary"><?=$item->price?></td>
        </tr>
        <tr>
            <td class="am-success">Car Capacity</td>
            <td class="am-primary"><?=$item->capacity?></td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="button" name="order" value="Order" onclick="location='/index.php/Custom/saveorder?license=<?=$item->license?>&r_time=<?=$r_time?>&t_time=<?=$t_time?>&t_place=<?=$t_place?>&r_place=<?=$r_place?>&credit=<?=$credit?>&driver=<?=$driver?>&r_office=<?=$r_office?>&t_office=<?=$t_office?>'">
            </td>
        </tr>
        <hr>
    </table>
    <?php endforeach;?>
</body>

