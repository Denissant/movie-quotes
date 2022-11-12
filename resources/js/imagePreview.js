const imageInput = document.querySelector('[data-image-input]');
const imagePreview = document.querySelector('[data-image-preview]');


imageInput.addEventListener('input', event => {
    if (!imageInput.files.length > 0) {
        imagePreview.src = '#';
        imagePreview.hidden = true;
        return;
    }

    const fileReader = new FileReader();

    fileReader.onload = (e) => {
        imagePreview.src = e.target.result;
        imagePreview.hidden = false;
    }

    fileReader.readAsDataURL(imageInput.files[0]);
});
