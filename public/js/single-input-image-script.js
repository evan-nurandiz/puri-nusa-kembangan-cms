const onChangeImage = (event, uploadInputVar, fileNameLabelVar, imagePreviewVar) => {
    const uploadInput = document.getElementById(uploadInputVar);
    const filenameLabel = document.getElementById(fileNameLabelVar);
    const imagePreview = document.getElementById(imagePreviewVar);

    // Check if the event listener has been added before
    let isEventListenerAdded = false;

    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.innerHTML =
            `
            <div class="flex items-center" style="height:100%;">
                <img src="${e.target.result}" class="max-h-64 bg-contain rounded-lg mx-auto" alt="Image preview" />
            </div>`;
            imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400', 'p-14');

            // Add event listener for image preview only once
            if (!isEventListenerAdded) {
            imagePreview.addEventListener('click', () => {
                uploadInput.click();
            });
            }
        };
        reader.readAsDataURL(file);
    } else {
        filenameLabel.textContent = '';
        imagePreview.innerHTML =
            `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
        imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

        // Remove the event listener when there's no image
        imagePreview.removeEventListener('click', () => {
            uploadInput.click();
        });

        isEventListenerAdded = false;
    }
}