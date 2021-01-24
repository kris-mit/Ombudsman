
$(() => {
    var header = $(".clickable-heading");
    header.click(function() {
    $(this).toggleClass("active");
    header.not(this).removeClass("active");
    })
    $(".toggle-item-content").slideUp();
    header.click(function(){
    $(this).next(".toggle-item-content").slideToggle("slow");
    });
})

