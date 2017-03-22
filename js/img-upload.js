$('.upload-btn').click(function(e) {
    e.preventDefault();
    var image = wp.media({ 
        title: 'Upload Image',
        multiple: false
    }).open()
    .on('select', function(e){
        var uploaded_image = image.state().get('selection').first().toJSON();
        $('#image-id').val(uploaded_image.url);
        $('.upload-btn').text("Change Logo");
        $('.upload-btn').after('<button type="button" class="button remove-logo">Remove</button>');
        $('#image-priview').html('<img src="'+uploaded_image.url+'" alt="">');
    });
});//End of click