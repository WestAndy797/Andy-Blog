$("document").ready(function() {
    $(".techno").bind('mouseover', dropdown);
    $(".techno").bind('mouseout', dropin);
   $(".index").bind('click', indexclick);
   $(".uls").css({"background": "#efefef",
       "background": "linear-gradient(top, #efefef 0%, #bbbbbb 100%)" ,
       "background": "-moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%)" ,
       "background": "-webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%)" ,
       "box-shadow": "0px 0px 9px rgba(0,0,0,0.15)",
       "padding": "0px",
       "border-radius": "10px",
       "list-style": "none",
       "position": "relative",
        "height": "120px",
        "width": "800%",
       "float": "right",
   "position": "relative",
"min-height": "1px",
"padding-right": "15px",
"right":"0",
"box-sizing": "border-box",
"z-index": "30",
   });
   
   function indexclick(){
       $(".index").addClass("active");
   }
   
   
   function dropdown() {
    $(".uls").stop().slideDown(800);
    
}

function dropin() {
    $(".uls").stop().slideUp(800);
    
}
});
