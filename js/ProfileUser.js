document.addEventListener("DOMContentLoaded", function() {
    const uploadInput = document.getElementById('upload');
    const imageContainer = document.querySelector('.image-container');
    const saveButton = document.getElementById('saveButton');
    const rightImageContainer = document.querySelector('.right_image-container');

    uploadInput.addEventListener('change', function(event) {
        const file = event.target.files[0];

        if (file) {
        const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100%';
                img.style.maxHeight = '200px'; 
                imageContainer.innerHTML = '';
                imageContainer.appendChild(img);

                // Copy the uploaded image to right_body
                const imgCopy = img.cloneNode(true);
                rightImageContainer.innerHTML = '';
                rightImageContainer.appendChild(imgCopy);
            };

            reader.readAsDataURL(file);
        }
    });

    saveButton.addEventListener('click', function() {
        const leftBodyInputs = document.querySelectorAll('.left_body input[type="text"], .left_body input[type="password"]');
        const rightBodyInputs = document.querySelectorAll('.right_body input[type="text"], .right_body input[type="password"]');
    
        leftBodyInputs.forEach(function(input, index) {
            rightBodyInputs[index].value = input.value;
    });

    validateFields(); 
    });
});

function validateFields() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var password = document.getElementById("password").value;

    if (username == "" || email == "" || phoneNumber == "" || password == "") {
        alert("Semua kolom wajib diisi");
        return false; 
    }
    return true; 
}

