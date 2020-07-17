$(function(){
$('.form-container').on('submit',function(e){
    e.preventDefault();

    name = $('#name').val();
    email = $('#email').val();
    message = $('#message').val();
    $form = $(this);

    if (name == "") {
        $form.find('.status').html("<div style='text-align:center;' class='alert alert-danger'>Name is required</div>");
    }
    else if (email == "") {
        $form.find('.status').html("<div style='text-align:center;' class='alert alert-danger'>Email is not valid </div>");
    }
    else if (message == "") {
        $form.find('.status').html("<div style='text-align:center;' class='alert alert-danger'>Comments/Question is required</div>");

    }
    else{
    $form.find('.status').html("");
    $("#button").html(" <span class='spinner-border spinner-border-sm'></span>  Loading..");
    submitForm($form);
    }

})
})

function submitForm($form) {
    $.ajax({
        url: $form.attr('action'),
        method: $form.attr('method'),
        data: $form.serialize(),
        success: function (response) {
            response = $.parseJSON(response);
            if (response.success) {
                name = $('#name').val("");
                email = $('#email').val("");
                message = $('#message').val("");
                $form.find('.status').html(response.message);
                $("#button").html("contact us");
            }
            else if (response.error) {
                $form.find('.status').html(response.message);
                $("#button").html("contact us");
            }
            else {
                $form.find('.status').html(response.message);
                $("#button").html("contact us");

            }
        }

    });
}

