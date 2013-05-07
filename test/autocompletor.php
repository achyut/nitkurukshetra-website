<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>jQuery UI Autocomplete - Multiple, remote</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<style>
.ui-autocomplete-loading {
background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat;
}
</style>
<script>
$(function() {
function split( val ) {
return val.split( /,\s*/ );
}
function extractLast( term ) {
return split( term ).pop();
}
$( "#birds" )
// don't navigate away from the field on tab when selecting an item
.bind( "keydown", function( event ) {
if ( event.keyCode === $.ui.keyCode.TAB &&
$( this ).data( "ui-autocomplete" ).menu.active ) {
event.preventDefault();
}
})
.autocomplete({
source: function( request, response ) {
$.getJSON( "birds.json", {
term: extractLast( request.term )
}, response );
},
search: function() {
// custom minLength
var term = extractLast( this.value );
if ( term.length < 2 ) {
return false;
}
},
focus: function() {
// prevent value inserted on focus
return false;
},
select: function( event, ui ) {
var terms = split( this.value );
// remove the current input
terms.pop();
// add the selected item
terms.push( ui.item.value );
// add placeholder to get the comma-and-space at the end
terms.push( "" );
this.value = terms.join( ", " );
return false;
}
});
});
</script>
</head>
<body>
<div class="ui-widget">
<label for="birds">Birds: </label>
<input id="birds" size="50" />
</div>
</body>
</html>
