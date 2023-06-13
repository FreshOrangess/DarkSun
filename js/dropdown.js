$(window).resize(function() {
    if ($(this).width() > 769) {
        document.getElementById('mydropdown').style.display = "none"
        document.body.style.overflow = 'auto';
        document.body.style.overflow = 'scroll';
    }
});
function dropdown(){
    //再次打开
    if ($('.dropdown-off').length) {
    $('.dropdown-off').each(function() {
    var classes = $(this).attr('class');
    classes = classes.replace('dropdown-off', 'dropdown-on');
    $(this).attr('class', classes);
    });
    document.getElementById('mydropdown').style.display = "block"
    document.documentElement.style.overflow = 'hidden';
    document.documentElement.style.scrollbarWidth = 'none';
    }
    else{
        //关闭
        if($('.dropdown-on').length){
            $('.dropdown-on').each(function() {
            var classes = $(this).attr('class');
            classes = classes.replace('dropdown-on', 'dropdown-off');
            $(this).attr('class', classes);
            });
            setTimeout(function(){
                document.getElementById('mydropdown').style.display = "none"
            },300)
            document.documentElement.style.overflow = 'auto';

        }
        //首次打开
        else{
            $('.mydropdown').each(function() {
            var classes = $(this).attr('class');
            classes = classes.replace('mydropdown', 'dropdown-on');
            $(this).attr('class', classes);
            }
            );
            document.documentElement.style.overflow = 'hidden';
            document.documentElement.style.scrollbarWidth = 'none';                    
        }
     
    }
}

