<div class="statisticContainer">
    <div class="statisticInner">
      <div class="statistic_part statistic_part1">

      </div>
      <div class="statistic_part statistic_part2">

      </div>
      <div class="statistic_part statistic_part3">

      </div>
      <div class="statistic_part statistic_part4">

      </div>
    </div>
  </div>
  <!-- end statisticContainer -->


<div class="footerTopContainer">
    <div class="footerTopInner">
      <div class="ft-left">
        <p>© 2017 Users Dashboard. All Rights Reserved.</p>
        <p>All users of our website must be at least 18 years old and agree with Terms of Use.</p>
      </div>
      <a class="bit" href="#"></a>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- end footerContainer visualhyip.com -->


  <script>
  /*<![CDATA[*/
  if ($(".slider").length) {
    $(".slider").carouFredSel({
      scroll: {
        duration: 800
      },
      direction: "up",
      auto: {
        timeoutDuration: 4000
      },
      prev: {
        button: ".prev",
        key: "left"
      },
      next: {
        button: ".next",
        key: "right"
      }
    })
  }
  (function(e, a, f) {
    var c, b = e.getElementsByTagName(a)[0];
    if (e.getElementById(f)) {
      return
    }
    c = e.createElement(a);
    c.id = f;
    b.parentNode.insertBefore(c, b)
  }(document, "script", "facebook-jssdk"));
  $(".opensxxs").click(function() {
    calcthis()
  });

  function calcthis() {
    var a = document.getElementById("money").value;
    var b = parseFloat($("#days").val());
    if (b < 1 || isNaN(b) == true) {
      b = 1
    }
    month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
    date1 = new Date();
    $("#date1").text(month[date1.getMonth()] + " " + date1.getDate() + ", " + date1.getFullYear());
    month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
    date2 = new Date();
    date2.setDate(date2.getDate() + b);
    $("#date2").text(month[date2.getMonth()] + " " + date2.getDate() + ", " + date2.getFullYear());
    if (a < 0.01) {
      document.getElementById("inpvar2").innerHTML = "N/A";
      document.getElementById("inpvar3").innerHTML = "N/A";
      document.getElementById("inpvar4").innerHTML = "N/A"
    } else {
      n = a * 0.15 / 100;
      document.getElementById("inpvar2").innerHTML = n.toFixed(8);
      p = a * 0.15 / 100 * 24;
      document.getElementById("inpvar3").innerHTML = p.toFixed(8);
      d = a * 0.15 / 100 * 24 * 7;
      document.getElementById("inpvar4").innerHTML = d.toFixed(8)
    }
  }; /*]]>*/

	  $(window).scroll(function(){
			scroll = $(window).scrollTop();
			if(scroll < 73) {
				$('.headerContainer').removeClass('fixed');
			}
			if(scroll >= 73) {
				$('.headerContainer').removeClass('fixed').addClass('fixed');
			}
		});
  </script>

{{-- @yield('js') --}}


</body>
<!-- Mirrored from crisscapitalss.com/home/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2022 10:13:35 GMT -->
</html>
