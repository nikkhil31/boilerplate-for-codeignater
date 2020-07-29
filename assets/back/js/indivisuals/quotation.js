$('#price,#qty').on('input',function(e) {

	if(e.target.id === 'price') {
		price = $(this).val()
	} else if(e.target.id === 'qty') {
		qty	= $(this).val()	
	}	

	total = Number(price) * Number(qty)
	id	  = $(this).data('ref')

	$('#total'+id).val(total)
})	