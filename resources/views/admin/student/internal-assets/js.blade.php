<script>
    $('#name').on('input', function(){
        setTimeout(() => {
            let data = $('#name').val();
            $('#student_name').text(data);
        }, 500);
    });
    function displaySelectedImage() {
        const fileInput = document.getElementById('fileInput');
        const selectedImage = document.getElementById('selectedImage');
        const studentImageContainer = document.getElementById('studentImageContainer');
        const uploadImage = document.querySelector('.upload');

        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imageUrl = e.target.result;

                // Update the selectedImage element
                selectedImage.src = imageUrl;
                selectedImage.style.display = 'block';
                uploadImage.style.display = 'none';

                // Update the studentImageContainer element
                studentImageContainer.innerHTML = `<img src="${imageUrl}" alt="Student Image" class="student_image" style="width: 100%; height: auto;">`;
            };

            reader.readAsDataURL(file);
        }
    }
</script>
<script>
    function triggerFileInputClick() {
        // Trigger the click event on the file input
        document.getElementById('nid_birth_input').click();
    }
    function showPdfImage() {
        var input = document.getElementById('nid_birth_input');
        var image = document.getElementById('pdfImage');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                image.src = '{{ asset("icon/pdf_icon.svg") }}'; // Change this to the path of your PDF image
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
