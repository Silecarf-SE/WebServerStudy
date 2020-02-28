var http = require('http');
var fs = require('fs');
var url = require('url');

var app = http.createServer(function(request, response) {
      var _url = request.url;
      var queryData = url.parse(_url, true).query;

      console.log(queryData);
      var pathname = url.parse(_url, true).pathname;
      /*if (_url == '/') {
        title = 'Welcome'
      }*/

      if (_url == '/favicon.ico') {
        return response.writeHead(404);
      }
      if (pathname === '/') {
        if (queryData.id === undefined) {
          fs.readFile(`./${queryData.id}`, 'utf8', function(err, description) {
            var title = 'welcome';
            var description2 = 'Hello, node.js';
            fs.readdir('./', function(error, filelist) {
              console.log(filelist);
              var list = '<ul>';
              var i = 0;
              while (i < filelist.length) {
                list = list + `<li><a href="/?id=${filelist[i]}">${filelist[i]}</li>`;
                i = i + 1;
              }
              list = list + '</ul>';
              var template = `
      <!doctype html>
      <html>
      <head>
      <title>WEB1 - ${title}</title>
      <meta charset="utf-8">
      </head>
      <body>
      <h1><a href="/">WEB</a></h1>
      ${list}
      <h2>${title}</h2>
      <p><a href="https://www.w3.org/TR/html5/" target="_blank" title="html5 speicification">Hypertext Markup Language (HTML)</a> is the standard markup language for <strong>creating <u>web</u> pages</strong> and web applications.Web browsers receive HTML documents from a web server or from local storage and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
      <img src="coding.jpg" width="100%">
      </p><p style="margin-top:45px;">
      ${description2}
      </p>
      </body>
      </html>
      `;
              response.writeHead(200);
              response.end(template);
            });
          });
        } else {
          fs.readFile(`./${queryData.id}`, 'utf8', function(err, description) {
            var title = queryData.id;
            fs.readdir('./', function(error, filelist) {
              var list = '<ul>';
              var i = 0;
              while (i < filelist.length) {
                list = list + `<li><a href="/?id=${filelist[i]}">${filelist[i]}</li>`;
                i = i + 1;
              }
              list = list + '</ul>';
              var template = `
    <!doctype html>
    <html>
    <head>
    <title>WEB1 - ${title}</title>
    <meta charset="utf-8">
    </head>
    <body>
    <h1><a href="/">WEB</a></h1>
    ${list}
    <h2>${title}</h2>
    <p><a href="https://www.w3.org/TR/html5/" target="_blank" title="html5 speicification">Hypertext Markup Language (HTML)</a> is the standard markup language for <strong>creating <u>web</u> pages</strong> and web applications.Web browsers receive HTML documents from a web server or from local storage and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
    <img src="coding.jpg" width="100%">
    </p><p style="margin-top:45px;">
    ${description}
    </p>
    </body>
    </html>
    `;
              response.writeHead(200);
              response.end(template);
            })
          });
        }
      } else {
          response.writeHead(404);
          response.end('Not Found');

        }
      });
      app.listen(2988);
