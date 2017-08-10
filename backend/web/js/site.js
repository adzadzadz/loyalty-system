$("#amount").on('keyup', function() {
    var sales = $(this).val();
    $("#salesTotal").html(sales);
});

$("#points").on('keyup', function() {
    var points = $(this).val();
    $("#pointsTotal").html(points);
});

$("#bonusPoints").on('keyup', function() {
    var points = $(this).val();
    $("#bonusPointsTotal").html(points);
});