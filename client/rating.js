$(document).ready(function() {
    // Smoothie card click event to show rating modal
    $('.smoothie-card').click(function() {
        $('#ratingModal').modal('show');
    });

    // Rating stars functionality
    $('.star').click(function() {
        const rating = $(this).data('rating');
        $('#ratingInput').val(rating); // Set hidden input value
        $('.star').removeClass('active'); // Remove active class from all stars
        $(this).prevAll().addBack().addClass('active'); // Add active class to selected stars and previous ones
    });

    // Submit rating button click event
    $('#submitRatingBtn').click(function() {
        const rating = $('#ratingInput').val();
        const opinion = $('#opinionInput').val();

        // Handle submission (e.g., send data to server)
        console.log(`Rating: ${rating}, Opinion: ${opinion}`);

        // Close modal after submission
        $('#ratingModal').modal('hide');
    });
});
