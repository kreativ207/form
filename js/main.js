
$(function () {
    $('body').on('click', '#sendFormClick', function () {

        var firstN = $("#exampleInputNameFirst").val();
        var lastN = $("#exampleInputNameLast").val();
        var email = $("#exampleInputEmail1").val();

        if(firstN.length > 0 && lastN.length > 0 && email.length > 0){
            $.ajax({
                type: "POST",
                url: "/script/send-form.php",
                data: "first_name=" + firstN + "&last_name=" + lastN + "&email=" + email,
                success: function (data) {
                    $("#mainTable").html(data);
                    $("#exampleInputNameFirst").val("");
                    $("#exampleInputNameLast").val("");
                    $("#exampleInputEmail1").val("");
                    $(".error-form").css("display", "none");
                },
                error: function () {
                    //alert('error handing here');
                }
            });
        } else {
            $(".error-form").css("display", "block");
        }
    });
});