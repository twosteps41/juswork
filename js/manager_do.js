/**
 * 
 */
function initGroup(){
	$("._1fj1").load("./group.php",function(){ 
    	$("._1fj1").fadeIn();
    })
}
function jump(url){
	$("._1fj1").load(url,function(){ 
    	$("._1fj1").fadeIn(10);
    })
}
function initTables(){
	getGroup();
}
function getGroup(){
	$.get('./tp/index.php/index/index/getGroup.html',null,function(data){
		$.each(data.group,function(k,v){
			let userId=v.userId ? v.userId : '-';
			$("#tb_group").append('<tr><td><div>'+v.user+'</td></div><td><div>'+v.name+'</td></div><td><div>'+v.group+'</td></div><td><div>'+v.oid+'</td></div><td><div>'+new Date(v.createTime).toLocaleString()+'</td></div>')
		})
	},'json')
}