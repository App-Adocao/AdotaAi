const imageUpload = document.getElementById("imageUpload");
const imageList = document.getElementById("imageList");
const previewImage = document.getElementById("previewImage");
const previewInfo = document.getElementById("previewInfo");

let images = [];
let currentImageIndex = 0;

imageUpload.addEventListener("change", () => {
  const files = Array.from(imageUpload.files);
  images.push(...files);
  renderImageList();
  updatePreview();
});

function renderImageList() {
  imageList.innerHTML = "";
  images.forEach((img, index) => {
    const div = document.createElement("div");
    div.classList.add(
      "d-flex",
      "justify-content-between",
      "align-items-center",
      "mb-1"
    );
    div.innerHTML = `
      <span class="text-dark">${img.name}</span>
      <button class="btn btn-sm btn-danger" onclick="removeImage(${index})">🗑️</button>
    `;
    imageList.appendChild(div);
  });
}

function removeImage(index) {
  images.splice(index, 1);
  if (currentImageIndex >= images.length) {
    currentImageIndex = images.length - 1;
  }
  renderImageList();
  updatePreview();
}

function updatePreview() {
  if (images.length === 0) {
    previewImage.innerHTML = '<span style="font-size: 2rem;">📷</span>';
    return;
  }

  const file = images[currentImageIndex];
  const reader = new FileReader();
  reader.onload = () => {
    previewImage.innerHTML = `<img src="${reader.result}" class="img-fluid rounded" style="max-height: 100%;">`;
  };
  reader.readAsDataURL(file);
}

function prevImage() {
  if (images.length > 0) {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updatePreview();
  }
}

function nextImage() {
  if (images.length > 0) {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updatePreview();
  }
}

function cadastrarPet() {
  const nome = document.getElementById("nome").value;
  const tamanho = document.getElementById("tamanho").value;
  const peso = document.getElementById("peso").value;
  const idade = document.getElementById("idade").value;

  if (!nome || !tamanho || !peso || !idade) {
    alert("Preencha todos os campos obrigatórios!");
    return;
  }

  previewInfo.innerHTML = `
    <strong>${nome}</strong><br>
    Tamanho: ${tamanho}<br>
    Peso: ${peso}<br>
    Idade: ${idade}
  `;
}
