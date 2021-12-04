var float = document.getElementById("whatsapp")
float.addEventListener('click', () => {
    window.location.href = 'https://api.whatsapp.com/send?phone=+62852-4989-3326&text=Hello';
});