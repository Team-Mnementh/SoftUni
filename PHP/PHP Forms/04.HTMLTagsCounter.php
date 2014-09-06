<!DOCTYPE html>
<html>
<head>
	<title>HTML Tag Counter</title>
</head>
<body>

<form method="post">
	<label for="input">Enter HTML tags:</label><br />
	<input type="text" id="input" name="tags" />
	<input type="submit" value="Submit" />
</form>

<?php
session_start();
if (!$_SESSION) {
	$_SESSION['counter'] = 0;
}
$allTags = array("a", "abbr", "address", "area", "article", "aside", "audio", "b", "base", "bdi", "bdo", "blockquote", "body", "br", "button", "canvas", "caption",
	"cite", "code", "col", "colgroup", "command", "datalist", "dd", "del", "details", "dfn", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure",
	"footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label",
	"legend", "li", "link", "map", "mark", "menu", "meta", "meter", "nav", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress",
	"q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td",
	"textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "u", "ul", "var", "video", "wbr");

if (isset($_POST['tags']) && !empty($_POST['tags'])) {
	$key = in_array($_POST['tags'], $allTags);
	if ($key === true) {
		echo '<h3>Valid HTML tag </h3><br />';
		$_SESSION['counter'] += 1;
		echo 'Score: '.$_SESSION['counter'];
	} else {
		echo '<h3>Invalid HTML tag</h3><br />';
		echo 'Score: '.$_SESSION['counter'];
	}

}

?>

</body>
</html>