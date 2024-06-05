export const initPopupInput = () => {

    const productName = document.querySelector('.product-name-value');
    const productCard = document.querySelectorAll('.products__list li');

    productCard.forEach((item) => {

        const hiddenInput = item.querySelector('.hidden-product');
        const button = item.querySelector('.button');

        button.addEventListener('click', () => {
            productName.innerText = hiddenInput.value;
        });
    });
};