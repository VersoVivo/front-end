
// Abrir e fechar barra de configurações
const abrirConfig = document.getElementById("abrirConfig");
abrirConfig.addEventListener("click", () => {
    document.getElementById("idBarraOculta").style.width = "250px";
});

const fecharConfig = document.getElementById("fecharConfig");
fecharConfig.addEventListener("click", () => {
    document.getElementById("idBarraOculta").style.width = "0";
});