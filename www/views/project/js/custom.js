/*global jQuery:false */
jQuery(document).ready(function($) {

		//add some elements with animate effect

$(function () {                                      // Когда страница загрузится
    $('.nav li a').each(function () {             // получаем все нужные нам ссылки
        var location = window.location.href; // получаем адрес страницы
        var link = this.href;                // получаем адрес ссылки
        if(location == link) {               // при совпадении адреса ссылки и адреса окна
            $(this).addClass('active');  //добавляем класс
        }
    });
});

		// authorization
    $("#auth").click(function(e){
        e.preventDefault();
        var msg = $("#my-form").serialize();
        var loginauth = $("#loginauth").val();
        var passauth = $("#passauth").val();
        var auth = $("#auth").val();
        $.ajax({
           url: './',
           type: 'POST',
           data: {auth: auth, loginauth: loginauth, passauth: passauth},
           success: function(res){
                if(res != 'Поля логин/пароль должны быть заполнены!' && res != 'Логин/пароль введены неверно!'){
                    // если пользователь успешно авторизован
                    window.location = "/";
                }else{
                    // если авторизация неудачна
                    $(".error").remove();
                    $(".authform").append('<div class="error"></div>');
                    $(".error").hide().fadeIn(500).html(res);
                }
           },
           error: function(){
                alert("Error!");
           }
        });
    });


		// registration
    $("#reg").click(function(e){
    	e.preventDefault();
    	var login = $("#login").val();
    	var pass = $("#pass").val();
    	var reg = $("#reg").val();
			var gender = $( "input:checked" ).val();
			var datetime = $("#datetime").val();
			var surname = $("#surname").val();
			var name = $("#name").val();
			var email = $("#email").val();
    	 if(login.length == 0 ){
        		$(".reg-sss").html('<font size="3" color="red">Не все поля заполнены. Попробуйте еще раз</font>');
        	}else{
        		$.ajax({
        		   url: './',
        		   type: 'POST',
        		   data: {login: login, reg: reg, gender: gender, datetime: datetime, surname: surname, email: email, pass: pass, name: name},
        		   success: function(res){
        		        if(res){
        		           $(".reg-sss").html(res);
        		           console.log(res)
        		           if(res == "<div class='success'>Регистрация прошла успешно.</div>" ){
        		           		window.location = "/";
        		           		$("#login").val('');
        		           }
        		        }else{
        		            // если авторизация неудачна
        		            $(".error").remove();
        		            $(".authform").append('<div class="error"></div>');
        		            $(".error").hide().fadeIn(500).html(res);
        		        }
        		   },
        		   error: function(){
        		        alert("Error!");
        		   }
        		});
        	}

    });


  		// registration
      $("#feedback").click(function(e){
      	e.preventDefault();
      	var feedback = $("#feedback").val();
      	var kapcha = $("#kapcha").val();
      	var namefeedback = $("#namefeedback").val();
      	var emailfeedback = $("#emailfeedback").val();
      	var text = $("#text").val();
      	var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
      	     if(namefeedback.length == 0){
            		$(".reg-sss").html('<font size="3" color="red">Not all fields are filled. try again</font>');
            	}else{

          		$.ajax({
          		   url: './',
          		   type: 'POST',
          		   data: {feedback: feedback, kapcha: kapcha, namefeedback: namefeedback, text: text, emailfeedback: emailfeedback},
          		   success: function(res){
          		        if(res){
          		           $(".reg-sss").html(res);
          		           console.log(res)
          		        }else{
          		            // если авторизация неудачна
          		            $(".error").remove();
          		            $(".authform").append('<div class="error"></div>');
          		            $(".error").hide().fadeIn(500).html(res);
          		        }
          		   },
          		   error: function(){
          		        alert("Error!");
          		   }
          		});
  
  			}


      });



    //    custom placeholder:
    function Placeholder(options) {
    	var $input = options.elem,
    		placeholderValue = $input.attr('placeholder');
    	$input.on('focus', onfocus);
    	$input.on('blur', onblur);

    	function onfocus() {
    		if(!$(this).val()){
    			$(this).attr('placeholder','');
    		}
    	}

    	function onblur(){
    		if(!$(this).val()) {
    			$(this).attr('placeholder',placeholderValue);
    		}
    	}
    }

    $('input[type="text"]').each(function(){
    	new Placeholder({elem: $(this)});
    });


});

