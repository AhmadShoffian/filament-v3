document.addEventListener("DOMContentLoaded", function () {
    const chatContainer = document.querySelector(".chat-container");
    const chatInput = document.getElementById("chatInput");
    const sendChatButton = document.getElementById("sendChat");
    const fileUpload = document.getElementById("fileUpload");

    // Fungsi autolink untuk mendeteksi URL dalam teks dan mengubahnya menjadi hyperlink
    function autoLink(text) {
        let urlPattern = /\b(https?:\/\/[^\s]+)/gi;
        return text.replace(
            urlPattern, '<a href="$1" target="_blank" style="color: white; text-decoration: underline;">$1</a>'
        );
    }

    // Menambahkan pesan ke dalam chat
    function addMessage(content, className, isHTML = false) {
        let messageElement = document.createElement("div");
        messageElement.classList.add("chat-message", className);

        let messageText = document.createElement("div");
        messageText.classList.add("message-text");
        
        if (isHTML) {
            messageText.innerHTML = content; // Digunakan untuk link dan gambar
        } else {
            messageText.textContent = content;
        }

        let timestamp = document.createElement("div");
        timestamp.classList.add("chat-timestamp");
        timestamp.textContent = new Date().toLocaleTimeString();

        messageElement.appendChild(messageText);
        messageElement.appendChild(timestamp);
        chatContainer.appendChild(messageElement);

        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    // Mengirim pesan teks
    function sendMessage() {
        let message = chatInput.value.trim();
        if (message === "") return;

        // Tambahkan pesan user dengan auto-link
        addMessage(autoLink(message), "sent", true);

        // Respon bot
        setTimeout(() => {
            let botResponse = "Terima kasih! Kami akan segera merespons. 😊";
            addMessage(botResponse, "received");
        }, 1000);

        // Kosongkan input
        chatInput.value = "";
    }

    // Kirim pesan saat tombol diklik
    sendChatButton.addEventListener("click", sendMessage);

    // Kirim pesan saat menekan "Enter"
    chatInput.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            sendMessage();
        }
    });

    // Validasi dan upload file
    fileUpload.addEventListener("change", function () {
        if (fileUpload.files.length > 0) {
            let file = fileUpload.files[0];
            let fileSize = file.size / 1024 / 1024; // Konversi ke MB
            let fileType = file.type;
            let fileName = file.name;

            // Hanya izinkan file gambar dan dokumen
            let allowedTypes = ["image/png", "image/jpeg", "image/gif", "application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];

            if (!allowedTypes.includes(fileType)) {
                alert("Hanya file gambar (PNG, JPG, GIF) atau dokumen (PDF, DOCX) yang diperbolehkan.");
                fileUpload.value = ""; // Reset input file
                return;
            }

            // Cek ukuran file
            if (fileSize > 2) {
                alert("Ukuran file tidak boleh lebih dari 2MB.");
                fileUpload.value = "";
                return;
            }

            // Jika file adalah gambar, tampilkan preview
            if (fileType.startsWith("image/")) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    addMessage(`<img src="${e.target.result}" alt="Gambar" style="max-width: 200px; border-radius: 8px;">`, "sent", true);
                };
                reader.readAsDataURL(file);
            } else {
                // Jika file adalah dokumen, tampilkan nama file
                addMessage(`📄 <strong>${fileName}</strong> telah diunggah.`, "sent", true);
            }
        }
    });
});
 