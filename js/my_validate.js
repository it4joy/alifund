$(function() {
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
      },

      verification:{
        required: true,
        min: 7,
        max: 7
      },

      // Yandex.CashBox Payment Form Rules;

      CustomerNumber:{
        required: true,
        digits: true,
        minlength: 11,
        maxlength: 11
      },

      Sum:{
        required: true
      },

      CustName:{
        required: true
      },

      CustEmail:{
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
      },

      verification:{
        required: "Это поле обязательно для заполнения!",
        min: "Введите верную сумму",
        max: "Введите верную сумму"
      },

      // Yandex.CashBox Payment Form Messages;

      CustomerNumber:{
        required: "Это поле обязательно для заполнения!",
        digits: "Введите, пожалуйста, цифры без пробелов",
        minlength: "Номер сотового телефона как в примере - 11 цифр",
        maxlength: "Номер сотового телефона как в примере - 11 цифр"
      },

      Sum:{
        required: "Это поле обязательно для заполнения!"
      },

      CustName:{
        required: "Это поле обязательно для заполнения!"
      },

      CustEmail:{
        required: "Это поле обязательно для заполнения!",
        email: "Неверно. Пример: person@site.com"
      }
     }
  });

});
