// public/js/custom.js

document.addEventListener('DOMContentLoaded', function () {
    var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var form = button.closest('form');
            var productId = form.dataset.productId;

            // Submit the form via AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/add_to_cart', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 400) {
                    // Handle the response, e.g., update the cart total on the page
                    console.log(xhr.responseText);
                    // You can redirect to the cart page or update the UI as needed
                    // window.location.href = '/cart';
                } else {
                    console.error('Request failed with status:', xhr.status);
                }
            };

            xhr.onerror = function () {
                console.error('Network error occurred');
            };

            xhr.send('product_id=' + productId);
        });
    });
});
