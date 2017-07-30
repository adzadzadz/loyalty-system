$("#amount").on('keyup', function() {
    var sales = $(this).val();
    var totalPoints = sales / 500;

    $("#pointsTotal").html(totalPoints);
});