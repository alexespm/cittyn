
$("#selectbox").on("change", function() {
	  var sOptionVal = $(this).val();
	  if (/modal/i.test(sOptionVal)) {
	    var $selectedOption = $(sOptionVal);
	    $selectedOption.modal('show');
	  }
	});