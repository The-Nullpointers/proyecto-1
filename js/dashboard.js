nAvatares = 0;

function SetNumAvatares(n){
  nAvatares = n;
}


function addCard(){

  // Get the container element
  container = document.getElementById('card-container');
  
  SetNumAvatares(nAvatares+1);

  // Create a new div element
  newDiv = document.createElement('div');
  newDiv.className = 'col-md-4';
  newDiv.id = 'card-' + nAvatares;
  altValue = 'Avatar ' + nAvatares;

  // Set the innerHTML of the new div
  newDiv.innerHTML = `
    <div class="card">
      <div class="contenedor-imagenes card-img" id="penguin">
        <img src="../images/penguins/blanco.png" class="card-img" alt="Pinguino" id="color-avatar-${nAvatares}">
        <img src="../images/vacia.png" class="card-img" alt="Torso" id="clothes-avatar-${nAvatares}">
        <img src="../images/vacia.png" class="card-img" alt="Cabeza" id="hair-avatar-${nAvatares}">
        <img src="../images/vacia.png" class="card-img" alt="Accesorio" id="accessory-avatar-${nAvatares}">
      </div>
      <img src="../images/vacia.png" class="card-img" alt="Pinguino" id="image-avatar-${nAvatares}">
      <div class="card-body">
        <button onclick="editCard(${nAvatares})" class="btn btn-primary button-81" id="btn-edit-${nAvatares}" >Editar</button>
      </div>
    </div>
  `;

  // Append the new div to the container
  container.appendChild(newDiv);
}

function editCard(avatar) {
  window.location.href = 'avatar.php?avatar=' + encodeURIComponent(avatar);
}



function LoadAvatarCards(){

  n = nAvatares;
  SetNumAvatares(0);
  
  for (var i = 0; i < n; i++) {
    console.log(i);
    console.log(n);
    addCard();
  }

}


function loadAvatarsImages(n, color, clothes, hair, accessory){

  var path = "";
  var id = "";
  var image = null;

  path = "../images/penguins/" + color;
  id = "color-avatar-" + n;
  image = document.getElementById(id)
  image.src = (path);

  path = "../images/clothes/" + clothes;
  id = "clothes-avatar-" + n;
  image = document.getElementById(id)
  image.src = (path);

  path = "../images/hair/" + hair;
  id = "hair-avatar-" + n;
  image = document.getElementById(id)
  image.src = (path);

  path = "../images/accessories/" + accessory;
  id = "accessory-avatar-" + n;
  image = document.getElementById(id)
  image.src = (path);
}