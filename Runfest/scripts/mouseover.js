// $('.circle').on('mouseover', function() {
//     $(this).stop().animate({
//         'border-width': 1,
//         'border-radius': 200
//     }, 500);
// });
//
// $('.circle').on('mouseout', function() {
//     $(this).stop().animate({
//         'border-width': 0,
//         'border-radius': 100
//     }, 500);
// });

$(document).ready(function() {
    $("[data-fancybox]").fancybox({
        overlayOpacity: "0.85"
    });

    $("#filters a").click(function() {
        $("#filters .current").removeClass("current");
        $(this).addClass("current");

        var selector = $(this).attr("data-filter");

        $(".items").isotope({
            filter: selector,
            animationOptions: {
                duration: 1500,
                easing: 'linear',
                queue: false
            }
        });

        return false;

    });
})

