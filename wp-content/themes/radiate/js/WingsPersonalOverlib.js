var WingsPersonalOverLib = {
	text: null,
	atualiza: false,
	current_id: 0,
	lockout: false,
	index: function() {
		var that = this;
		jQuery(document).mouseup(function(e) {
			var text = that.getSelection();
			if (text != undefined && text != null && text.length > 1) {				
				jQuery('textarea').html('');
				that.openWingsPersonalOverLib(e.clientX - jQuery("#main").offset().left, e.clientY + jQuery(window).scrollTop(), text);
			}
		});
		jQuery('#wingsPersonalOverlibBack').click(function() {
			that.saveText();
		});
		jQuery('#wingsPersonalOverlibSave').click(function() {
			that.saveText();
		});
		jQuery('#wingsPersonalOverlibSaveButton').click(function() {
			that.saveText();
		});
		jQuery(document).on('mouseover', '.personal-overib-text', function() {
			var object = jQuery(this);			
			var data = object.attr('data-content');
			jQuery('#wings-post-id').html(data);
			that.openWingsPersonalOverLib(object.offset().left, object.offset().top, object.html(), object.attr('data-content'), object.attr('data-id'));
		});


	},
	getSelection: function getSelText() {
		var that = this;
		var text = "";
		if (window.getSelection) {
			text = window.getSelection().toString();
		} else if (document.selection && document.selection.type != "Control") {
			text = document.selection.createRange().text;
		}
		return text;
	},
	openWingsPersonalOverLib: function(x, y, text, content, thoughtsId) {
		var that = this;
		if(!that.lockout){
			
			that.lockout = true;
			that.text = text;
			jQuery('#wingsPersonalOverlibBack').fadeIn();
			jQuery('#wingsPersonalOverlibComment').val(content);
			var newWindow = jQuery('#wingsPersonalOverlibWindow');
			if(content != null && content != undefined){
				newWindow.attr('data-id', thoughtsId);
			}
			if(content != null && content != undefined){
				that.atualiza = true;
			} else{
				that.atualiza = false;
			}
			newWindow.css("top", y);
			newWindow.css("left", x);
			newWindow.css("margin-top", "-80px");
			newWindow.fadeIn();
		}
	},
	saveText: function() {
		var that = this;
		var userdata = {
			action: 'wings-personal-overlib-call',
			text: that.text,
			thoughts: jQuery('#wingsPersonalOverlibComment').val(),
			id: that.current_id,
			thoughtsId: null,

		};
		if (that.atualiza == false) {
			jQuery.ajax({
				type: "POST",
				url: 'wp-admin/admin-ajax.php',
				data: userdata,
				dataType: 'html'
			}).done(function(data) {
				jQuery(".entry-content").html(data);

				jQuery('#wingsPersonalOverlibBack').hide();
				jQuery('#wingsPersonalOverlibWindow').hide();
			}).fail(function(data) {
				console.log(data);
				alert('Não foi possível salvar trecho');

				jQuery('#wingsPersonalOverlibBack').hide();
				jQuery('#wingsPersonalOverlibWindow').hide();
			});
		} else{
			userdata.action = 'wings-personal-overlib-call-update';
			userdata.thoughtsId = jQuery('#wingsPersonalOverlibWindow').attr('data-id');
			jQuery.ajax({
				type: "POST",
				url: 'wp-admin/admin-ajax.php',
				data: userdata,
				dataType: 'html'
			}).done(function(data) {
				jQuery(".entry-content").html(data);
				jQuery('#wingsPersonalOverlibBack').hide();
				jQuery('#wingsPersonalOverlibWindow').hide();

			}).fail(function(data) {
				console.log(data);

				jQuery('#wingsPersonalOverlibBack').hide();
				jQuery('#wingsPersonalOverlibWindow').hide();
				alert('Não foi possível salvar trecho');
			});
		}
		that.atualiza = false;
		that.lockout = false;
	},

};