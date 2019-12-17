$(document).ready(function () {
  $(".slick-slider").slick({
    nextArrow: '<button type="button" class="slick-next"><i class="icon icon-arrow-right"></i></button>',
    prevArrow: '<button type="button" class="slick-prev"><i class="icon icon-arrow-left"></i></button>',
  });

  var myDatepicker = $('.datepicker-here').datepicker({
    inline: true,
    range: true,
    multipleDates: true,
    onSelect: function (formattedDate, date, inst) {

    }
  }).data('datepicker');
  var dateFirst = new Date();
  dateFirst.setDate(dateFirst.getDate())
  var dateLast = new Date();
  dateLast.setDate(dateLast.getDate() + 7);

  myDatepicker.selectDate([dateFirst, dateLast]);

  new Parallax(document.getElementById('scene'));
});



