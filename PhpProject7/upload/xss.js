var page = require('webpage').create;
page.open('http://example.com', function(status) {
console.log("Status: " + status);
console.log(page.content);
phantom.exit;
});
