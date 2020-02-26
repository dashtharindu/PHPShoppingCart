                                                                                           
function checkform() 
{
            var name1 = $('#name1').val();
            var name2 = $('#name2').val();
            var email = $('#email').val();
            var pw1 = $('#pw1').val();
            var pw2 = $('#pw2').val();
            var bday = $('#bday').val();
            var sex = $('#sex').val();
            var error = false;

            if(name1.length == 0){
                var error = true;
                $('#name1_error').fadeIn(500);
            } else {

                $('#name1_error').fadeOut(500);
            }
            if(name2.length == 0){
                var error = true;
                $('#name2_error').fadeIn(500);
            } else {

                $('#name2_error').fadeOut(500);
            }			
            if(email.length < 5 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(500);
            } else {

                $('#email_error').fadeOut(500);
            }
            if(pw1.length == 0){
                var error = true;
                $('#pw1_error').fadeIn(500);
            } else {

                $('#pw1_error').fadeOut(500);
            }
            if (pw1 == pw2) {

                $('#pw2_error').fadeOut(500);
            }else{
                var error = true;
                $('#pw2_error').fadeIn(500);
            }			
            if(bday.length != 10){
                var error = true;
                $('#bday_error').fadeIn(500);
            } else {
  
                $('#bday_error').fadeOut(500);
            }
			
            if (error == false) {
                return true ;
            }else {
                return false ;
            }
}

function edit() 
{
            var name1 = $('#name1').val();
            var name2 = $('#name2').val();
            var email = $('#email').val();
            var bday = $('#bday').val();
            var sex = $('#sex').val();
            var error = false;

            if(name1.length == 0){
                var error = true;
                $('#name1_error').fadeIn(500);
            } else {

                $('#name1_error').fadeOut(500);
            }
            if(name2.length == 0){
                var error = true;
                $('#name2_error').fadeIn(500);
            } else {

                $('#name2_error').fadeOut(500);
            }			
            if(email.length < 5 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(500);
            } else {

                $('#email_error').fadeOut(500);
            }
						
            if(bday.length != 10){
                var error = true;
                $('#bday_error').fadeIn(500);
            } else {
  
                $('#bday_error').fadeOut(500);
            }
			
            if (error == false) {
                return true ;
            }else {
                return false ;
            }
}