jQuery(function($){

	// on upload button click
	$('body').on( 'click', '#cot_contact_img1', function(e){

		e.preventDefault();

		var button = $(this),
		custom_uploader = wp.media({
			title: 'Insert image',
			library : {
				// uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
				type : 'image'
			},
			button: {
				text: 'Use this image' // button label text
			},
			multiple: false
		}).on('select', function() { // it also has "open" and "close" events
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			button.html('<img src="' + attachment.url + '">').next().show().next().val(attachment.id);
		}).open();

	});
// on upload button click
$('body').on( 'click', '#cot_contact_img2', function(e){

    e.preventDefault();

    var button = $(this),
    custom_uploader = wp.media({
        title: 'Insert image',
        library : {
            // uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
            type : 'image'
        },
        button: {
            text: 'Use this image' // button label text
        },
        multiple: false
    }).on('select', function() { // it also has "open" and "close" events
        var attachment = custom_uploader.state().get('selection').first().toJSON();
        button.html('<img src="' + attachment.url + '">').next().show().next().val(attachment.id);
    }).open();

});
	// on remove button click
	$('body').on('click', '#cot_contact_img2_rmv', function(e){

		e.preventDefault();

		var button = $(this);
		button.next().val(''); // emptying the hidden field
		button.hide().prev().html('Upload image');
	});
    // on remove button click
	$('body').on('click', '#cot_contact_img1_rmv', function(e){

		e.preventDefault();

		var button = $(this);
		button.next().val(''); // emptying the hidden field
		button.hide().prev().html('Upload image');
	});

});
