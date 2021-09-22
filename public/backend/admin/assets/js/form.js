        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()


        if(document.getElementById('editor')){
            ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                // console.log(editor);
            })
            .catch(error => {
                // console.error(error);
            });
        }


        $(document).ready(function () {
            $('.select2').select2();
        });