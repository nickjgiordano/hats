// change font size stored in cookie to match dropdown option selected
function changeFont(select) {
	var size = select.options [select.selectedIndex] .value;
	switch(size) {
		case "small":
			document.cookie = "80";
			break;
		case "medium":
			document.cookie = "100";
			break;
		case "large":
			document.cookie = "120";
			break;
	}
	setFont();
}
// change header and nav element css to font size stored in cookie
function setFont() {
	$("header")[0].style.fontSize = parseInt(document.cookie) + "%";
	$("nav")[0].style.fontSize = parseInt(document.cookie) + "%";
}