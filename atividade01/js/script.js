document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formCalc');

    form.addEventListener('submit', (event) => {
        let num1 = document.getElementById('num1').value;
        let num2 = document.getElementById('num2').value;
        let operacao = document.getElementById('operacao').value;

        if (num1.trim() === '' || isNaN(num1)) {
            alert('Digite um número válido no primeiro campo.');
            event.preventDefault();
            return;
        }

        if (num2.trim() === '' | isNaN(num2)) {
            alert('Digite um número válido no segundo campo.');
            event.preventDefault();
            return;
        }

        if (operacao === '') {
            alert('Selecione uma operação.');
            event.preventDefault();
            return;
        }
    });
});