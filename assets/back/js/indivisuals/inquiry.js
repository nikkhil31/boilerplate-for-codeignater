	
	$('select[name="type_of_customer"]').change(function() {

		// return alert($(this).val())	
		if($(this).val() == 'Indivitual') {
			$("tr:nth-child(3)").hide()
		} else {
			$("tr:nth-child(3)").show()
		}
	});

	$('#add-product').click(function(e) {
		e.preventDefault()
		btn 	= 	$(this).siblings("input")
		prodid	=	btn.data('prodid')
		apendproduct(prodid)
		// alert(prodid)
	});

	$('input[name="product-search"]').keyup(function() {
		$.post('ajax-product-search',
			{
				search: $(this).val(),
				action:'search'
			},
			function(data,status) {
				
			$('#result-ul').html(data)
			// alert(data)
		})
	});

	function removeprod(a) {
		if (confirm('are you want to remove the product?')) {
		    $(a).closest('tr').remove()
		}
	}

	function evaltotal(aa) {
		if($(aa).attr('id') == 'price') {
			// return alert($(aa).parents('tr').find('input[id="qty"]').val())
			price = $(aa).val()
			qty = $(aa).parent().next().find('input[id="qty"]').val()

			total = Math.round(price * qty)   

			// alert(total)
			$(aa).parent().next().next().find('input[id="total"]').val(total)
		} else {
			// return alert($(aa).parents('tr').find('input[id="price"]').val())
			qty = $(aa).val()
			price = $(aa).parent().prev().find('input[id="price"]').val()

			total = Math.round(price * qty)   

			// alert(total)
			$(aa).parent().next().find('input[id="total"]').val(total)

		}
	}

	sr = 1

	function apendproduct(id) {
		$.post('ajax-product-get',
			{
				id: id,
				sr: sr,
				action:'product_getbyid'
			},
			function(data,status) {
			$('#product-table').append(data)
			$('input[name="product-search"]').val('')
			$('input[name="product-search"]').data("prodid",'')
			sr++
			// alert(data)
		})
	}

	function addvalueintextbox(val,id) {
		$('input[name="product-search"]').val(val)
		$('input[name="product-search"]').data("prodid",id)

		$('#result-ul').html('')
		// alert(id)
	}

	$('#quot_form').submit(function(e) {
		e.preventDefault()
		var valid = true
		price = []
		$('input[id="price"]').each(
		    function(index){  
		        var input = $(this);
		        if(input.val()!='') {
			        price.push(input.val())
		        } else {
		        	input.css('border','2px solid red')
		        	valid = false
		        }
		    }
		);

		qty = []
		$('input[id="qty"]').each(
		    function(index){  
		        var input = $(this);
		        if(input.val()!='') {
			        qty.push(input.val())
		        } else {
		        	input.css('border','2px solid red')
		        	valid = false
		        }
		    }
		);

		ftotal = []
		$('input[id="total"]').each(
		    function(index){  
		        var input = $(this);
		        ftotal.push(input.val())
		    }
		);

		prodid = []
		$('input[id="prodid"]').each(
		    function(index){  
		        var input = $(this);
		        prodid.push(input.val())
		    }
		);

		if(valid) {
		$('input[name="save"]').hide()
		store = []
		for (var i = 0 ; i <= ftotal.length - 1; i++) {
			single=[
					prodid[i],
					price[i],
					qty[i],
					ftotal[i],
				   ]
			store.push(single)
		}

		$.post('ajax-create-quot',
		{
			store,
			inq:getUrlParameter('id'),
			action:'quot_create'
		},function(data) {
			redirect(data)
		})
		}
	})

	$('#saveProduct').click(function() {
		var valid = true;
		$('input[name="pname"],input[name="ref_number"],input[name="part_number"],input[name="used_for"]').each(function(index) {
			if($(this).val() == '') {
				$(this).css('border','2px solid red')
				valid = false
			}
		})
		
		if(valid) {

			var prod = $('#quot_form').serializeArray()
			$.post('ajax-save-product',{
				prod,
				action:'model_add_product'
			},function(data) {
				$("#quot_form").trigger("reset");
				$('#exampleModal').modal('hide')
			})
		}
	})

	function getUrlParameter(name) {
	    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
	    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
	    var results = regex.exec(location.href);
	    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, '    '));
	};

	function redirect(url) {
    var ua        = navigator.userAgent.toLowerCase(),
        isIE      = ua.indexOf('msie') !== -1,
        version   = parseInt(ua.substr(4, 2), 10);

    // Internet Explorer 8 and lower
    if (isIE && version < 9) {
        var link = document.createElement('a');
        link.href = url;
        document.body.appendChild(link);
        link.click();
    }

    // All other browsers can use the standard window.location.href (they don't lose HTTP_REFERER like Internet Explorer 8 & lower does)
    else { 
        window.location.href = url; 
    }
}