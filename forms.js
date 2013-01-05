$(function() {
	
	$("#send-message-form").keypress(function(e) {
				if(e.keyCode == 13) {
					return false;
				}
	});
	
	$('#send-message-form').keyup(function(e) {
		if(e.keyCode == 13) {
			// Send form, clear all values
			sendForm();
			clearForm('#send-message-form');
		}
	});
	
	
	$('#datatable tr').hover(function() {
    	$(this).toggleClass("highlight");
  	});


	$('#datatable tr').click(  
	  function() {
		
		var key = $(this).attr("name");
		
	
		$.ajax({
			type: "POST",
			url: "insertboat_ajax.php",
			data: {
					'action': 'getid',
					'key' : key,
			},
			dataType: "json",
			success: function(data){
				alert(data);

		},
	});
});

});

function clearForm(form) {
  // iterate over all of the inputs for the form
  // element that was passed in
  $(':input', form).each(function() {
    var type = this.type;
    var tag = this.tagName.toLowerCase(); // normalize case
    // it's ok to reset the value attr of text inputs,
    // password inputs, and textareas
    if (type == 'text' || type == 'password' || tag == 'textarea')
      this.value = "";
    // checkboxes and radios need to have their checked state cleared
    // but should *not* have their 'value' changed
    else if (type == 'checkbox' || type == 'radio')
      this.checked = false;
    // select elements need to have their 'selectedIndex' property set to -1
    // (this works for both single and multiple select elements)
    else if (tag == 'select')
      this.selectedIndex = -1;
  });
};

function sendForm()
{
	var action = { 'action' : 'send'};
	var jsondata = $('#send-message-form').serialize() + "&" + $.param(action);
	//jsondata.push({'action': 'send'});

	
	$.ajax({
		type: "POST",
		url: "insertboat_ajax.php",
		data: jsondata,
		dataType: "json",
		success: function(data){
			
			$('#datatable').append($(data));

		},
	});

}

function update(key){
	
	$.ajax({
		type: "POST",
		url: "insertboat_ajax.php",
		data: {
				'action': 'update',
				'key' : key,
		},
		dataType: "json",
		success: function(data){
			$('#datatable').append($(data));

		},
	});
}



