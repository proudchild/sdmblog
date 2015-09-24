Post ={
	currentRating: 0,
	single: function(){
		var that = this;
		jQuery(".entry-social-number").mouseover(function(){
			jQuery(this).prev().toggleClass("hovered");
		});
		jQuery(".entry-social-number").mouseleave(function(){
			jQuery(this).prev().toggleClass("hovered");
		});
		jQuery(".share-star").click(function () {
			that.updateRating(this);
		});
		jQuery(".share-star").mouseover(function(){
			that.updateRatingHover(this);
		});
		jQuery(".share-star").mouseleave(function(){
			that.updateRating(null);
		});
	},
	updateRating: function(star){
		var that = this;
		if(star != undefined && star != null){
			var starId = jQuery(star).attr("id");
			var idSplit = starId.split("-");
			var newRating = idSplit[idSplit.length - 1];
			that.currentRating = parseInt(newRating);
		}
		jQuery(".share-star").each(function() {
			var starId = jQuery(this).attr("id");
			var idSplit = starId.split("-");
			var rating = idSplit[idSplit.length - 1];
			if(parseInt(rating) <= that.currentRating){
				jQuery(this).addClass("selected-star");
				jQuery(this).removeClass("selected-star-hover");
				jQuery(this).removeClass("vazia-star-hover");
			} else{
				jQuery(this).removeClass("selected-star");
				jQuery(this).removeClass("selected-star-hover");
				jQuery(this).removeClass("vazia-star-hover");
			}
		});
	},
	updateRatingHover: function(candidatestar){
		var that = this;
		var newRating = 0;
		if(candidatestar != undefined && candidatestar != null){
			var starId = jQuery(candidatestar).attr("id");
			var idSplit = starId.split("-");
			newRating = idSplit[idSplit.length - 1];
		}
		jQuery(".share-star").each(function() {
			var starId = jQuery(this).attr("id");
			var idSplit = starId.split("-");
			var rating = idSplit[idSplit.length - 1];
			if(parseInt(rating) <= newRating){
				jQuery(this).addClass("selected-star-hover");
			} else{
				jQuery(this).removeClass("selected-star-hover");
				jQuery(this).addClass("vazia-star-hover");
			}
		});
	},
}