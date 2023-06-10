var AvatarID = 0;
var changeColor = null;
var changeHair = null;
var changeClothes = null;
var changeAccessory = null;

function LoadColors(name){
  var select = document.getElementById('skinStyle');
  name = name.slice(0, -4);
  name = name.replace(/-/g, " ");
  var option = document.createElement('option');
  option.value = name;
  option.text = name;

  select.appendChild(option);
}

function LoadClothes(name){
  var select = document.getElementById('clothesStyle');

  name = name.slice(0, -4);
  name = name.replace(/-/g, " ");
  var option = document.createElement('option');
  option.value = name;
  option.text = name;

  select.appendChild(option);
}

function LoadHair(name){
  var select = document.getElementById('hairStyle');

  name = name.slice(0, -4);
  name = name.replace(/-/g, " ");
  var option = document.createElement('option');
  option.value = name;
  option.text = name;

  select.appendChild(option);
}

function LoadAccessories(name){
  var select = document.getElementById('accessoriesStyle');

  name = name.slice(0, -4);
  name = name.replace(/-/g, " ");
  var option = document.createElement('option');
  option.value = name;
  option.text = name;

  select.appendChild(option);
}

function setAvatarID(n){
  AvatarID = n;
}

function ChangeColor(){
  console.log("COLOR");
  changeColor = document.getElementById("skinStyle");
  var selectedOption = changeColor.options[changeColor.selectedIndex];
  var selectedName = selectedOption.text;

  var imagePath = "../images/penguins/" + selectedName;
  imagePath = imagePath.replace(/ /g, "-");
  document.getElementById("skinImage").src = imagePath;
}

var ChangeHair = function(){

  var changeHair = document.getElementById("hairStyle");
  var selectedOption = changeHair.options[changeHair.selectedIndex];
  var selectedName = selectedOption.text;

  var imagePath = "../images/hair/" + selectedName;
  imagePath = imagePath.replace(/ /g, "-");
  document.getElementById("hairImage").src = imagePath;
}

var ChangeTorso = function(){
  var changeClothes = document.getElementById("clothesStyle");
  var selectedOption = changeClothes.options[changeClothes.selectedIndex];
  var selectedName = selectedOption.text;

  var imagePath = "../images/clothes/" + selectedName;
  imagePath = imagePath.replace(/ /g, "-");
  document.getElementById("clothesImage").src = imagePath;
}

var  ChangeAccessory = function(){
  var changeAccessory = document.getElementById("accessoriesStyle");
  var selectedOption = changeAccessory.options[changeAccessory.selectedIndex];
  var selectedName = selectedOption.text;
  console.log("test");

  var imagePath = "../images/accessories/" + selectedName;
  imagePath = imagePath.replace(/ /g, "-");
  document.getElementById("accessoriesImage").src = imagePath;
}

function RandomAvatar (){
  changeColor = document.getElementById('skinStyle');
  changeHair = document.getElementById('hairStyle');
  changeClothes = document.getElementById('clothesStyle');
  changeAccessory = document.getElementById('accessoriesStyle');

  var nColor = changeColor.options.length;
  var nHair = changeHair.options.length;
  var nClothes = changeClothes.options.length;
  var nAccessories = changeAccessory.options.length;
  var rng = 0;

  rng = Math.floor(Math.random() * nColor);

  changeColor.options[rng].selected = true;
  ChangeColor();

  rng = Math.floor(Math.random() * nClothes);

  changeClothes.options[rng].selected = true;
  ChangeTorso();

  var randomBool = Math.random() < 0.5;

  if(randomBool){
      rng = Math.floor(Math.random() * nHair);

      changeHair.options[rng].selected = true;
  } else {
      for (var i = 0; i < changeHair.options.length; i++) {
          if (changeHair.options[i].value === "ninguno") {
              changeHair.options[i].selected = true;
            break;
          }
      }
  }
  ChangeHair();


  randomBool = Math.random() < 0.5;

  if(randomBool){
      rng = Math.floor(Math.random() * nAccessories);

      changeAccessory.options[rng].selected = true;
  } else {
      for (var i = 0; i < changeAccessory.options.length; i++) {
          if (changeAccessory.options[i].value === "ninguno") {
              changeAccessory.options[i].selected = true;
            break;
          }
      }
  }
  
  ChangeAccessory();
}


function DownloadAvatar() {
  
  var container = document.getElementById('penguin');

  // Take and adjust the canvas height to the penguin image
  var skinImage = document.getElementById('skinImage');
  var height = skinImage.offsetHeight;
  var width = skinImage.offsetWidth;

  var canvas = document.createElement('canvas');
  canvas.width = width;
  canvas.height = height;
  var ctx = canvas.getContext('2d');

  // Promises to ensure all images are loaded before downloading
  var imagePromises = [];
  var images = container.getElementsByTagName('img');
  for (var i = 0; i < images.length; i++) {
    imagePromises.push(
      new Promise(function(resolve, reject) {
        var image = new Image();
        image.onload = function() {
          resolve(image);
        };
        image.onerror = function() {
          reject(new Error('Failed to load image: ' + this.src));
        };
        image.src = images[i].src;
      })
    );
  }

  // Wait for all images to load
  Promise.all(imagePromises)
    .then(function(images) {
      // Place the images on the canvas
      images.forEach(function(image) {
        ctx.drawImage(image, 0, 0);
      });

      var dataURL = canvas.toDataURL('image/png');

      var link = document.createElement('a');
      link.href = dataURL;
      link.download = 'pinguino.png';
      link.click();
    })
    .catch(function(error) {
      console.error(error);
    });
}

function loadAvatar(color, clothes, hair, accessory){

  color = color.slice(0, -4);
  color = color.replace(/-/g, " ");

  clothes = clothes.slice(0, -4);
  clothes = clothes.replace(/-/g, " ");

  hair = hair.slice(0, -4);
  hair = hair.replace(/-/g, " ");

  accessory = accessory.slice(0, -4);
  accessory = accessory.replace(/-/g, " ");

  var changeColor = document.getElementById("skinStyle");
  for (var i = 0; i < changeColor.options.length; i++) {
    if (changeColor.options[i].value === color) {
        changeColor.options[i].selected = true;
      break;
    }
  }

  var changeClothes = document.getElementById("clothesStyle");
  for (var i = 0; i < changeClothes.options.length; i++) {
    if (changeClothes.options[i].value === clothes) {
        changeClothes.options[i].selected = true;
      break;
    }
  }

  var changeHair = document.getElementById("hairStyle");
  for (var i = 0; i < changeHair.options.length; i++) {
    if (changeHair.options[i].value === hair) {
        changeHair.options[i].selected = true;
      break;
    }
  }

  var changeAccessory = document.getElementById("accessoriesStyle");
  for (var i = 0; i < changeAccessory.options.length; i++) {
    if (changeAccessory.options[i].value === accessory) {
        changeAccessory.options[i].selected = true;
      break;
    }
  }

  ChangeColor();
  ChangeTorso();
  ChangeHair();
  ChangeAccessory();
}

function SaveAvatar (){

  changeColor = document.getElementById('skinStyle');
  changeHair = document.getElementById('hairStyle');
  changeClothes = document.getElementById('clothesStyle');
  changeAccessory = document.getElementById('accessoriesStyle');

  var colorSelected = changeColor.value;
  var hairSelected = changeHair.value;
  var clothesSelected = changeClothes.value;
  var accessorySelected = changeAccessory.value;

  fetch('../php/processes/saveavatar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'colorSelected=' + encodeURIComponent(colorSelected)
          + '&hairSelected=' + encodeURIComponent(hairSelected)
          + '&clothesSelected=' + encodeURIComponent(clothesSelected)
          + '&accessorySelected=' + encodeURIComponent(accessorySelected)
          + '&AvatarID=' + encodeURIComponent(AvatarID)
  })
  .then(response => response.text())
  .then(data => {
    // Handle the response from the PHP file
    console.log(data);
  })
  .catch(error => {
    // Handle any errors that occurred during the request
    console.error('Error:', error);
  });

  window.location.href = 'dashboard.php';
}












