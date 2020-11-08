/*
* Lewis Scott
* 11/1/20
* filename https://lscott.greenriverdev.com/355/JumpStart/js/ajaxUsername.js
*
*/
// post the username data to the ajax.php file on keyup
$(document).ready(function(){

    $("#username").keyup(function(){

        var username = $(this).val().trim();

        if(username != ''){

            $.ajax({
                url: 'includes/ajax.php',
                type: 'post',
                data: {username: username},
                success: function(response){

                    $('#uname_response').html(response);
                }
            });
        }else{
            $("#uname_response").html("");
        }

    });

});