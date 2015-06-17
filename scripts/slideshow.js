var myImage = document.getElementById('myPhoto');
var imageArray=["images/imgPoc.jpg","images/arr1.jpg", "images/novosti.jpg", "images/arr2.jpg", "images/arr3.jpg"];
var imageIndex = 0;

function change ()
{
	myPhoto.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;

	if(imageIndex >= imageArray.length)
	{
		imageIndex = 0;
	}
}

var interval = setInterval(change, 2500);

myPhoto.onclick = function()
{
	clearInterval(interval);
}