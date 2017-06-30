/**
 * 
 */
function initManager(){
	$("._1fj1").load("./manager.php",function(){ 
    	$("._1fj1").fadeIn();
    })
}
function jump(url){
	$("._1fj1").load(url,function(){ 
    	$("._1fj1").fadeIn(10);
    })
}
function initTables(){
	getManagers();
}
function getManagers(){
	$.get('./tp/index.php/index/index/getManager.html',null,function(data){
		// if(data.manage){
			$.each(data.manage,function(k,v){
				let userId=v.userId ? v.userId : '-';
				$("#tb_manager").append('<tr><td><div>'+v.user+'</td></div><td><div>'+userId+'</td></div><td><div>'+v.role+'</td></div><td><div>'+new Date(v.createTime).toLocaleString()+'</td></div></tr>')
			});
			$.each(data.group,function(k,v){
				let userId=v.userId ? v.userId : '-';
				$("#tb_group").append('<tr><td><div>'+v.user+'</td></div><td><div>'+v.name+'</td></div><td><div>'+v.group+'</td></div><td><div>'+v.oid+'</td></div><td><div>'+new Date(v.createTime).toLocaleString()+'</td></div>')
			})
		// }else{
			// location.href='manager_main.php';
		// }
	},'json')
}