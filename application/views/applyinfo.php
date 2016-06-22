<?php
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/18
 * Time: 18:48
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

<script>
    var brand_d = ["上海", "北京", "武汉", "广州", "深圳", "南京", "西安"];
    var brand_e = {
        "上海": ["上海交通大学", "浦东机场", "世博园区", "金沙江路", "松江新城", "滴水湖"],
        "北京": ["首都机场", "鸟巢", "工体", "五道口", "五棵松", "八宝山"],
        "武汉": ["天河机场", "光谷", "花桥", "和平公园", "常青花园", "汉口火车站"],
        "广州": ["白云机场", "广州火车站", "锦绣新天地", "保利城", "花都体育馆", "南沙金州"],
        "深圳": ["宝安机场", "寰宇", "深圳大剧院", "华强北", "青年路", "坪山天虹"],
        "南京": ["禄口机场", "南京火车站", "仙鹤门", "香格里拉", "红山动物园", "河西奥体"],
        "西安": ["咸阳机场", "西安火车站", "西工大南门", "西安交通大学", "建国饭店", "华清池广场"]
    };
    jQuery(function($){
        var d = $("#brand_d"),
            e = $("#brand_e"),
            f = $("#brand_f");
        d.append("<option value=''>请选择</option>");
        e.append("<option value=''>请选择</option>");
        $(brand_d).each(function(i, dom){
            d.append("<option value='"+dom+"'>" + dom + "</option>");
        });
        d.change(function(){
            var me = $(this),str;
            if(str = me.val()){
                var arr = brand_e[str];
                e.html("").append("<option value=''>请选择</option>");
                $(arr).each(function(i, dom){
                    e.append("<option value='"+dom+"'>" + dom + "</option>");
                });
            }else{
                e.html("").append("<option value=''>请选择</option>");
            }
        });
    });
</script>


<body>
<div>
    <table class="am-table am-table-bordered am-table-striped am-table-hover">
        <form action="showcars" method="post" class="am-form">
            <tr>
                <td>Person Name</td>
                <td>
                    <input type="text" name="name" class="am-form-field am-radius" readonly="true" value="<?php echo $_SESSION['name']; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td>
                    <input type="text" name="phone" class="am-form-field am-radius" readonly="true" value="<?php echo $_SESSION['phone']; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Credit Card Number</td>
                <td>
                    <input type="number" name="credit" class="am-form-field am-radius" placeholder="Credit Card Number" minlength="10" maxlength="12" required />
                </td>
            </tr>
            <tr>
                <td>Driver Information</td>
                <td>
                    <input type="number" name="driverinfo" class="am-form-field am-radius" placeholder="Driver Information" minlength="4" maxlength="8" required />
                </td>
            </tr>
            <tr>
                <td>Take-car Place</td>
                <td>
                    <select name="takeplace" id="brand_a" data-am-selected>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Take-car Office</td>
                <td>
                    <select name="takeoffice" id="brand_b" data-am-selected>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Take-car Time</td>
                <td>
                    <input required type="text" name="taketime" class="am-form-field am-radius" placeholder="Take-car Time" data-am-datepicker readonly required />
                </td>
            </tr>
            <tr>
                <td>Return-car Place</td>
                <td>
                    <select name="returnplace" id="brand_d" data-am-selected>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Return-car Office</td>
                <td>
                    <select name="returnoffice" id="brand_e" data-am-selected>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Return-car Time</td>
                <td>
                    <input required type="text" name="returntime" class="am-form-field am-radius" placeholder="Return-car Time" data-am-datepicker readonly required />
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="am-btn am-btn-primary am-round" name="submit" value="Search Car"/></td>
                <td><input type="reset" class="am-btn am-btn-danger am-round" name="reset" value="Reset"/></td>
            </tr>
        </form>
    </table>
</div>
</body>
