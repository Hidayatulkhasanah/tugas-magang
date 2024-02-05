@extends('pelanggan.layout.index')

@section('content')
    <h4 class="mt-5">Best Seller</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4" id="bestSellerList">
        <!-- Data for Best Seller will be dynamically added here -->
    </div>

    <h4 class="mt-5">New Product</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4" id="newProductList">
        <!-- Data for New Product will be dynamically added here -->
    </div>
@endsection

@push('scripts') 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('https://9186-114-122-115-149.ngrok-free.app/api/v1/product/')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                displayProducts(data, 'bestSellerList'); // Call the function to display Best Seller products
                displayProducts(data, 'newProductList'); // Call the function to display New Product products
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });

        function displayProducts(products, containerId) {
            const productListContainer = document.getElementById(containerId);

            // Iterate through the products and create a card for each
            products.forEach(product => {
                const card = document.createElement('div');
                card.className = 'card';
                card.style = 'width:220px;';

                // Card header
                const cardHeader = document.createElement('div');
                cardHeader.className = 'card-header m-auto';
                cardHeader.style = 'border-radius: 5px;';
                const img = document.createElement('img');
                img.src = product.image_url; // Assuming the API provides an image URL
                img.alt = product.nama;
                img.style = 'width: 100%;';
                cardHeader.appendChild(img);
                card.appendChild(cardHeader);

                // Card body
                const cardBody = document.createElement('div');
                cardBody.className = 'card-body';
                const productName = document.createElement('p');
                productName.className = 'm-0';
                productName.textContent = product.nama;
                const starRating = document.createElement('p');
                starRating.className = 'm-0';
                starRating.innerHTML = '<i class="fa-regular fa-star"></i>' + product.rating;
                cardBody.appendChild(productName);
                cardBody.appendChild(starRating);
                card.appendChild(cardBody);

                // Card footer
                const cardFooter = document.createElement('div');
                cardFooter.className = 'card-footer d-flex flex-row justify-content-between align-items-center';
                const price = document.createElement('p');
                price.className = 'm-0';
                price.style = 'font-size: 16px; font-weight: 600;';
                price.textContent = 'Rp. ' + product.price;
                const addToCartButton = document.createElement('button');
                addToCartButton.className = 'btn btn-outline-primary';
                addToCartButton.style = 'font-size:24px';
                addToCartButton.innerHTML = '<i class="fa-solid fa-cart-plus"></i>';
                cardFooter.appendChild(price);
                cardFooter.appendChild(addToCartButton);
                card.appendChild(cardFooter);

                // Append the card to the product list container
                productListContainer.appendChild(card);
            });
        }
    });
</script>
@endpush
