$('.circle').on('mouseover', function() {
    $(this).stop().animate({
        'border-width': 1,
        'border-radius': 200
    }, 500);
});

$('.circle').on('mouseout', function() {
    $(this).stop().animate({
        'border-width': 0,
        'border-radius': 100
    }, 500);
});
