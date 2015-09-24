var login = {
	doLogin: function (){
		var user = {
			action: 'wing-ajax-signin',
			username: jQuery("#username").val(),
			password: jQuery("#password").val()
		};
		jQuery.post('wp-admin/admin-ajax.php', user, function(data){
			if(data.success != undefined && data.success == true){
				window.location.reload();
			}else{
				alert(data.error);
			}
		},"json").fail(function(data) {
			alert('Fail');
		});
	},
	doTwitter: function(){
		
		var user = {
			action: 'wings-twitter-login',
			callbackurl: encodeURI(window.location.href)
		};
		jQuery.post('wp-admin/admin-ajax.php', user, function(data){
			if(data.success != undefined && data.success == true){
				window.location = data.url;
			}else{
				alert('Não foi possível se conectar com o twitter.');
			}
		},"json").fail(function(data) {
			alert('Não foi possível se conectar com o twitter');
		});
	}
};