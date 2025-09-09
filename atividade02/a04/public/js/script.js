document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formLogin");

    form.addEventListener("submit", (e) => {
        const usuario = document.getElementById("usuario").value.trim();
        const senha = document.getElementById("senha").value.trim();

        if (usuario === "" || senha === "") {
            e.preventDefault();
            alert("Preencha todos os campos!");
        }
    });
});
