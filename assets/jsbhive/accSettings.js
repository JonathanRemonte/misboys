var modal = document.getElementById("myModal1");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption1");
var navLinks = document.querySelectorAll(".nesttabs .nav-link");

img.onclick = function(event) {
  event.stopPropagation(); 
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;

  // Hide the navigation links within the modal
  navLinks.forEach(function(link) {
    link.style.display = "none";
  });
}

var span = document.getElementsByClassName("close1")[0];

span.onclick = function() { 
  modal.style.display = "none";

  // Show the navigation links within the modal
  navLinks.forEach(function(link) {
    link.style.display = "block";
  });
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

    // Show the navigation links within the modal
    navLinks.forEach(function(link) {
      link.style.display = "block";
    });
  }
}

var loadFile = function(event) {
  var image = document.getElementById("img01");
  image.src = URL.createObjectURL(event.target.files[0]);
};


var saveButton = document.querySelector('.custom-btn');
saveButton.addEventListener('click', function(event) {
    event.preventDefault();
    var image = document.getElementById("img01");
    var canvas = document.createElement("canvas");
    canvas.width = image.naturalWidth;
    canvas.height = image.naturalHeight;
    var context = canvas.getContext("2d");
    context.drawImage(image, 0, 0);
    var imageData = canvas.toDataURL("image/png");

    var xhr = new XMLHttpRequest();
    xhr.open('POST', uploadProfileURL); // Use the dynamic URL variable
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                alert(response.message); // Show success message
                // Update the image source with the uploaded image
                image.src = imageData;
            } else {
                alert(response.message); // Show error message
            }
        }
    };
    xhr.send('image=' + encodeURIComponent(imageData));
});
