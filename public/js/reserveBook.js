
function reserveBook(bookId, buttonElement) {
    // Disable the button during the request
    buttonElement.disabled = true;

    // Implement AJAX request to reserve the book
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../../app/Controller/Action/reserveBook.php", true); // Use the correct relative path
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE) {
            // Check if the request was successful (status 200)
            if (this.status === 200) {
                // Assuming the server responds with a success message
                // Update UI accordingly
                alert("Book reserved successfully!");

                // Update Cart Counter
                updateCartCounter();
            } else {
                // Handle errors
                alert("Error: Unable to reserve the book.");
            }

            // Enable the button after the request is complete
            buttonElement.disabled = false;
        }
    };

    xhr.send("book_id=" + bookId);
}

// Function to update cart counter
function updateCartCounter() {
    const cartCounter = document.querySelector('.bi-cart-fill + span');
    let count = parseInt(cartCounter.textContent) || 0;
    count++;
    cartCounter.textContent = count;
}

// Optional: Handle 'Add to cart' click events
document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        // Implement logic for adding to cart
        updateCartCounter();
    });
});
