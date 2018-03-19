function getRootPath(){
    var strFullPath=window.document.location.href;
    var strPath=window.document.location.pathname;
    var pos=strFullPath.indexOf(strPath);
    var prePath=strFullPath.substring(0,pos);
    var postPath=strPath.substring(0,strPath.substr(1).indexOf('/')+1);
    return(prePath+postPath);
   }
function RndNum(n){
	var rand="";
	for(var i=0;i<n;i++)
	rand += Math.floor(Math.random()*10);
	return rand;
}
function changCode(url){
	 var rand = new Date().getTime();
	 var str  = url+'data/include/imagecode.php?act=verifycode&random=' + rand + RndNum(4);
	 $("#checkCodeImg").attr("src",str);
}

$(".msgbtn").click(function(){
	var name      = $("#name");
	var contact   = $("#contact");
	var content   = $("#content");
	var checkcode = $("#checkcode");
	switch (true){
		case name.val() == '':
			alert("姓名不能空！");
			$("#name").focus();
			return false;
			break;
		case contact.val() == '':
			alert("电话不能空！");
			$("#contact").focus();
			return false;
			break;
		case content.val() == '':
			alert("对不起，您还没有留言呢！");
			$("#content").focus();
			return false;
			break;
		case checkcode.val() == '':
			alert("验证码不能为空！");
			$("#checkcode").focus();
			return false;
			break;
	}
	//电话号码验证
    var pattern = new RegExp(/^[0-9-+]+$/);
	if(!pattern.test($("#contact").val()))
	{
		alert('您输入有效电话号码！');
		$("#contact").focus();
		return false;
	}
   if($("#checkcode").val().length != 4){
	   alert("验证码必须是4位");
	   return false;
   }
});
//输入框获得焦点的时候，提示内容消失

$(".m_label").click(function(){
	$(this).hide();
	$(this).siblings(".m_input").focus();
});
$(".m_input").focus(function(){
	$(this).siblings(".m_label").hide();
});
$(".m_input").blur(function(){
	if($(this).val() == ''){
		$(this).siblings(".m_label").show();		
	}
});
$(".m_input").each(function(){
	if($(this).val() != ''){
		$(this).siblings(".m_label").hide();
	}
});


