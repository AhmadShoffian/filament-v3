function previewFile() {
    const fileInput = document.getElementById("fileInput");
    const previewImage = document.getElementById("previewImage");
    const previewText = document.getElementById("previewText");
    const previewLink = document.getElementById("previewLink");
    const removeBtn = document.getElementById("removeBtn");
    const file = fileInput.files[0];

    if (file) {
        const fileType = file.type;
        const validTypes = ["image/png", "image/jpeg", "application/pdf"];

        if (!validTypes.includes(fileType)) {
            alert("Format file tidak valid! Hanya diperbolehkan PNG, JPG, dan PDF.");
            fileInput.value = "";
            return;
        }

        const reader = new FileReader();
        reader.onload = function(e) {
            previewText.style.display = "none";
            removeBtn.style.display = "block";

            if (fileType.startsWith("image")) {
                previewImage.src = e.target.result;
                previewImage.style.display = "block";
                previewLink.style.display = "none";
            } else if (fileType === "application/pdf") {
                previewLink.href = e.target.result;
                previewLink.textContent = "Lihat PDF";
                previewLink.style.display = "block";
                previewImage.style.display = "none";
            }
        };
        reader.readAsDataURL(file);
    }
}

function removeFile() {
    document.getElementById("fileInput").value = "";
    document.getElementById("previewImage").src = "";
    document.getElementById("previewImage").style.display = "none";
    document.getElementById("previewLink").href = "#";
    document.getElementById("previewLink").style.display = "none";
    document.getElementById("previewText").style.display = "block";
    document.getElementById("removeBtn").style.display = "none";
}

// Form Submission Handling
document.getElementById("uploadForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Form berhasil dikirim!");
});
