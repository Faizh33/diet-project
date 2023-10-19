document.addEventListener("DOMContentLoaded", function () {
    const reviewForm = document.getElementById('review-form');

    if (reviewForm) {
        reviewForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(reviewForm);
            const id = document.getElementById('recipe-id').value;

            fetch('/recettes/' + id, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    reviewForm.reset();

                    const successMessage = document.querySelector('.success-message');
                    if (successMessage) {
                        successMessage.style.display = 'block';
                        successMessage.textContent = data.message;
                    }
                } else {
                    const errorMessage = document.querySelector('.error-message');
                    if (errorMessage) {
                        errorMessage.style.display = 'block';
                        errorMessage.textContent = data.message;
                    }
                }
            })
            .catch(error => {
                console.error('Erreur lors de la soumission du formulaire', error);
            });
        });
    }
});
