<!-- XUSOFT版权所有 
成员:cxbsoft | xcsoft | xltzsoft 
时间:7/19 
修改次数:5 
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href=" ./assets/img/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XUSOFT - 团队介绍</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
    </head>
     <body background="./assets/img/background.png" class="mdui-theme-primary-indigo mdui-theme-accent-pink">
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['email']) || !empty($_POST['content'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $content=$_POST['content'];
    $conn=mysqli_connect("localhost","soxft","Wabadmin.1","soxft");
    $sql="INSERT INTO `contact` VALUES('$name','$email','$content')";
    $go=mysqli_query($conn,$sql);
    echo 
<<<EOF
<br/>
<br/>
    <h1>
    <center>
            <div class="doc-example-demo font-demo" style="font-weight: 400;">
                已送达
            </div>
            </center>
        </h1>
EOF;
header("Refresh:2;url=\"./index.php\"");
}else{
    echo 
<<<EOF
   <br/>
<br/>
    <h1>
    <center>
            <div class="doc-example-demo font-demo" style="font-weight: 400;">
                请确认已将必填项填写完整后重试!
            </div>
            </center>
        </h1>
               
EOF;
header("Refresh:2;url=\"./index.php\"");
}
}else{
?>
        <center>
             <h1>
        <div class="doc-example-demo font-demo" style="font-weight:900;">
           关于我们
        </div>
        </h1>
            </div>
            </div>
        </center>
        <!-- 介绍 -->
        <!-- 团队介绍 -->
<h3><div class="doc-example-demo font-demo" style="font-weight:500;">
    我们的团队：
      </div></h3>
        <!-- 团队卡片 -->
        <div class="mdui-card">
            <div class="mdui-card-media">
                <img src="./assets/img/team.png" />
                <div class="mdui-card-media-covered">
                    <div class="mdui-card-primary">
                        <div class="mdui-card-primary-title">XUSOFT</div>
                        <div class="mdui-card-primary-subtitle">XUSOFT团队于2018在南通成立。
                            <br />这是由一群网络爱好者组成的团队。</div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <!--核心成员-->
        <h4>
            <div class="doc-example-demo font-demo" style="font-weight: 400;">
    团队核心成员：
            </div>
        </h4>
        <!-- cxbsoft -->
        <div class="mdui-card">
            <div class="mdui-card-header">
                <img class="mdui-card-header-avatar" src="./assets/img/xusoft.jpg" />
                <div class="mdui-card-header-title">cxbsoft</div>
                <div class="mdui-card-header-subtitle">没有解决不了的问题</div>
            </div>
            <div class="mdui-card-primary">
                <div class="mdui-card-primary-title">育才2017级 - 蔡徐博</div>
                <div class="mdui-card-primary-subtitle">擅长Python,PHP等</div>
            </div>
            <div class="mdui-card-actions">
                <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#cxb'}">详细信息</button>
                <div class="mdui-dialog" id="cxb"> 
                 <div class="mdui-dialog-content">
                    <div class="mdui-progress"></div>
                    <div class="mdui-card">
                        <div class="mdui-card-header">
                            <img class="mdui-card-header-avatar" src="./assets/img/xusoft.jpg" />
                            <div class="mdui-card-header-title">cxbsoft</div>
                            <div class="mdui-card-header-subtitle">`python攻城狮`</div>
                        </div>
                        <div class="mdui-card">
                            <center><h2>历史项目</h2></center>
                        <div class="mdui-card-primary">
                            <div class="mdui-card-primary-title">家庭安防</div>
                            <div class="mdui-card-primary-subtitle">&emsp;&emsp;利用Python配合树莓派实时读取传感器数据上传至云服务器,实现家庭安防感知.并同时通过科大讯飞api实现语音合成及语言唤醒功能</div>
                            <br />
                            <div class="mdui-card-primary-title">文件自动同步系统</div>
                            <div class="mdui-card-primary-subtitle">&emsp;&emsp;利用Python的socket协议实现计算机之间的文件传送及远程编写</div>
                            <br />
                            <div class="mdui-card-primary-title">宠物房车</div>
                            <div class="mdui-card-primary-subtitle">&emsp;&emsp;通过两块arduino及多种传感器,实现红外遥控,温度控制等功能</div>
                            <h1><center>······</center></h1>
                        </div>
                        </div>
                        <div class="mdui-card-actions"> <a class="mdui-btn mdui-ripple" href="//blog.cxbsoft.top">个人博客</a>
                        <a class="mdui-btn mdui-ripple" href="//github.com/cxbsoft">Github</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br/>
        <!-- xcsoft -->
        <div class="mdui-card">
            <div class="mdui-card-header">
                <img class="mdui-card-header-avatar" src="./assets/img/xcsoft.jpg" />
                <div class="mdui-card-header-title">xcsoft</div>
                <div class="mdui-card-header-subtitle">原諒我這一生 不羁放纵爱自由</div>
            </div>
            <div class="mdui-card-media"></div>
            <div class="mdui-card-primary">
                <div class="mdui-card-primary-title">通高2019级 - 徐畅</div>
                <div class="mdui-card-primary-subtitle">擅长PHP,HTML等</div>
            </div>
            <div class="mdui-card-actions">
                <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#xc'}">详细信息</button>
                <div class="mdui-dialog" id="xc">
                    <div class="mdui-dialog-content">
                    <div class="mdui-progress"></div>
                    <div class="mdui-card">
                        <div class="mdui-card-header">
                            <img class="mdui-card-header-avatar" src="./assets/img/xcsoft.jpg" />
                            <div class="mdui-card-header-title">xcsoft</div>
                            <div class="mdui-card-header-subtitle">`PHP攻城狮`</div>
                        </div>
                       <div class="mdui-card">
                            <center><h2>历史项目</h2></center>
                        <div class="mdui-card-primary">
                            <div class="mdui-card-primary-title">URLshorting</div>
                            <div class="mdui-card-primary-subtitle">&emsp;&emsp;星辰短域|密语 - 一款简洁美观的短域|密语程序,独创密语功能,可通过短域向别人传达信息。</div>
                            <br />
                            <div class="mdui-card-primary-title">Lovewall</div>
                            <div class="mdui-card-primary-subtitle">&emsp;&emsp;星辰表白墙 - 一款简洁美观的表白墙,这是一个悄悄话平台</div>
                            <br />
                            <div class="mdui-card-primary-title">Typecho-sitemap.php</div>
                            <div class="mdui-card-primary-subtitle">&emsp;&emsp;一个网页版的typecho站点地图</div>
                            <h1><center>······</center></h1>
                        </div>
                         </div>
                        <div class="mdui-card-actions"> 
                            <a class="mdui-btn mdui-ripple" href="//blog.xsot.cn">个人博客</a>
                            <a class="mdui-btn mdui-ripple" href="//github.com/soxft">Github</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        <br/>
        <!-- xltzsoft -->
        <div class="mdui-card">
            <div class="mdui-card-header">
                <img class="mdui-card-header-avatar" src="./assets/img/xusoft.jpg" />
                <div class="mdui-card-header-title">xltzsoft</div>
                <div class="mdui-card-header-subtitle">noi不拿国一不罢休</div>
            </div>
            <div class="mdui-card-primary">
                <div class="mdui-card-primary-title">通高2019级 - 徐陆天泽</div>
                <div class="mdui-card-primary-subtitle">擅长PHP,C++等</div>
            </div>
            <div class="mdui-card-actions">
                <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#xltz'}">详细信息</button>
                <div class="mdui-dialog" id="xltz">
                    <div class="mdui-dialog-content">
                    <div class="mdui-progress"></div>
                    <div class="mdui-card">
                        <div class="mdui-card-header">
                            <img class="mdui-card-header-avatar" src="./assets/img/xusoft.jpg" />
                            <div class="mdui-card-header-title">xltzsoft</div>
                            <div class="mdui-card-header-subtitle">`C++攻城狮`</div>
                        </div>
                         <div class="mdui-card">
                            <center><h2>历史项目</h2></center>
                        <div class="mdui-card-primary">
                               <h3><center>暂无更多</center>
                                 <h1><center>······</center></h1>
                                 </div>
                                 </div>
                              <div class="mdui-card-actions"> <a class="mdui-btn mdui-ripple" href="//soxft.cn">个人博客</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
         <h4>
            <div class="doc-example-demo font-demo" style="font-weight: 400;">
    团队项目：
            </div>
        </h4>
          <div class="mdui-card">
                    <div class="mdui-card-primary">
                <div class="mdui-card-primary-title">Yucai-system</div>
                <div class="mdui-card-primary-subtitle">育才团员管理系统 - 由cxbsoft和xcsoft合作完成,建立在PHP和Python的语言基础上,实现了学校对团员系统化的加扣分等系统化的管理,同时由cxbsoft自主编写的Doraemon Brain,实现了对学校网络设备的系统化管理。整套系统至今仍处于开发状态。</div>
            </div>
            </div>
            <h1><center>······</center></h1>
    <h4>
        <div class="doc-example-demo font-demo" style="font-weight: 400;">
    联系我们：
        </div>
    </h4>
    <div class="mdui-chip">
        <span class="mdui-chip-title"  mdui-dialog="{target: '#contact'}" >快捷联系</span>
    </div>
<div class="mdui-dialog" id="contact">
    <div class="mdui-dialog-content">
        <div class="mdui-progress"></div>
            <h2>
                <center>
                <div class="doc-example-demo font-demo" style="font-weight: 600;">
                    快捷联系：
                </div>
                </center>
            </h2>
            <div class="mdui-card">
            <form action="" method="post">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">姓名</label>
                <input name="name" type="text" class="mdui-textfield-input" type="text" />
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">邮箱*</label>
                <input name="email" type="text" class="mdui-textfield-input" type="text" />
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">内容*</label>
                <input name="content" type="text" class="mdui-textfield-input" type="text" />
                <div class="mdui-textfield-helper">
                      打*的为必填项
                </div>
                </div>
                <center>
                    <input class="mdui-btn mdui-btn-raised mdui-ripple" type="submit" name="submit" value="发送" />
                </center>
                <br />
            </form>
        </div>
        </div>
        </div>
        </div>
            </body>
        </br>
        </br>
        <?php
        }
        ?>
    <footer>
        <div class="mdui-divider-inset"></div>
        <!-- 版权 -->
        <center>
            <p>Copyright &copy;<?php echo "2018-" . date( "Y") ?> <a href='http://soxft.cn'>XUSOFT</a> All Rights Reserved</p>
            <center>
    </footer>
</html>