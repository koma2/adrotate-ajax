jQuery(document).ready(function() {
	jQuery('.adrotate-group-ajax').each(function() {
		var group_id = jQuery(this).data('groupId');
		jQuery(this).load(
			adrotate_ajax.group_url + '?group_id=' + group_id,
			function() {
				// XXX
				jQuery("a.gofollow").click(function(){
					var tracker = jQuery(this).attr("data-track");
					var debug = jQuery(this).attr("data-debug");

					jQuery.post(click_object.ajax_url, {'action':'adrotate_click','track':tracker});

					if(debug == 1) {
						alert('Tracker: ' + tracker + '\nclick_object.ajax_url: '+click_object.ajax_url);		
					}
				});
			}
		);
	});
});
