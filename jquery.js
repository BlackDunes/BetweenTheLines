$(document).ready(function(){
$(".bookholder").mouseover(function(){
    $(this).stop().fadeTo('fast',0);
});
$(".bookholder").mouseout(function(){
    $(this).stop().fadeTo('fast',1);
});
});