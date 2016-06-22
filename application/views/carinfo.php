<?php
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/21
 * Time: 21:34
 */?>

<script>
    var brand_a = ["上海", "北京", "武汉", "广州", "深圳", "南京", "西安"];
    var brand_b = {
        "上海": ["上海交通大学", "浦东机场", "世博园区", "金沙江路", "松江新城", "滴水湖"],
        "北京": ["首都机场", "鸟巢", "工体", "五道口", "五棵松", "八宝山"],
        "武汉": ["天河机场", "光谷", "花桥", "和平公园", "常青花园", "汉口火车站"],
        "广州": ["白云机场", "广州火车站", "锦绣新天地", "保利城", "花都体育馆", "南沙金州"],
        "深圳": ["宝安机场", "寰宇", "深圳大剧院", "华强北", "青年路", "坪山天虹"],
        "南京": ["禄口机场", "南京火车站", "仙鹤门", "香格里拉", "红山动物园", "河西奥体"],
        "西安": ["咸阳机场", "西安火车站", "西工大南门", "西安交通大学", "建国饭店", "华清池广场"]
    };
    jQuery(function($){
        var a = $("#brand_a"),
            b = $("#brand_b"),
            c = $("#brand_c");
        a.append("<option value=''>请选择</option>");
        b.append("<option value=''>请选择</option>");
        $(brand_a).each(function(i, dom){
            a.append("<option value='"+dom+"'>" + dom + "</option>");
        });
        a.change(function(){
            var me = $(this),str;
            if(str = me.val()){
                var arr = brand_b[str];
                b.html("").append("<option value=''>请选择</option>");
                $(arr).each(function(i, dom){
                    b.append("<option value='"+dom+"'>" + dom + "</option>");
                });
            }else{
                b.html("").append("<option value=''>请选择</option>");
            }
        });
    });
</script>

<body>
<br>
<div>
    <table class="am-table am-table-bordered am-table-striped am-table-hover">
        <form action="/index.php/Manager/savecar" method="post" class="am-form">
            <tr>
                <td>Car License</td>
                <td>
                    <input type="number" name="license" class="am-form-field am-radius" placeholder="License" minlength="5" maxlength="6"/>
                </td>
            </tr>
            <tr>
                <td>Car type</td>
                <td>
                    <select name="type" data-am-selected required>
                        <option value="Campact">Campact</option>
                        <option value="Economy">Economy</option>
                        <option value="Fullsize">Fullsize</option>
                        <option value="Luxury">Luxury</option>
                        <option value="Mid-size">Mid-size</option>
                        <option value="Premium">Premium</option>
                        <option value="Standard">Standard</option>
                        <option value="SUV">SUV</option>
                        <option value="Van">Van</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Car Place</td>
                <td>
                    <select name="place" id="brand_a" data-am-selected>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Car Office</td>
                <td>
                    <select name="office" id="brand_b" data-am-selected>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Year</td>
                <td>
                    <input type="number" name="year" class="am-form-field am-radius" placeholder="Year" min="0" max="15"/>
                </td>
            </tr>
            <tr>
                <td>Miles</td>
                <td>
                    <input required type="number" name="miles" class="am-form-field am-radius" placeholder="Miles" min="0" max="100000"/>
                </td>
            </tr>
            <tr>
                <td>Purchase Price</td>
                <td>
                    <input required type="number" name="pprice" class="am-form-field am-radius" placeholder="Purchase Price" min="0" max="100000"/>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="am-btn am-btn-primary am-round" name="submit" value="Add Car"/></td>
                <td><input type="reset" class="am-btn am-btn-danger am-round" name="reset" value="Reset"/></td>
            </tr>
        </form>
    </table>
</div>
</body>
