(function($) {
  'use strict';
  var allowtodisallow;

 var drake = dragula([document.getElementById("disallowed-pages"), document.getElementById("page-one"), document.getElementById("page-two"), document.getElementById("page-three"), document.getElementById("page-four"), document.getElementById("page-five"), document.getElementById("page-six"), document.getElementById("page-seven"), document.getElementById("page-eight"), document.getElementById("page-nine"), document.getElementById("page-ten")] ,{
    accepts: function (el, target, source, sibling) {
      if ($(target).hasClass('filled')) {
        console.log('already filled');
        return false;
      }
      return true;
      },
    })
    .on('drop', function(el, target, source, sibling) {
      allowtodisallow = $(el).find('.form-control');
      var pageorder = [].slice.call(el.parentNode.childNodes).findIndex((item) => el === item);
        var targetid = $(target).attr("id");
        var sourceid = $(source).attr("id");
        if (targetid == "page-one") {
          allowtodisallow.val("1")
          $('#' + targetid).addClass('filled');
          $('#container-2').show();
        }
        if (targetid == "page-two") {
          allowtodisallow.val("2")
          $('#' + targetid).addClass('filled');
          $('#container-3').show();
        }
        if (targetid == "page-three") {
          allowtodisallow.val("3")
          $('#' + targetid).addClass('filled');
          $('#container-4').show();
        }
        if (targetid == "page-four") {
          allowtodisallow.val("4")
          $('#' + targetid).addClass('filled');
          $('#container-5').show();
        }
        if (targetid == "page-five") {
          allowtodisallow.val("5")
          $('#' + targetid).addClass('filled');
          $('#container-6').show();
        }
        if (targetid == "page-six") {
          allowtodisallow.val("6")
          $('#' + targetid).addClass('filled');
          $('#container-7').show();
        }
        if (targetid == "page-seven") {
          allowtodisallow.val("7")
          $('#' + targetid).addClass('filled');
          $('#container-8').show();
        }
        if (targetid == "page-eight") {
          allowtodisallow.val("8")
          $('#' + targetid).addClass('filled');
          $('#container-9').show();
        }
        if (targetid == "page-nine") {
          allowtodisallow.val("9")
          $('#' + targetid).addClass('filled');
          $('#container-10').show();
        }
        if (targetid == "page-ten") {
          allowtodisallow.val("10")
          $('#' + targetid).addClass('filled');
        }
        if (targetid == "disallowed-pages") {
          allowtodisallow.val("0")
          $('#' + sourceid).removeClass('filled');
        }
    })
})(jQuery);