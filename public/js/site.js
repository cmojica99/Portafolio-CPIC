jQuery(document).ready(function($) {
	

        $(".form-group input").val("");
        
        $(".form-group input").focusout(function(){
            if($(this).val() != ""){
                $(this).addClass("has-content");
            }else{
                $(this).removeClass("has-content");
            }
        })


        
    });

