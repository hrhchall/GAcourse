  $(document).ready(function(){
            $(".desc").hide();
            $("h2").click(function(){
                var cssblock = $(this).next().css('display');
                if(cssblock=='block') {
                    $(this).next().slideUp(400);
                } else {
                    $(this).next().slideDown(200);
                    $(this).next().siblings('div').slideUp("slow");
                }
            });
        });
 