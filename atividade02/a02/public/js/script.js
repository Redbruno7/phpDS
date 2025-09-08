document.addEventListener("DOMContentLoaded", () => {
    const nomeInput = document.getElementById("nome");
    if (nomeInput) {
        nomeInput.addEventListener("focus", () => {
            nomeInput.style.backgroundColor = "#e0f7fa";
        });
        nomeInput.addEventListener("blur", () => {
            nomeInput.style.backgroundColor = "";
        });
    }
});