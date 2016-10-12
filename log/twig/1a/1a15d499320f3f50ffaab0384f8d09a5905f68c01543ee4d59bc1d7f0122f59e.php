<?php

/* send.php */
class __TwigTemplate_8351bd119a906e0438ac0448aff8cc9ce917dbd67ed7e7628f9285974b3557db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
</head>

<!-- 地图样式 -->
<style type=\"text/css\">
\tbody, html {width: 100%;height: 100%;margin:0;font-family:\"微软雅黑\";}
\t#allmap{width:100%;height:500px;}
\tp{margin-left:5px; font-size:14px;}
</style>

<!-- 地图ak -->
<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>

<!-- 遮罩层样式 -->
<style type=\"text/css\">     
    .mask {       
            position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
            z-index: 1002; left: 0px;     
            -moz-opacity:0.5;     
        } 
</style>
<body>
\t<div class=\"loading\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ajax-loader.gif\"/></div>
\t<!-- 遮罩层 -->
\t<div id=\"mask\" class=\"mask\" style=\"display:none;\">
\t\t<div id=\"allmap\"></div>
\t</div>
\t<div data-role=\"page\" class=\"touzi\" id=\"touzi\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>发单</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t <div data-role=\"main\" class=\"ui-content\">
\t\t\t    <form method=\"post\" action=\"demo_form.php\">
\t\t\t      <div class=\"ui-field-contain\">
\t\t\t        <label for=\"fullname\">标题：</label>
\t\t\t        <input type=\"text\" name=\"fullname\" id=\"fullname\"> 
\t\t\t        <label for=\"fullname\">详情：</label>
\t\t\t        <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\"></textarea>   
\t\t\t        <label for=\"fullname\">个人联系方式</label>
\t\t\t        <input type=\"text\" name=\"call\" id=\"fullname\"> 
\t\t\t        <label for=\"bday\">结束时间：</label>
\t\t\t        <input type=\"date\" name=\"bday\" id=\"bday\">
\t\t\t        <label for=\"email\">E-mail:</label>
\t\t\t        <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"你的电子邮箱..\">
\t\t\t\t\t<label for=\"fullname\">本单金额：</label>
\t\t\t        <input type=\"text\" name=\"list_money\" id=\"fullname\"> 
\t\t\t        <label for=\"fullname\">标违约金额：</label>
\t\t\t        <input type=\"text\" name=\"violate_money\" id=\"fullname\"> 
\t\t\t        <label for=\"fullname\">任务地址：</label>
\t\t\t        <input type=\"text\" name=\"fullname\" onclick=\"showMask()\" id=\"address\" value=\"\">
\t\t\t        <label for=\"fullname\">约定交易地址：</label>
\t\t\t        <input type=\"text\" name=\"fullname\" id=\"end_address\" value=\"\"> 
\t\t\t      </div>
\t\t\t      <input type=\"submit\" data-inline=\"true\" value=\"提交\">
\t\t\t    </form>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.min.js\"></script>
   \t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t\t//var id = 1;
\t\t\t\t\t//location.href=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/touzi.html?id=1\";
\t\t\t\t})
   \t\t</script>
   // \t\t<script>
   // \t\t\t//定位当前位置
   // \t\t\t\$(function(){
\t\t\t//   if (navigator.geolocation)
\t\t\t//     {
\t\t\t//     navigator.geolocation.getCurrentPosition(showPosition);
\t\t\t//     }
\t\t\t//   else{x.innerHTML=\"Geolocation is not supported by this browser.\";}

\t\t\t// })
\t\t\t// function showPosition(position)
\t\t\t//   {
\t\t\t//           \$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+position.coords.latitude+','+position.coords.longitude+'&output=json&pois=1',function(msg){
\t\t\t//           \t\$(\"#address\").val(msg.result.formatted_address)
\t\t\t//           },'jsonp')
\t\t\t//   }
   // \t\t</script>
\t\t<script>
\t\t\t\$(\"#end_address\").click(function(){

\t\t\t})
\t\t</script>
\t\t<pre class=\"html\" name=\"code\"><script type=\"text/javascript\">     
\t\t    //兼容火狐、IE8   
\t\t    //显示遮罩层    
\t\t    function showMask(){     
\t\t        \$(\"#mask\").css(\"height\",\$(document).height());     
\t\t        \$(\"#mask\").css(\"width\",\$(document).width());     
\t\t        \$(\"#mask\").show();     
\t\t    }  
\t\t    //隐藏遮罩层  
\t\t    function hideMask(){     
\t\t          
\t\t        \$(\"#mask\").hide();     
\t\t    }  
\t\t</script>  
\t\t<script>
\t\t\t//获取经纬度
\t\t\t    \$(function(){  
\t\t\t      if (navigator.geolocation)  
\t\t\t        {  
\t\t\t        navigator.geolocation.getCurrentPosition(showPosition);  
\t\t\t        }  
\t\t\t      else{x.innerHTML=\"Geolocation is not supported by this browser.\";}  
\t\t\t      
\t\t\t    })  

\t\t\t\t// 百度地图API功能
\t\t\t\tfunction showPosition(position)
\t\t\t\t{
\t\t\t\t\t\t// 百度地图API功能
\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\tmap.centerAndZoom(new BMap.Point(position.coords.longitude,position.coords.latitude),8);
\t\t\t\t// map.centerAndZoom(point,12);
\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tmap.setZoom(14);   
\t\t\t\t\t}, 2000);  //2秒后放大到14级
\t\t\t\t\tmap.enableScrollWheelZoom(true);
\t\t\t\tvar geoc = new BMap.Geocoder();    

\t\t\t\tmap.addEventListener(\"click\", function(e){ 
\t\t\t\t\t//经纬度获取       
\t\t\t\t\talert(e.point.lng + \", \" + e.point.lat);
\t\t\t\t\t\$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+e.point.lat+','+e.point.lng+'&output=json&pois=1',function(msg){
\t\t\t\t      \talert(msg.result.formatted_address)
\t\t\t\t    },'jsonp')       
\t\t\t\t});
\t\t\t\t}
\t\t</script>
\t</div>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "send.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 77,  107 => 72,  103 => 71,  69 => 40,  62 => 36,  58 => 35,  48 => 28,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
</head>

<!-- 地图样式 -->
<style type=\"text/css\">
\tbody, html {width: 100%;height: 100%;margin:0;font-family:\"微软雅黑\";}
\t#allmap{width:100%;height:500px;}
\tp{margin-left:5px; font-size:14px;}
</style>

<!-- 地图ak -->
<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>

<!-- 遮罩层样式 -->
<style type=\"text/css\">     
    .mask {       
            position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
            z-index: 1002; left: 0px;     
            -moz-opacity:0.5;     
        } 
</style>
<body>
\t<div class=\"loading\"><img src=\"{{host}}public/images/ajax-loader.gif\"/></div>
\t<!-- 遮罩层 -->
\t<div id=\"mask\" class=\"mask\" style=\"display:none;\">
\t\t<div id=\"allmap\"></div>
\t</div>
\t<div data-role=\"page\" class=\"touzi\" id=\"touzi\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"{{host}}public/css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"{{host}}public/css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"{{host}}public/#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>发单</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t <div data-role=\"main\" class=\"ui-content\">
\t\t\t    <form method=\"post\" action=\"demo_form.php\">
\t\t\t      <div class=\"ui-field-contain\">
\t\t\t        <label for=\"fullname\">标题：</label>
\t\t\t        <input type=\"text\" name=\"fullname\" id=\"fullname\"> 
\t\t\t        <label for=\"fullname\">详情：</label>
\t\t\t        <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\"></textarea>   
\t\t\t        <label for=\"fullname\">个人联系方式</label>
\t\t\t        <input type=\"text\" name=\"call\" id=\"fullname\"> 
\t\t\t        <label for=\"bday\">结束时间：</label>
\t\t\t        <input type=\"date\" name=\"bday\" id=\"bday\">
\t\t\t        <label for=\"email\">E-mail:</label>
\t\t\t        <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"你的电子邮箱..\">
\t\t\t\t\t<label for=\"fullname\">本单金额：</label>
\t\t\t        <input type=\"text\" name=\"list_money\" id=\"fullname\"> 
\t\t\t        <label for=\"fullname\">标违约金额：</label>
\t\t\t        <input type=\"text\" name=\"violate_money\" id=\"fullname\"> 
\t\t\t        <label for=\"fullname\">任务地址：</label>
\t\t\t        <input type=\"text\" name=\"fullname\" onclick=\"showMask()\" id=\"address\" value=\"\">
\t\t\t        <label for=\"fullname\">约定交易地址：</label>
\t\t\t        <input type=\"text\" name=\"fullname\" id=\"end_address\" value=\"\"> 
\t\t\t      </div>
\t\t\t      <input type=\"submit\" data-inline=\"true\" value=\"提交\">
\t\t\t    </form>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"{{host}}public/js/jquery.min.js\"></script>
   \t\t<script src=\"{{host}}public/js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t\t//var id = 1;
\t\t\t\t\t//location.href=\"{{host}}public/touzi.html?id=1\";
\t\t\t\t})
   \t\t</script>
   // \t\t<script>
   // \t\t\t//定位当前位置
   // \t\t\t\$(function(){
\t\t\t//   if (navigator.geolocation)
\t\t\t//     {
\t\t\t//     navigator.geolocation.getCurrentPosition(showPosition);
\t\t\t//     }
\t\t\t//   else{x.innerHTML=\"Geolocation is not supported by this browser.\";}

\t\t\t// })
\t\t\t// function showPosition(position)
\t\t\t//   {
\t\t\t//           \$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+position.coords.latitude+','+position.coords.longitude+'&output=json&pois=1',function(msg){
\t\t\t//           \t\$(\"#address\").val(msg.result.formatted_address)
\t\t\t//           },'jsonp')
\t\t\t//   }
   // \t\t</script>
\t\t<script>
\t\t\t\$(\"#end_address\").click(function(){

\t\t\t})
\t\t</script>
\t\t<pre class=\"html\" name=\"code\"><script type=\"text/javascript\">     
\t\t    //兼容火狐、IE8   
\t\t    //显示遮罩层    
\t\t    function showMask(){     
\t\t        \$(\"#mask\").css(\"height\",\$(document).height());     
\t\t        \$(\"#mask\").css(\"width\",\$(document).width());     
\t\t        \$(\"#mask\").show();     
\t\t    }  
\t\t    //隐藏遮罩层  
\t\t    function hideMask(){     
\t\t          
\t\t        \$(\"#mask\").hide();     
\t\t    }  
\t\t</script>  
\t\t<script>
\t\t\t//获取经纬度
\t\t\t    \$(function(){  
\t\t\t      if (navigator.geolocation)  
\t\t\t        {  
\t\t\t        navigator.geolocation.getCurrentPosition(showPosition);  
\t\t\t        }  
\t\t\t      else{x.innerHTML=\"Geolocation is not supported by this browser.\";}  
\t\t\t      
\t\t\t    })  

\t\t\t\t// 百度地图API功能
\t\t\t\tfunction showPosition(position)
\t\t\t\t{
\t\t\t\t\t\t// 百度地图API功能
\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\tmap.centerAndZoom(new BMap.Point(position.coords.longitude,position.coords.latitude),8);
\t\t\t\t// map.centerAndZoom(point,12);
\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tmap.setZoom(14);   
\t\t\t\t\t}, 2000);  //2秒后放大到14级
\t\t\t\t\tmap.enableScrollWheelZoom(true);
\t\t\t\tvar geoc = new BMap.Geocoder();    

\t\t\t\tmap.addEventListener(\"click\", function(e){ 
\t\t\t\t\t//经纬度获取       
\t\t\t\t\talert(e.point.lng + \", \" + e.point.lat);
\t\t\t\t\t\$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+e.point.lat+','+e.point.lng+'&output=json&pois=1',function(msg){
\t\t\t\t      \talert(msg.result.formatted_address)
\t\t\t\t    },'jsonp')       
\t\t\t\t});
\t\t\t\t}
\t\t</script>
\t</div>
\t
</body>
</html>";
    }
}
