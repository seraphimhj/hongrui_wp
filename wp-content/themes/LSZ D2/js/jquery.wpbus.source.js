/*
Author:The Wpbus Theme Team
Author URI: http://www.wpbus.com
*/

//switch
$(document).ready(function() {

    $(".switch").click(function() {
        if ($('.user-form').css("display") == "none")
        $('.user-form').fadeIn('fast');
        else
        $('.user-form').fadeOut('slow');

    });

});


//search
$(function() {
    $("#s")
    .attr({
        value: "请输入搜索关键词"
    })
    .blur(function() {
        $(this).val($(this).val())
    })
    .focus(function() {
        $(this).val("")
    })

})


//image
 $(function() {
    $(".post-txt img").css({
        height: ""
    }).removeAttr("width").removeAttr("height").each(
    function() {
        var $this = $(this).width();
        var maXimg = 610;
        if ($this > maXimg) {
            $this = maXimg
        };
        $(this).width($this);

    }
    )

});