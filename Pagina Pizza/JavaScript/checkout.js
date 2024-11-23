document.getElementById('checkout-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe realmente

    // Mostrar un mensaje de éxito
    document.getElementById('success-message').classList.remove('hidden');

    // Limpiar el formulario
    this.reset();
});
