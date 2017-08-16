
$(window).load(function($){
        $(".form-group .label-effect").val("");
        
        $(".form-group .label-effect").focusout(function(){
            if($(this).val() != ""){
                $(this).addClass("has-content");
            }else{
                $(this).removeClass("has-content");
            }
        })
    });
