/*navbar animation*/
$(document).ready(function(){
  $(window).scroll(function() {
    if ($(window).width() > 768 && ($(document).scrollTop() > 0)) {
      $(".navbar").css({"padding":"5px 0","background-color":"rgba(0,0,0,.3)"});
    }
    else {
      $(".navbar").css({"padding":"20px 0","background-color":"transparent"});
    }
  });
});
 
/*hiding navbar menu after click on item*/
$('.nav-link').click(function() {
    $('.navbar-collapse').removeClass('in');
  }
);
 
/*auto-setting the height of img-about block*/
$(document).ready(function(){
  var blockHeight = $(".data-about").height();
    $(".img-about").height(blockHeight);
});
 
/*chart for weight goods*/
$(function () { 
  Highcharts.setOptions({
    colors: ['rgba(221,135,102,1)'],
    chart: {
        style: {
            fontFamily: 'Comfortaa',
            color: '#fff'
        }
    }
});  
  $('#weight-goods').highcharts({
        chart: {
            type: 'line',
            backgroundColor: 'transparent'
        },
        title: {
            text: 'Товары на вес',
            style: {
              fontSize: '2em',
              color: '#000'
            }
        },
        xAxis: {
            tickWidth: 0,
            labels: {
              style: {
                  fontSize: '1.5em',
                  color: '#000',
                 }
              },
            categories: ['День 1', 'День 2', 'День 3', 'День 4', 'День 5', 'День 6', 'День 7']
        },
        yAxis: {
          gridLineWidth: 1,
		      gridLineDashStyle: 'dot',
		      gridLineColor: '#000',
           title: {
                text: '',
                style: {
                  color: '#000'
                 }
            },
            labels: {
              formatter: function() {
                        return Highcharts.numberFormat(this.value, 0, '', ',')+' грн.';
                    },
              style: {
                  fontSize: '1.5em',
                  color: '#000',
                 }
              }
            },
        legend: {
            enabled: true,
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Цена за килограмм',
            lineWidth: 3,
            data: [159, 125, 95, 68, 41, 35, 26]
        }]
    });
});
 
/*chart for priced-goods*/
$(function () { 
  Highcharts.setOptions({
    colors: ['rgba(221,135,102,1)'],
    chart: {
        style: {
            fontFamily: 'Comfortaa',
            color: '#fff'
        }
    }
});  
  $('#priced-goods').highcharts({
        chart: {
            type: 'line',
            backgroundColor: 'transparent'
        },
        title: {
            text: 'Товары с установленной ценой',
            style: {
              fontSize: '2em',
              color: '#000'
            }
        },
        xAxis: {
            tickWidth: 0,
            labels: {
              style: {
                  fontSize: '1.5em',
                  color: '#000',
                 }
              },
            categories: ['День 1', 'День 2', 'День 3', 'День 4', 'День 5', 'День 6', 'День 7']
        },
        yAxis: {
          gridLineWidth: 1,
		      gridLineDashStyle: 'dot',
		      gridLineColor: '#000',
           title: {
                text: '',
                style: {
                  color: '#000'
                 }
            },
            labels: {
              formatter: function() {
                        return Highcharts.numberFormat(this.value, 0, '', ',')+'%';
                    },
              style: {
                  fontSize: '1.5em',
                  color: '#000',
                 }
              }
            },
        legend: {
            enabled: true,
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Скидка %',
            lineWidth: 3,
            data: [60, 0, 10, 20, 30, 40, 50]
        }]
    });
});
 
/*tooltips for days of week*/
 
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({trigger: "hover"}); 
});
 
/*iframe pointer-events*/
$(document).ready(function() {
    $('.maps').click(function () {
        $('.maps iframe').css("pointer-events", "auto");
    });
    
    $( ".maps" ).mouseleave(function() {
      $('.maps iframe').css("pointer-events", "none"); 
    });
 });   
 
/*maps interval slide*/
 
$(document).ready(function(){
  var deviceWidth = $(window).width();
  if (deviceWidth < 992) {
    $("#myCarousel").carousel({interval: false});
  }
  else {
    $("#myCarousel").carousel({interval: 5000});
  }
});
 
/*smooth scroll on click*/
 
$('a[href$="-sec"]').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000), 'swing';
    return false;
});
 
/*element slide animation*/
 
$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
 
      var winTop = $(window).scrollTop();
        if (pos < winTop + 700) {
          $(this).addClass("slide");
        }
    });
  }); 
