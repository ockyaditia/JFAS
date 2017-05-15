/**
 *
 *	Author	: Ocky Aditia Saputra
 *	NPM		: 1402012089
 *
 **/

 var imagePaths = ["images/gallery/1.jpg", "images/gallery/13.jpg", "images/gallery/11.jpg", "images/gallery/3.jpg", "images/gallery/4.jpg", "images/gallery/5.jpg"];
 var showCanvas = null;
 var showCanvasCtx = null;
 var img = document.createElement("img");
 var currentImage = 0;
 var revealTimer;
 
 window.onload = function () {
	showCanvas = document.getElementById('showCanvas');
	showCanvasCtx = showCanvas.getContext('2d');
	
	img.setAttribute('width', '600');
	img.setAttribute('height', '400');
	switchImage();
	
	setInterval(switchImage, 10000); // 10 seconds pergantian gambar
}

function switchImage() {
	img.setAttribute('src', imagePaths[currentImage++]);
	
	if (currentImage >= imagePaths.length)
		currentImage = 0;
		
	showCanvasCtx.globalAlpha = 0.1;
	revealTimer = setInterval(revealImage, 100); // 100 ms efek alpha
}

function revealImage() {
	showCanvasCtx.save();
	showCanvasCtx.drawImage(img, 0, 0, 600, 400);
	showCanvasCtx.globalAlpha += 0.1;
	
	// menjalankan sampai 10 kali dari interval 0.1 sampai 1.0 dengan increment 0.1
	if (showCanvasCtx.globalAlpha >= 1.0)
		clearInterval(revealTimer);
		
	showCanvasCtx.restore();
}