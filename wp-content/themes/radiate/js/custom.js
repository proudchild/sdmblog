jQuery(document).ready(function() {
	
	if( radiateScriptParam.radiate_image_link == ''){
		var divheight = jQuery('.header-wrap').height()+'px';
		jQuery('body').css({ "margin-top": divheight });
	}

	// jQuery(".header-search-icon").click(function(){
	// 	jQuery("#masthead .search-form").toggle('slow');
	// });


jQuery(window).bind('scroll', function(e) {
	header_image_effect();
});

jQuery("#btn-menu-mobile").click(function(){
		jQuery(".site-branding").hide();
	jQuery(".navbar-header").hide();
	jQuery(".menu-mobile").fadeIn();
	jQuery(".categories").fadeIn();

	jQuery(".search-form").fadeIn();
	
jQuery(".login").removeClass("active");
	jQuery(".login").hide();

});

jQuery(".header-fechar").click(function(){
jQuery(".menu-mobile").hide();
jQuery(".categories").hide();
jQuery(".search-form").hide();
	jQuery(".site-branding").fadeIn();
	jQuery(".navbar-header").fadeIn();

	
});

// CATEGORIES
jQuery(".header-category").mouseover(function(){
	
	jQuery(".categories").removeClass("active");
	jQuery(".categories").hide();


	jQuery(".search-form").removeClass("active");
	jQuery(".search-form").hide();


	jQuery(".login").removeClass("active");
	jQuery(".login").hide();

	jQuery(".categories").addClass("active");
	jQuery(".categories").fadeIn();
});
// jQuery(".categories").mouseleave(function(){


// 	jQuery(".categories").removeClass("active");
// 	jQuery(".categories").hide();

// });

// SEARCH
jQuery(".header-search-icon").mouseover(function(){
	
	jQuery(".categories").removeClass("active");
	jQuery(".categories").hide();


	jQuery(".search-form").removeClass("active");
	jQuery(".search-form").hide();

	
	jQuery(".login").removeClass("active");
	jQuery(".login").hide();

	jQuery(".search-form").addClass("active");
	jQuery(".search-form").fadeIn();

});



// jQuery(".search-form").mouseleave(function(){
	

// 	jQuery(".search-form").removeClass("active");
// 	jQuery(".search-form").hide();

// });

// LOGIN
jQuery(".header-login").mouseover(function(){

	jQuery(".categories").removeClass("active");
	jQuery(".categories").hide();


	jQuery(".search-form").removeClass("active");
	jQuery(".search-form").hide();


	jQuery(".login").removeClass("active");
	jQuery(".login").hide();

	jQuery(".login").addClass("active");
	jQuery(".login").fadeIn();



});

jQuery(".mobile-header-login").mouseover(function(){

	jQuery(".categories").removeClass("active");
	jQuery(".categories").hide();


	jQuery(".search-form").removeClass("active");
	jQuery(".search-form").hide();


	jQuery(".login").removeClass("active");
	jQuery(".login").hide();

	jQuery(".login").addClass("active");
	jQuery(".login").fadeIn();

	jQuery(".menu-mobile").hide();
jQuery(".categories").hide();
	jQuery(".search-form").hide();
	jQuery(".site-branding").fadeIn();
	jQuery(".navbar-header").fadeIn();

});


// jQuery(".login").mouseleave(function(){
	

// 	jQuery(".login").removeClass("active");
// 	jQuery(".login").hide();

// });

	// ORDER FILTER
	jQuery("#posts-order-filter").click(function(e){
		e.preventDefault();

		if(jQuery(".posts-order-filter-modal").hasClass("active")){
			jQuery(".posts-order-filter-modal").removeClass("active");
			jQuery(".posts-order-filter-modal").hide();

			jQuery("#posts-order-filter").removeClass("active");
		}else{
			jQuery(".posts-order-filter-modal").removeClass("active");
			jQuery(".posts-order-filter-modal").hide();
			jQuery(".posts-order-filter-modal").addClass("active");
			jQuery("#posts-order-filter").addClass("active");
			jQuery(".posts-order-filter-modal").fadeIn();
		}
		
		

		
		


	});

jQuery(".header-search-icon").click(function(){
	jQuery(".search-field").focus();
});
jQuery(".header-wrap").mouseover(function(e){
		// if(!jQuery(e.target).is("#posts-order-filter")  && !jQuery(e.target).hasClass("button-uncheck-all") && !jQuery(e.target).hasClass("order-radio") && !jQuery(e.target).hasClass("filter-checkbox") && !jQuery(e.target).hasClass("filter-year-month")&& !jQuery(e.target).hasClass("posts-order-filter-modal")&& !jQuery(e.target).hasClass("filter-subject")&& !jQuery(e.target).hasClass("order")){
		// 	jQuery(".posts-order-filter-modal").removeClass("active");
		// 	jQuery(".posts-order-filter-modal").hide();

		// 	jQuery("#posts-order-filter").removeClass("active");
		// }
if(jQuery( document ).width() >= 1000){
		if(!jQuery(e.target).hasClass("header-category") && !jQuery(e.target).hasClass("categories") ){
			jQuery(".categories").removeClass("active");
			jQuery(".categories").hide();
			jQuery(".menu-mobile").hide();
			jQuery(".categories").hide();
			jQuery(".site-branding").fadeIn();
			jQuery(".navbar-header").fadeIn();
		}

		if(!jQuery(e.target).hasClass("header-login") && !jQuery(e.target).hasClass("mobile-header-login") && !jQuery(e.target).hasClass("login") ){
			jQuery(".login").removeClass("active");
			jQuery(".login").hide();
		}

		if(!jQuery(e.target).hasClass("header-search-icon") && !jQuery(e.target).hasClass("search-form") && !jQuery(e.target).hasClass("search-submit") && !jQuery(e.target).hasClass("search-field")){

			jQuery(".search-form").removeClass("active");
			jQuery(".search-form").hide();
		}
	}
	});
	jQuery(".site-content").mouseover(function(e){
	
		// if(!jQuery(e.target).is("#posts-order-filter")  && !jQuery(e.target).hasClass("button-uncheck-all") && !jQuery(e.target).hasClass("order-radio") && !jQuery(e.target).hasClass("filter-checkbox") && !jQuery(e.target).hasClass("filter-year-month")&& !jQuery(e.target).hasClass("posts-order-filter-modal")&& !jQuery(e.target).hasClass("filter-subject")&& !jQuery(e.target).hasClass("order")){
		// 	jQuery(".posts-order-filter-modal").removeClass("active");
		// 	jQuery(".posts-order-filter-modal").hide();

		// 	jQuery("#posts-order-filter").removeClass("active");
		// }

		if(!jQuery(e.target).hasClass("header-category") && !jQuery(e.target).hasClass("categories") ){
			jQuery(".categories").removeClass("active");
			jQuery(".categories").hide();
			jQuery(".menu-mobile").hide();
			jQuery(".categories").hide();
			jQuery(".search-form").hide();
			jQuery(".site-branding").fadeIn();
			jQuery(".navbar-header").fadeIn();
		}

		if(!jQuery(e.target).hasClass("header-login") && !jQuery(e.target).hasClass("mobile-header-login") && !jQuery(e.target).hasClass("login") ){
			jQuery(".login").removeClass("active");
			jQuery(".login").hide();
		}

		if(!jQuery(e.target).hasClass("header-search-icon") && !jQuery(e.target).hasClass("search-form") && !jQuery(e.target).hasClass("search-submit") && !jQuery(e.target).hasClass("search-field")){

			jQuery(".search-form").removeClass("active");
			jQuery(".search-form").hide();
		}
	});

	
jQuery(document).mouseup(function (e)
{
    var container = jQuery(".posts-order-filter-modal");
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
    }
});
	
jQuery(".filter-year-month .button-uncheck-all").click(function(e){
	e.preventDefault();
	jQuery(".years").each(function(index, e){
		
		jQuery(e).find(".filter-checkbox").attr("checked",false);
	});

	jQuery(".months").each(function(index, e){
		jQuery(e).find(".filter-checkbox").attr("checked",false);
	});
});
jQuery(".filter-subject .button-uncheck-all").click(function(e){
	e.preventDefault();
	jQuery("ul").each(function(index, e){
		
		jQuery(e).find(".item").removeClass("active");
	});

	
});

jQuery(".filter-subject .item").hover(function(){
	var div = jQuery(this);
	var img = div.find("img");

	img.attr("src", img.attr("src").replace("desativado", "ativo"));


});

jQuery(".filter-subject .item").mouseleave(function(){
var div = jQuery(this);
	var img = div.find("img");

	if(!div.hasClass("active"))
	img.attr("src", img.attr("src").replace("ativo", "desativado"));
});


jQuery(".filter-subject .item").click(function(){

	var div = jQuery(this);
	var img = div.find("img");
	if(div.hasClass("active")){
		div.removeClass("active");
		div.removeClass("item");
		div.addClass("item");
		img.attr("src", img.attr("src").replace("ativo", "desativado"));
	}else{
		div.addClass("active");
		img.attr("src", img.attr("src").replace("desativado", "ativo"));
	}


});

jQuery(".filter-subject .item a").click(function(e){
	e.preventDefault();
});

jQuery("#posts-order-mode-list").click(function(e){
	e.preventDefault();
	if(!jQuery("#posts-order-mode-list").hasClass("active")){
	jQuery("#posts-order-mode-list").addClass("active");
	jQuery("#posts-order-mode-card").removeClass("active");
	jQuery(this).find("img").attr("src", jQuery(this).find("img").attr('src').replace("desativado", "ativado"));
	jQuery("#posts-order-mode-card").find("img").attr("src", jQuery("#posts-order-mode-card").find("img").attr('src').replace("ativado", "desativado"));
	jQuery(".site-main-card").hide();
	jQuery(".site-main").fadeIn();
}
});
jQuery("#posts-order-mode-card").click(function(e){
	e.preventDefault();
	if(!jQuery("#posts-order-mode-card").hasClass("active")){
	jQuery("#posts-order-mode-card").addClass("active");
	jQuery("#posts-order-mode-list").removeClass("active");
		jQuery(this).find("img").attr("src", jQuery(this).find("img").attr('src').replace("desativado", "ativado"));
	jQuery("#posts-order-mode-list").find("img").attr("src", jQuery("#posts-order-mode-list").find("img").attr('src').replace("ativado", "desativado"));
	jQuery(".site-main").hide();
	jQuery(".site-main-card").find("ul li").each(function(index, e){
		jQuery(this).css({ opacity: 0 });
	});
	jQuery(".site-main-card").show();

	


	jQuery(".site-main-card").find("ul li").each(function(index, e){
		if(index % 3 ==0 && index % 2 !=0 ){
			jQuery(this).delay(200).fadeTo("slow", 1);
		}
	});

	jQuery(".site-main-card").find("ul li").each(function(index, e){
		if(index % 2 !=0 && index % 3 !=0 ){
			jQuery(this).delay(350).fadeTo("slow", 1);
		}
	});

	jQuery(".site-main-card").find("ul li").each(function(index, e){
		if(index % 2 ==0 && index % 3 !=0 ){
			jQuery(this).delay(450).fadeTo("slow", 1);
		}
	});

	jQuery(".site-main-card").find("ul li").each(function(index, e){
		if(index % 2 ==0 && index % 3 ==0 ){
			jQuery(this).delay(550).fadeTo("slow", 1);
		}
	});


}

});

});


function header_image_effect() {
	var scrollPosition = jQuery(window).scrollTop();
	jQuery('#parallax-bg').css('top', (0 - (scrollPosition * .2)) + 'px');
}	