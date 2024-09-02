//script.js
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var successBox = document.getElementById('success-box');
    var errorBox = document.getElementById('error-box');

    if (username === "admin" && password === "987") {
        successBox.classList.remove('hidden'); // Mostra a caixa de sucesso
        errorBox.classList.add('hidden'); // Garante que a caixa de erro esteja escondida
    } else {
        successBox.classList.add('hidden'); // Garante que a caixa de sucesso esteja escondida
        errorBox.classList.remove('hidden'); // Mostra a caixa de erro
    }
});
