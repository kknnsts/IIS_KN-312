function valid(form){
   var fail = false;
   var name = form.name.value;
   var surname = form.surname.value;
   var tel = form.tel.value;
   var email = form.email.value;
   var answer = form.answer.value;
   
   var reg_tel = /^\+380[0-9]{7}/i;
   var reg_em = /^[a-zA-Z][0-9a-zA-Z_]{2,21}@[a-zA-Z]{2,12}\.[a-zA-Z]{2,12}/i;
   
   if(name == "" || name == " ")
		fail = "Ви не ввели своє ім'я";
	else if(surname == "" || surname == " ")
		fail = "Ви не ввели своє прізвище";	
	else if(reg_tel.test(tel) == false)
		fail = "Неправильно введений номер телефону";
	else if(reg_em.test(email) == false)
		fail = "Неправильно введений email";
	if(fail)
		alert(fail);
	
}



$(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('#scroll_up').fadeIn();
        } else {
            $('#scroll_up').fadeOut();
        }
    });

    $(document).ready(function() {
        $("#scroll_up").click(function(event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });

    })

	
