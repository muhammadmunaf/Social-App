/*  The following code is for the posts grid alignment with flexbox

var postsArray = document.getElementById("MyPosts");

console.log(postsArray.children.length)

var counter=postsArray.children.length;

while(counter>=3)
{
    counter-=3;
}

if(counter==2)
{
    postsArray.children[postsArray.children.length].setAttribute("style", "transform: translateX(-106%);")
} */

// by defualt the selection is set on posts

function selectionOfPosts()
{
    document.getElementById("posts-selection-bar").setAttribute("style","border-top: 1px solid black;");
    document.getElementById("posts-selection-bar").setAttribute("style","opacity: 1;");

    document.getElementById("saved-posts").style.display='none';
    document.getElementById("my-posts").style.display='grid';
}

function openPosts()
{
    document.getElementById("saves-selection-bar").setAttribute("style","border:0;");
    document.getElementById("saves-selection-bar").setAttribute("style","opacity: 0.7;");

    document.getElementById("posts-selection-bar").setAttribute("style","border-top: 1px solid black;");
    document.getElementById("posts-selection-bar").setAttribute("style","opacity: 1;");

    document.getElementById("saved-posts").style.display='none';
    document.getElementById("my-posts").style.display='grid';
}

function openSaves()
{
    document.getElementById("posts-selection-bar").setAttribute("style","border:0;");
    document.getElementById("posts-selection-bar").setAttribute("style","opacity: 0.7;");

    document.getElementById("saves-selection-bar").setAttribute("style","border-top: 1px solid black;");
    document.getElementById("saves-selection-bar").setAttribute("style","opacity: 1;");

    document.getElementById("my-posts").style.display='none';
    document.getElementById("saved-posts").style.display='grid';
}


var img = document.getElementById("postImage"); 
var imgWidth = img.naturalWidth;
var imgHeight = img.naturalHeight;

console.log(imgWidth, " x ", imgHeight);

if(imgWidth>=imgHeight)
{
    console.log( "Wide")
    img.style.width = "100%";
    img.style.height= "auto";

    document.getElementById("sideContainer").style.width = "55%";
    document.getElementById("sideMid").style.height = "19em";
}
else
{
    console.log( "Tall")
    img.style.height= "75vh";
    img.style.width = "auto";

    document.getElementById("sideContainer").style.width = "30%";
    document.getElementById("sideMid").style.height = "27em";
}


document.getElementById('notifications-content').style.display = "none";
function notificationsHover()
{

    //if(document.getElementById('notifications-content').style.display == "none")
    //(document.getElementById('notifications-content').style.display == "block")
    var element = document.getElementById('notifications-content');
    var temp11 = window.getComputedStyle(element).getPropertyValue("display");

    console.log(temp11);

    if(temp11 == "none")
    {
        console.log("Block");
        document.getElementById('notifications-content').style.display = "block";
        console.log(document.getElementById('notifications-content').style.display);
        //document.getElementById('notifications-content').classList.add('active');
        
    }
    else if(temp11 == "block")
    {
        //document.getElementById('notifications-content').style.display = "none";
        console.log("None");
    }
}