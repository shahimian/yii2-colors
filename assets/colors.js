"use strict";

$("div.color").on("click", function(){
    $(this).parents("div.colors").find("div.automatic > div.color").css("background-color", $(this).css("background-color"));
    $(this).parents("div.colors").hide();
})
