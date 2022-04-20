require('./bootstrap');

import Choices from 'choices.js';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 5,
        removeItemButton: true,
    });
}
Alpine.start();
