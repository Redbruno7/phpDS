document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("numero");
    if (input) {
        input.addEventListener("focus", () => {
            input.style.backgroundColor = "#e0f7fa";
        });
        input.addEventListener("blur", () => {
            input.style.backgroundColor = "";
        });
    }
});
