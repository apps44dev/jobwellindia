$(document).ready(function(){
    var newField = 0;
    $(".addNewFieldButton").click(function(e){
        e.preventDefault();
        newField = newField + 1;
		if(newField > 9)
			return;
		var newIn = '<div class="row form-group" id="addlnDiv' + newField + '" name="addlnDiv' + newField + '" >'+
						'<label class="col-sm-3 label-title"><input type="text" name="addlnFieldLabel' + newField + '" id="addlnFieldLabel' + newField + '" class="form-control" placeholder="Field Label"></label>' +
							'<div class="col-sm-8">'+
								'<input type="text" name="addlnFieldValue' + newField + '" id="addlnFieldValue' + newField + '" class="form-control" placeholder="Field Value">'+
							'</div>'+
							'<div class="col-sm-1">'+
								'<button id="remove' + newField + '" class="btn btn-danger remove-me" >-</button>'+
							'</div>'+
					 '</div>';

       
        var newInput = $(newIn);
        $(".addNewFieldDiv").before(newInput);
        
        $('.remove-me').click(function(e){
			e.preventDefault();
			var indx = this.id.charAt(this.id.length-1);
			var divID = "#addlnDiv" + indx;
			$(divID).remove();
			newField = newField - 1;
        });
    });


	var newLang = 0;
	$(".addNewLanguage").click(function(e){
		e.preventDefault();
        newLang = newLang + 1;
		if(newLang > 5)
			return;

		var addlnLang = '<div class="row form-group" id="addlnLang' + newLang + '" name="addlnLang' + newLang + '" >'+
						'<label class="col-sm-3 label-title">Language Name</label>'+
						'<div class="col-sm-9">'+
							'<input type="text" name="name" class="form-control" placeholder="Hindi">'+
						'</div>'+
					'</div>';

       
        var newAddlnLang = $(addlnLang);
        $(".addNewLanguageDiv").after(newAddlnLang);
        
        

	});

});