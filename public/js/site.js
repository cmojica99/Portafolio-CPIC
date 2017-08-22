jQuery(document).ready(function($) {
	

        $(".form-group input").val("");
        
        $(".form-group input").focusout(function(){
            if($(this).val() != ""){
                $(this).addClass("has-content");
            }else{
                $(this).removeClass("has-content");
            }
        })


<<<<<<< HEAD
=======
        
>>>>>>> b5f85542ac3457e0cdd1cf3afc319e83f49111fd
    });

