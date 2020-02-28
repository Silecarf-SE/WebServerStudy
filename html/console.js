var args = process.argv;
console.log(args[2]);
console.log('A test');
if(args[2]==='1'){
  console.log('True!!');
}else{
  console.log('False..');
}
var testFoler = './';
var fs = require('fs');

fs.readdir(testFoler,function(err,filelist){
  console.log(filelist);
})
