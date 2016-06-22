<!--
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/21
 * Time: 21:05
 */-->
<br>
    <style>
        @media only screen and (min-width: 641px) {
            .am-offcanvas {
                display: block;
                position: static;
                background: none;
            }

            .am-offcanvas-bar {
                position: static;
                width: auto;
                background: none;
                -webkit-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .am-offcanvas-bar:after {
                content: none;
            }

        }

        @media only screen and (max-width: 640px) {
            .am-offcanvas-bar .am-nav>li>a {
                color:#ccc;
                border-radius: 0;
                border-top: 1px solid rgba(0,0,0,.3);
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
            }

            .am-offcanvas-bar .am-nav>li>a:hover {
                background: #404040;
                color: #fff
            }

            .am-offcanvas-bar .am-nav>li.am-nav-header {
                color: #777;
                background: #404040;
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
                text-shadow: 0 1px 0 rgba(0,0,0,.5);
                border-top: 1px solid rgba(0,0,0,.3);
                font-weight: 400;
                font-size: 75%
            }

            .am-offcanvas-bar .am-nav>li.am-active>a {
                background: #1a1a1a;
                color: #fff;
                box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
            }

            .am-offcanvas-bar .am-nav>li+li {
                margin-top: 0;
            }
        }

        .my-head {
            margin-top: 40px;
            text-align: center;
        }

        .my-button {
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 0;
        }
        .my-sidebar {
            padding-right: 0;
            border-right: 1px solid #eeeeee;
        }

        .my-footer {
            border-top: 1px solid #eeeeee;
            padding: 10px 0;
            margin-top: 10px;
            text-align: center;
        }
    </style>
<div class="am-g am-g-fixed">
    <div class="am-u-md-9 am-u-md-push-3">
        <div class="am-g">
            <?php foreach($list as $item): ?>
                <div>
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
                            <td class="am-success">Car Year</td>
                            <td class="am-primary"><?=$item->year?></td>
                        </tr>
                        <tr>
                            <td class="am-success">Car Mile</td>
                            <td class="am-primary"><?=$item->miles?></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <?php if ($item->oilnum<100){?>
                                    <input lic="<?=$item->license?>" type="button" name="addoil" onclick="location='/index.php/Manager/addoil?license=<?=$item->license?>'" value="Add Oil" class="am-btn am-btn-primary am-radius">
                                <?php }?>
                            </td>
                        </tr>
                        <hr>
                    </table>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
        <div class="am-offcanvas" id="sidebar">
            <div class="am-offcanvas-bar">
                <ul class="am-nav">
                    <li><a href="#"></a></li>
                    <li class="am-nav-header">Function</li>
                    <li><a href="/index.php/Manager">Show Cars</a></li>
                    <li><a href="/index.php/Manager/showOcar">Show Obsolete Cars</a></li>
                    <li><a href="/index.php/Manager/addcar">Add Cars</a></li>
                    <li><a href="/index.php/Manager/showorder">Show Orders</a></li>
                </ul>
            </div>
        </div>
    </div>
    <a href="#sidebar" class="am-btn am-btn-sm am-btn-success am-icon-bars am-show-sm-only my-button" data-am-offcanvas><span class="am-sr-only">侧栏导航</span></a>
</div>