'use strict';

const alert = document.querySelector('.alert');
const btn = document.querySelector('.close');

btn.addEventListener('click', () => {
    alert.classList.add('hidden');
})
