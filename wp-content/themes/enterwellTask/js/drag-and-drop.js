document.addEventListener("DOMContentLoaded", function() {
    // ************************ Drag and drop ***************** //
    let dropArea = document.getElementById("drop-area");
    let fileElem = document.getElementById("fileElem");
    let uploadIcon = document.getElementById("upload-icon");
    let uploadIconText = document.getElementById("upload-icon-text");
    let small = document.getElementById("pic_id")

// Prevent default drag behaviors
    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false)
        document.body.addEventListener(eventName, preventDefaults, false)
    })

// Highlight drop area when item is dragged over it
    ;['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false)
    })

    ;['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false)
    })

// Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false)

    dropArea.ondrop = function(evt) {
        uploadIcon.classList.add('upload-icon-dropped')
        uploadIcon.classList.remove('upload-icon-highlight')
        uploadIcon.classList.remove('upload-icon')
        if(evt.dataTransfer.files[0].size / 1000000 < 5 && checkType(evt.dataTransfer.files[0].name) === true) {
            fileElem.files = evt.dataTransfer.files;
            uploadIcon.src = "wp-content/themes/enterwellTask/assets/uploaded-document-placeholder.icon.svg"
            small.innerText = fileElem.files[0].name
            small.style.color = "#ffffff"
        } else {
            uploadIcon.src = "wp-content/themes/enterwellTask/assets/broken-image.svg"
            small.innerText = "Prijenos nije uspio"
            small.style.color = "#d9452d"
        }
        evt.preventDefault();
    }

    function checkType(value) {
        value = value.split(".");
        let lastPart = value[value.length - 1];
        let supportedTypes = ['jpg', 'pdf', 'png'];
        return supportedTypes.includes(lastPart);
    }

    function preventDefaults (e) {
        e.preventDefault()
        e.stopPropagation()
    }

    function highlight(e) {
        dropArea.classList.add('highlight')
        uploadIcon.classList.add('upload-icon-highlight')
        uploadIcon.classList.remove('upload-icon')
        uploadIcon.src = "wp-content/themes/enterwellTask/assets/upload-icon-highlight.svg"
        uploadIconText.classList.add("text-drop-file")
        uploadIconText.classList.remove("drag-drop-file")
        uploadIconText.innerHTML = "Ispustite ovdje";
    }

    function unhighlight(e) {
        dropArea.classList.remove('highlight')
        uploadIcon.classList.add('upload-icon')
        uploadIcon.classList.remove('upload-icon-highlight')
        uploadIcon.src="wp-content/themes/enterwellTask/assets/upload-icon.svg"
        uploadIconText.classList.remove("text-drop-file")
        uploadIconText.classList.add("drag-drop-file")
        uploadIconText.innerHTML = "Povuci i ispusti datoteku\n" +
            "kako bi započeo prijenos\n" +
            "<br><br> ili\n" +
            "<input type=\"file\" id=\"fileElem\" class=\"input-file\" multiple accept=\"image/*\" onchange=\"handleFiles(this.files)\">\n" +
            "<label for=\"fileElem\" class=\"text-style-1\">Pretražite računalo";
    }

    function handleDrop(e) {
        var dt = e.dataTransfer
        var files = dt.files

        handleFiles(files)
    }

    function handleFiles(files) {
        files = [...files]
        files.forEach(uploadFile)
        files.forEach(previewFile)
    }

    function previewFile(file) {
        let reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onloadend = function() {
            uploadIcon.classList.add('upload-icon-dropped')
            uploadIcon.classList.remove('upload-icon-highlight')
            uploadIcon.classList.remove('upload-icon')
            if(file.size / 1000000 < 5) {
                uploadIcon.src = "wp-content/themes/enterwellTask/assets/uploaded-document-placeholder.icon.svg"
                small.innerText = fileElem.files[0].name
                small.style.color = "#ffffff"
            } else {
                uploadIcon.src = "wp-content/themes/enterwellTask/assets/broken-image.svg"
                small.innerText = "Prijenos nije uspio"
                small.style.color = "#d9452d"
            }
        }
    }

    function uploadFile(file) {
        console.log(file);
    }
});
