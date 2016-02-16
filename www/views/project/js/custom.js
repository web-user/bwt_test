/*global jQuery:false */
jQuery(document).ready(function($) {

		//add some elements with animate effect

$(function () {                                      
    $('.nav li a').each(function () {            
        var location = window.location.href; 
        var link = this.href;                
        if(location == link) {            
            $(this).addClass('active');
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
                    // IF success
                    window.location = "/";
                }else{
                    // if error
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
        		$(".reg-sss").html('<font size="3" color="red">Not all fields are filled. try again</font>');
        	}else{
        		$.ajax({
        		   url: './',
        		   type: 'POST',
        		   data: {login: login, reg: reg, gender: gender, datetime: datetime, surname: surname, email: email, pass: pass, name: name},
        		   success: function(res){
        		        if(res){
        		           $(".reg-sss").html(res);
        		           console.log(res)
        		           if(res == "<div class='success'>Registration completed successfully.</div>" ){
        		           		window.location = "/";
        		           		$("#login").val('');
        		           }
        		        }else{
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


  		// feedback
      $("#feedback").click(function(e){
      	e.preventDefault();
      	var feedback = $("#feedback").val();
      	var kapcha = $("#kapcha").val();
      	var namefeedback = $("#namefeedback").val();
      	var emailfeedback = $("#emailfeedback").val();
      	var text = $("#text").val();
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

