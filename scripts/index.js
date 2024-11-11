
// Abrir e fechar barra de configurações
const abrirConfig = document.getElementById("abrirConfig");
abrirConfig.addEventListener("click", () => {
    document.getElementById("idBarraOculta").style.width = "250px";
});

const fecharConfig = document.getElementById("fecharConfig");
fecharConfig.addEventListener("click", () => {
    document.getElementById("idBarraOculta").style.width = "0";
});


//Função de abrir a imagem grande

// Seleciona todas as imagens de batalhas
const imagensBatalhas = document.querySelectorAll('.batalha_aldeia');

// Seleciona o modal e a imagem dentro dele
const modal = document.getElementById('modal');
const imagemMaior = document.getElementById('imagem-maior');
const closeModal = document.getElementById('close-modal');

// Adiciona evento de clique para cada imagem
imagensBatalhas.forEach(imagem => {
  imagem.addEventListener('click', () => {
    // Pega o caminho da imagem grande a partir do atributo 'data-imagem-grande'
    const imagemGrande = imagem.getAttribute('imagens/batalha_aldeia.jpg');
    
    // Define o caminho da imagem no modal
    imagemMaior.src = 'batalha_aldeia.jpg';

    // Exibe o modal
    modal.style.display = 'flex';
  });
});

// Fecha o modal ao clicar no "X"
closeModal.addEventListener('click', () => {
  modal.style.display = 'none';   // Esconde o modal
});

// Fecha o modal ao clicar fora da imagem
modal.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = 'none';  // Esconde o modal
  }
});




