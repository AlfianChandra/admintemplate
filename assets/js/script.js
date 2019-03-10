$(document).ready(function(){
    $(".panel").children(".panel-heading").append("<button class='panel-dismiss'><span class='fa fa-close'></span></button> <a href='javascript:void(0)' class='panel-minimize' cmd='close'><span class='fa fa-minus'></span></a>");
    
    $(".panel-dismiss").click(function(){
       var cls = $(this).parent().parent();
       cls.fadeOut(500);
    });
    
    $(".panel-minimize").click(function(){
        var cmd = $(this).attr("cmd");
        var cls = $(this).parent().parent();
        if(cmd === "open")
        {
            $(this).attr("cmd","close");
            cls.children(".panel-body").slideDown(500);
        }
        else
        {
            $(this).attr("cmd","open");
            cls.children(".panel-body").slideUp(500);
        }
    });
    
    $(".group-btn").click(function(){
       var divel = $(this).parent().children("div");
       var stat = $(this).attr("status");
       if(stat === "0")
       {
           divel.css("border-top","2px solid rgb(20,70,80)");
           divel.slideDown(400);
           $(this).attr("status","1");
       }
       else
       {
           divel.css("border-top","none");
           divel.slideUp(400);
           $(this).attr("status","0");
       }
    });
    
    $(".dd-open").click(function(){
       var parent = $(this).parent("div").children("div");
       parent.fadeToggle(50);
    });
    
    var status = "show";
    
    $(".panel-trigger").click(function(){
       if(status === "hidden")
       {
           status = "show";
       }else if(status === "show")
       {
           status = "hidden";
       }
    });
    
    setInterval(function(){
        if(status === "hidden")
        {
            $(".tm-leftpanel").addClass("hide-panel");
        }
        else if(status === "show")
        {
            $(".tm-leftpanel").removeClass("hide-panel");
        }
        
        var mobile = $(window).width();
        if(status === "hidden" && mobile <= 1349 )
        {
            $(".tm-body").removeClass("col-md-10");
            $(".tm-body").removeClass("col-md-offset-2");
            $(".tm-body").addClass("col-md-12");
        }
        else
        {
            $(".tm-body").addClass("col-md-10");
            $(".tm-body").addClass("col-md-offset-2");
            $(".tm-body").removeClass("col-md-12");
        }
    },100);
    
});