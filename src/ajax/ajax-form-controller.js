document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(this);
            const actionUrl = this.getAttribute('action');

            fetch(actionUrl, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log(data)
                        handleResponse(data)
                    } else {
                        displayErrors(this, data.errors);
                    }
                })
                .catch(error => {
                    console.log(error);
                    console.error('AJAX Error:', error);
                    alert('An error occurred. Please try again.');
                });
        });
    });
});

function displayErrors(form, errors) {
    const errorMessages = form.querySelectorAll('span');
    errorMessages.forEach(span => span.textContent = '');

    for (let field in errors) {
        const errorMessageElement = form.querySelector(`label[for="${field}"] > span`);
        if (errorMessageElement) {
            errorMessageElement.textContent = errors[field];
        }
    }
}

function handleResponse(data) {
    if (data) {
        const table = document.getElementById("tours-list");
        table.innerHTML = "";

        const newData = data.newData; // Extract the new data from the JSON object
        newData.forEach((data) => {
            const row = document.createElement("tr");
            Object.keys(data).forEach((key) => {
                const cell = document.createElement("td");
                cell.textContent = data[key];
                row.appendChild(cell);
            });
            table.appendChild(row);
        });
    }
}