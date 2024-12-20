function toggleSizeOption(size) {
    const container = document.getElementById('size-options-container');
    const buttons = document.querySelectorAll('.size-button');
    
    // Limpiar el contenido previo si ya está visible la misma opción
    if (container.dataset.currentSize === size) {
        container.innerHTML = '';
        container.dataset.currentSize = '';

        // Restaurar el ancho original de todos los botones
        buttons.forEach((button) => {
            button.classList.remove('selected');
            button.style.width = ''; // Restaurar el ancho original
        });

        return;
    }
    
    // Actualizar el tamaño actualmente visible
    container.dataset.currentSize = size;

    // Limpiar el contenedor y agregar el nuevo contenido
    container.innerHTML = `
        <div class="size-option">
            <div class="quantity-selection">
                <button class="quantity-button" onclick="changeQuantity('${size}', -1)">-</button>
                <input type="number" id="quantity-${size}" value="1" min="1" step="1" readonly>
                <button class="quantity-button" onclick="changeQuantity('${size}', 1)">+</button>
            </div>
        </div>
    `;

    // Restaurar el tamaño de todos los botones y resaltar el seleccionado
    buttons.forEach((button) => {
        button.classList.remove('selected');
        button.style.width = ''; // Restaurar el ancho original
    });

    const selectedButton = Array.from(buttons).find((button) =>
        button.textContent.toLowerCase() === size
    );
    
    if (selectedButton) {
        selectedButton.classList.add('selected');
        selectedButton.style.width = '150px'; // Incrementar el ancho del botón seleccionado
    }

    console.log(`Sección desplegada para tamaño: ${size}`); // Para depuración
}

function changeQuantity(size, change) {
    const quantityInput = document.getElementById(`quantity-${size}`);
    if (quantityInput) {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity + change >= 1) {
            quantityInput.value = currentQuantity + change;
        }
    }
}
