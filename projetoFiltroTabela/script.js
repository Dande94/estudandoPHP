// Obtém o elemento select
var selectElement = document.getElementById("mySelect");

// Adiciona um ouvinte de evento para o evento "change"
selectElement.addEventListener("change", function() {
    // Submete o formulário quando houver uma mudança na seleção
    document.getElementById("myForm").submit();
});