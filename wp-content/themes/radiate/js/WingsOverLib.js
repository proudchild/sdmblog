function nd(){

}
function overlib(text){
	WingsOverLib.content = text;
	return null;
}
var WingsOverLib = {
	//Inicializador da função
	initiate: function() {
		var that = this;
		jQuery(document).on("click", ".wings-over-lib-close", function() {
			that.destroyBox();
		});
		jQuery(document).on("click", ".wings-over-lib-back-dismissal", function() {
			
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent.toLowerCase())) {
			}else{
				that.destroyBox();
			}
		});
		jQuery(".overlib").mouseover(function() {
			//that.destroyBox();
			var link = jQuery(this);
			if(link.attr("data-content") != undefined && link.attr("data-content") != null){
				that.content = link.attr("data-content");
			}			
			that.title = link.html();
			that.image = link.attr("data-image");
			that.createBox(link);
		});
		jQuery(".overlib").click(function() {
			//that.destroyBox();
			var link = jQuery(this);
			if(link.attr("data-content") != undefined && link.attr("data-content") != null){
				that.content = link.attr("data-content");
			}			
			that.title = link.html();
			that.image = link.attr("data-image");
			that.createBox(link);
		});
		jQuery(document).scroll(function() {
			that.destroyBox();
		});
		jQuery(document).on("mouseover", ".wings-over-lib-close", function() {
			jQuery(this).attr("src", that.image_dir + "/fechar_hover.svg")
		});
		jQuery(document).on("mouseleave", ".wings-over-lib-close", function() {
			jQuery(this).attr("src", that.image_dir + "/fechar_normal.svg")
		});
	},
	//propriedades da box
	content: "",
	title: "",
	image: "",
	image_dir: "",
	//construtor da box
	createBox: function(target_object) {
		var that = this;
		var object_main = jQuery("<div class='wings-over-lib'>");
		object_main.hide();
		jQuery("body").prepend(object_main);
		var object_content = jQuery("<div class='wings-over-lib-content'>");
		object_main.html(object_content);
		object_main.prepend(jQuery("<div class='wings-over-lib-back-dismissal'>"));
		object_content.append(jQuery("<h5 class='wings-over-lib-title'>").html(that.title));
		object_content.append(jQuery("<img id='wings-over-lib-close' class='wings-over-lib-close'>").attr("src", that.image_dir + "/fechar_normal.svg"));
		if (that.image != undefined && that.image != null && that.image.length > 1) {
			object_content.append(jQuery("<img class='wings-over-lib-image'>").attr("src", that.image));
		}
		object_content.append(jQuery("<p class='wings-over-lib-text'>").html(that.content));

		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent.toLowerCase())) {
			object_main.addClass("wings-over-lib-mobile");
			object_content.addClass("wings-over-lib-mobile-content");
		} else {
			var offset = target_object.offset();
			object_content.css("top", offset.top - jQuery(window).scrollTop());
			object_content.css("left", offset.left - jQuery(window).scrollLeft());
			object_content.css("margin-top", "-80px");

		}
		object_main.fadeIn();

	},

	//destrutor da box
	destroyBox: function() {
		var that = this;
		jQuery(".wings-over-lib").fadeOut();
		jQuery(".wings-over-lib").remove();
		that.content = "";
		that.title = "";
		that.image = "";
	},

}