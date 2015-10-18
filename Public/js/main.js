$(function (){
    $("input").hover(
        function () {

            $(this).addClass("button_hover");
        },
        function () {
            $(this).removeClass("button_hover");
        }
    )

})


