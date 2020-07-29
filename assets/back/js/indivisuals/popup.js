
$('#edit').click(function(event) {

	event.preventDefault();

	$('#vimg').hide()
	$('#fimg').show()

	$('#vtext').hide()
	$('#ftext').show()

	$('#edit').hide()
	$('#save').show()

	$('#active').hide()
	$('#cancel').show()
})


$('#cancel').click(function(event) {

	event.preventDefault();

	$('#fimg').hide()
	$('#vimg').show()

	$('#ftext').hide()
	$('#vtext').show()

	$('#save').hide()
	$('#edit').show()

	$('#cancel').hide()
	$('#active').show()
})

