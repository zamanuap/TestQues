var pathname = window.location.pathname;

console.log(pathname);

if (pathname=="/")
{
document.getElementById("home").style.color = "blue";
document.getElementById("list").style.color = "black";

}
else
{
document.getElementById("home").style.color = "black";
document.getElementById("list").style.color = "blue";	
}

