
  // var testList = {
  //   "test1": "designer",
  //   "test2": "egoing"
  // };
  // document.write(testList.test1);
  // testList.test3 = "duru";
  // document.write(testList.test3);
  // testList["come together"]=" taeho";
  // document.write(testList["come together"]);
  var Links = { //묶어서 한번에 처리한다. 객체라한다.
    setColorCustom: function (color) {
      // var alist = document.querySelectorAll('a');
      // var i = 0;
      // while (i < alist.length) {
      //   console.log(alist[i]);
      //   alist[i].style.color = color;
      //   i = i + 1;
      // }
      $('a').css('color',color); // 자바스크립트를 이용해서 미리 제이쿼리가 만들어둔 함수를 처리해주는 것
    },
    setColorStyle: function (color1, color2) {
      // var target = document.querySelector('body');
      // target.style.backgroundColor = color1;
      // target.style.color = color2;
      $('body').css('color',color2);
      $('body').css('backgroundColor',color1);
    }

  }

  function nightdayHandler(self) {
    if (self.value === 'day') {
      Links.setColorStyle('coral', 'white');
      self.value = 'night';
      Links.setColorCustom('white');
    } else {
      Links.setColorStyle('white', 'black');
      self.value = 'day';
      Links.setColorCustom('black');
    }
  }
