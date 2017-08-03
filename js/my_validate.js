$(document).ready(function(){

    $("#order_form").validate({
        
       rules:{
        
            name_child:{
                required: true,
                minlength: 2,
                maxlength: 45
            },
			
			birthday:{
				required: true
			},
			
			location:{
				required: true
			},
			
			diagnosis:{
				required: true
			},
			
			name_addresser:{
				required: true,
				minlength: 2,
				maxlength: 45
			},
			
			cognation:{
				required: true
			},
            
            phone:{
                required: true,
                digits: true,
				minlength: 5
            },
			
			email:{
				required: true,
				email: true
			}
			
       },
       
       messages:{
        
            name_child:{
                required: "Это поле обязательно для заполнения!",
                minlength: "Минимальное количество символов - 2",
                maxlength: "Максимальное количество символов - 45"
            },
			
			birthday:{
				required: "Это поле обязательно для заполнения!"
			},
			
			location:{
				required: "Это поле обязательно для заполнения!"
			},
			
			diagnosis:{
				required: "Это поле обязательно для заполнения!"
			},
			
			name_addresser:{
				required: "Это поле обязательно для заполнения!",
				minlength: "Минимальное количество символов - 2",
                maxlength: "Максимальное количество символов - 45"
			},
			
			cognation:{
				required: "Это поле обязательно для заполнения!"
			},
            
            phone:{
                required: "Это поле обязательно для заполнения!",
                minlength: "Минимальное количество символов - 5"
            },
			
			email:{
				required: "Это поле обязательно для заполнения!",
				email: "Неверно. Пример: person@site.com"
			}
        
       }
        
    });


}); //end of ready