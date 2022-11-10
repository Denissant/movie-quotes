function removeFlashedMessage() {
    document.getElementById('flashed-message')?.remove();
}

setTimeout(removeFlashedMessage, 5_000);
