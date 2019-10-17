var mainImage = document.getElementById("mainImage");

var imageArray = [];
imageArray[0] = "../images/carousel1.jpg";
imageArray[1] = "../images/carousel2.jpg";
imageArray[2] = "../images/carousel3.jpg";

var imageIndex = 1;

function changeImage(){
    mainImage.setAttribute("src", imageArray[imageIndex]);
    imageIndex++;
    if (imageArray >= imageArray.length){
        imageIndex = 0;
       }
}

var rotateAction = setInterval(changeImage, 1000);

mainImage.onmouseover = function(){
    clearInterval(rotateAction);
}

mainImage.onmouseout = function(){
    rotateAction = setInterval(changeImage, 1000);
}