<?php

/* set_gobank.php */
class __TwigTemplate_ddcc0a56283590148e7aaf82094b8792133808b3351053ca5ae0d050bfd7fc92 extends Twig_Template
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
    <title>帮帮乐</title>
    <base href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi ren\" id=\"gobank\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>添加新卡</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<form action=\"#\" data-ajax=\"false\">
\t\t\t\t<small ><font color=\"#ff7f50\"> 仅支持储蓄卡，不支持信用卡!</font></small>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>开户行：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>账号：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" onblur=\"luhmCheck(this.value)\" />
                        <p style=\"color: red\" id=\"banknoInfo\"></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>预留手机号：</label>
\t\t\t\t\t\t<input type=\"tel\" required=\"\"/>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\" value=\"确认\" data-role=\"none\"/>
\t\t\t</form>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t});
            function luhmCheck(bankno){
                if (bankno.length < 16 || bankno.length > 19) {
                    \$(\"#banknoInfo\").html(\"银行卡号长度必须在16到19之间\");
                    return false;
                }
                var num = /^\\d*\$/;  //全数字
                if (!num.exec(bankno)) {
                    \$(\"#banknoInfo\").html(\"银行卡号必须全为数字\");
                    return false;
                }
                //开头6位
                var strBin=\"10,18,30,35,37,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,58,60,62,65,68,69,84,87,88,94,95,98,99\";
                if (strBin.indexOf(bankno.substring(0, 2))== -1) {
                    \$(\"#banknoInfo\").html(\"银行卡号开头6位不符合规范\");
                    return false;
                }
                var lastNum=bankno.substr(bankno.length-1,1);//取出最后一位（与luhm进行比较）

                var first15Num=bankno.substr(0,bankno.length-1);//前15或18位
                var newArr=new Array();
                for(var i=first15Num.length-1;i>-1;i--){    //前15或18位倒序存进数组
                    newArr.push(first15Num.substr(i,1));
                }
                var arrJiShu=new Array();  //奇数位*2的积 <9
                var arrJiShu2=new Array(); //奇数位*2的积 >9

                var arrOuShu=new Array();  //偶数位数组
                for(var j=0;j<newArr.length;j++){
                    if((j+1)%2==1){//奇数位
                        if(parseInt(newArr[j])*2<9)
                            arrJiShu.push(parseInt(newArr[j])*2);
                        else
                            arrJiShu2.push(parseInt(newArr[j])*2);
                    }
                    else //偶数位
                        arrOuShu.push(newArr[j]);
                }

                var jishu_child1=new Array();//奇数位*2 >9 的分割之后的数组个位数
                var jishu_child2=new Array();//奇数位*2 >9 的分割之后的数组十位数
                for(var h=0;h<arrJiShu2.length;h++){
                    jishu_child1.push(parseInt(arrJiShu2[h])%10);
                    jishu_child2.push(parseInt(arrJiShu2[h])/10);
                }

                var sumJiShu=0; //奇数位*2 < 9 的数组之和
                var sumOuShu=0; //偶数位数组之和
                var sumJiShuChild1=0; //奇数位*2 >9 的分割之后的数组个位数之和
                var sumJiShuChild2=0; //奇数位*2 >9 的分割之后的数组十位数之和
                var sumTotal=0;
                for(var m=0;m<arrJiShu.length;m++){
                    sumJiShu=sumJiShu+parseInt(arrJiShu[m]);
                }

                for(var n=0;n<arrOuShu.length;n++){
                    sumOuShu=sumOuShu+parseInt(arrOuShu[n]);
                }

                for(var p=0;p<jishu_child1.length;p++){
                    sumJiShuChild1=sumJiShuChild1+parseInt(jishu_child1[p]);
                    sumJiShuChild2=sumJiShuChild2+parseInt(jishu_child2[p]);
                }
                //计算总和
                sumTotal=parseInt(sumJiShu)+parseInt(sumOuShu)+parseInt(sumJiShuChild1)+parseInt(sumJiShuChild2);

                //计算Luhm值
                var k= parseInt(sumTotal)%10==0?10:parseInt(sumTotal)%10;
                var luhm= 10-k;

                if(lastNum==luhm){
                    \$(\"#banknoInfo\").html(null);
                    return true;
                }
                else{
                    \$(\"#banknoInfo\").html(\"请输入正确的银行卡号\");
                    return false;
                }
            }
   \t\t</script>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_gobank.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>帮帮乐</title>
    <base href=\"{{host}}public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi ren\" id=\"gobank\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>添加新卡</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<form action=\"#\" data-ajax=\"false\">
\t\t\t\t<small ><font color=\"#ff7f50\"> 仅支持储蓄卡，不支持信用卡!</font></small>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>开户行：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>账号：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" onblur=\"luhmCheck(this.value)\" />
                        <p style=\"color: red\" id=\"banknoInfo\"></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>预留手机号：</label>
\t\t\t\t\t\t<input type=\"tel\" required=\"\"/>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\" value=\"确认\" data-role=\"none\"/>
\t\t\t</form>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t});
            function luhmCheck(bankno){
                if (bankno.length < 16 || bankno.length > 19) {
                    \$(\"#banknoInfo\").html(\"银行卡号长度必须在16到19之间\");
                    return false;
                }
                var num = /^\\d*\$/;  //全数字
                if (!num.exec(bankno)) {
                    \$(\"#banknoInfo\").html(\"银行卡号必须全为数字\");
                    return false;
                }
                //开头6位
                var strBin=\"10,18,30,35,37,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,58,60,62,65,68,69,84,87,88,94,95,98,99\";
                if (strBin.indexOf(bankno.substring(0, 2))== -1) {
                    \$(\"#banknoInfo\").html(\"银行卡号开头6位不符合规范\");
                    return false;
                }
                var lastNum=bankno.substr(bankno.length-1,1);//取出最后一位（与luhm进行比较）

                var first15Num=bankno.substr(0,bankno.length-1);//前15或18位
                var newArr=new Array();
                for(var i=first15Num.length-1;i>-1;i--){    //前15或18位倒序存进数组
                    newArr.push(first15Num.substr(i,1));
                }
                var arrJiShu=new Array();  //奇数位*2的积 <9
                var arrJiShu2=new Array(); //奇数位*2的积 >9

                var arrOuShu=new Array();  //偶数位数组
                for(var j=0;j<newArr.length;j++){
                    if((j+1)%2==1){//奇数位
                        if(parseInt(newArr[j])*2<9)
                            arrJiShu.push(parseInt(newArr[j])*2);
                        else
                            arrJiShu2.push(parseInt(newArr[j])*2);
                    }
                    else //偶数位
                        arrOuShu.push(newArr[j]);
                }

                var jishu_child1=new Array();//奇数位*2 >9 的分割之后的数组个位数
                var jishu_child2=new Array();//奇数位*2 >9 的分割之后的数组十位数
                for(var h=0;h<arrJiShu2.length;h++){
                    jishu_child1.push(parseInt(arrJiShu2[h])%10);
                    jishu_child2.push(parseInt(arrJiShu2[h])/10);
                }

                var sumJiShu=0; //奇数位*2 < 9 的数组之和
                var sumOuShu=0; //偶数位数组之和
                var sumJiShuChild1=0; //奇数位*2 >9 的分割之后的数组个位数之和
                var sumJiShuChild2=0; //奇数位*2 >9 的分割之后的数组十位数之和
                var sumTotal=0;
                for(var m=0;m<arrJiShu.length;m++){
                    sumJiShu=sumJiShu+parseInt(arrJiShu[m]);
                }

                for(var n=0;n<arrOuShu.length;n++){
                    sumOuShu=sumOuShu+parseInt(arrOuShu[n]);
                }

                for(var p=0;p<jishu_child1.length;p++){
                    sumJiShuChild1=sumJiShuChild1+parseInt(jishu_child1[p]);
                    sumJiShuChild2=sumJiShuChild2+parseInt(jishu_child2[p]);
                }
                //计算总和
                sumTotal=parseInt(sumJiShu)+parseInt(sumOuShu)+parseInt(sumJiShuChild1)+parseInt(sumJiShuChild2);

                //计算Luhm值
                var k= parseInt(sumTotal)%10==0?10:parseInt(sumTotal)%10;
                var luhm= 10-k;

                if(lastNum==luhm){
                    \$(\"#banknoInfo\").html(null);
                    return true;
                }
                else{
                    \$(\"#banknoInfo\").html(\"请输入正确的银行卡号\");
                    return false;
                }
            }
   \t\t</script>
\t</div>
</body>
</html>";
    }
}
