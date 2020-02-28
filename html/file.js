var fs = require('fs');
fs.readFile('sample.txt','utf8',function(drr,data){

  console.log(data);
});
