function updateQty(id, action) {
    // 1. Send data to PHP backend
    fetch('../Backend/update_cart_quantity.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            id: id,
            action: action
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // 2. Update the number on the screen
            const qtySpan = document.getElementById('qty-' + id);
            if (qtySpan) {
                qtySpan.innerText = data.new_quantity;
            }
            // Optional: Reload page to update the Total Price calculation
            location.reload();
        } else {
            console.error('Error updating quantity:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}