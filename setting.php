<?php
/*
WordPress Plus + 插件选项页面
*/
    // 保存设置 //
    if ($_POST['update_pluginoptions'] == 'true') {
        wordpressplus_pluginoptions_update();
    echo '<div id="save" class="updated settings-error notice is-dismissible" style="width:575px;"><p><b>插件设置已保存。</b></p></div>';
    }
?>
<div class="wrap">
<p>
<h2>WordPress Plus + 插件选项</h2>
<div id="message" class="updated" style="width:600px;">
<p>1.7.1版本修复了"禁止全英文评论"功能可能会造成访客无法评论的严重bug并对插件架构进行优化 </br> 非常抱歉，如果您之前使用1.7版本，可能会导致新访客评论提示禁止英文评论的提示</p>
</div>
<form method="POST" action="">
<input type="hidden" name="update_pluginoptions" value="true" />
<b>优化增强</b><hr />
<input type="checkbox" name="msyh" id="msyh" <?php
    echo get_option('wordpressplus_msyh');
?> /> 修改后台中文字体为微软雅黑（Mac系统下为Helvetica）<p>
<input type="checkbox" name="sslgravatar" id="sslgravatar" <?php
    echo get_option('wordpressplus_sslgravatar');
?> /> 使用SSL方式调用Gravatar头像<p>
<input type="checkbox" name="bing" id="bing" <?php
    echo get_option('wordpressplus_bing');
?> /> 调用Bing美图作为登陆界面背景<p>
<input type="checkbox" name="chinesetalk" id="chinesetalk" <?php
    echo get_option('wordpressplus_chinesetalk');
?> /> 禁止全英文评论<p>
<input type="checkbox" name="emoji" id="emoji" <?php
    echo get_option('wordpressplus_emoji');
?> /> 禁用WordPress的emoji表情（仅WP4.2以上版本有效）<p>
<b>SEO优化</b><hr />
<input type="checkbox" name="pingback" id="pingback" <?php
    echo get_option('wordpressplus_pingback');
?> /> 禁止站内文章相互PingBack<p>
<input type="checkbox" name="nofollow" id="nofollow" <?php
    echo get_option('wordpressplus_nofollow');
?> /> 自动为博客内的连接添加nofollow属性并在新窗口打开链接<p>
<input type="submit" class="button-primary" value="保存设置" />
<p>WordPress Plus + 版本 1.7.1 </br> 插件开发离不开一些<a href="http://blog.czelo.com/wordpress_plus#thanks">网站</a>的分享 <a href="http://blog.czelo.com/wordpress_plus">吐槽 & 建议</a>
</form>
</div>
<?php
// 插件设置提交验证  //
function wordpressplus_pluginoptions_update()
{
    if ($_POST['msyh'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_msyh', $display);
    
    if ($_POST['sslgravatar'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_sslgravatar', $display);
    
    if ($_POST['pingback'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_pingback', $display);
    
    if ($_POST['nofollow'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_nofollow', $display);
    
    if ($_POST['bing'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_bing', $display);

    if ($_POST['chinesetalk'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_chinesetalk', $display);

    if ($_POST['emoji'] == 'on') {
        $display = 'checked';
    } else {
        $display = '';
    }
    update_option('wordpressplus_emoji', $display);
}
?>