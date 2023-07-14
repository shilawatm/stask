$(function () {

    $('.select2').select2();

    $("input[id='txt_mno']").on('input', function (e) {

        $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });

    $("input[id='txt_fname']").on('input', function (e) {

        $(this).val($(this).val().replace(/[^a-z A-Z]/g, ''));
    });
    $("input[id='txt_lname']").on('input', function (e) {

        $(this).val($(this).val().replace(/[^a-z A-Z]/g, ''));
    });

});
//validate file extension custom  method.
jQuery.validator.addMethod("extension", function (value, element, param) {
    param = typeof param === "string" ? param.replace(/,/g, '|') : "png|jpe?g|gif";
    return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
}, jQuery.format("Please enter a value with a valid extension."));

$("#firstform").validate({
    rules: {
        fname: {
            required: true,
        },
        lname: {
            required: true,
        },
        mobile_no: {
            required: true,
            minlength: 10,
            number: true
        },
        email: {
            required: true,
            email: true

        },
        

        state: {
            required: true
        },
        city: {
            required: true
        },
        img: {
            required: true,
            extension: "jpg|jpeg|png|ico|bmp"
        },
      
    },
    messages: {
        fname: {
            required: "Please enter your first name"

        },
        lname: {
            required: "Please enter your last name"

        },
        mobile_no: {
            required: "Please enter your mobile number",
            number: "Please enter your mobile number as a numerical value"

        },
        email: {
            required: "Please enter your email id",
            email: "Please enter valid email"
        },
    
        state: {
            required: "Please select state"

        },
        city: {
            required: "Please select city"

        },
        img: {
            required: "Please upload file.",
            extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)."

        }
    },
    submitHandler: function (form) {
        //form.submit();
        OnSubmit();
    }
});

function get_city() {
    var id = $('#txt_state').val();
    var dataString = 'id=' + id;
    $.ajax
        ({
            type: "GET",
            url: "http://localhost/task/corephp/task/home.php?name=city",
            data: dataString,
            cache: false,
            success: function (html) {
                $("#txt_city").html('');
                $("#txt_city").html(html);
            }
        });
}

function OnSubmit() {
    $('#cover-spin').show()
    var postData = new FormData($('#firstform')[0]);

    $.ajax
        ({
            type: "POST",
            url: "http://localhost/task/corephp/task/home.php",
            data: postData,
            contentType: false,
            processData: false,   
            cache: false,    
           
            success: function (html) {
                $('#cover-spin').hide()
                $("#reg_form").hide();
                $("#tbl_s").show();
                
                $("#tbl_data").html(html);
            }
        });
}




