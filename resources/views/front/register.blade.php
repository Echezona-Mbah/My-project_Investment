


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from expertminersworld.com/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2022 22:04:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <base   />
  <meta charset="utf-8" />
  <title>EXPERTMINERSWORLD</title>
   <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
  <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/input.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/modal.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/calc.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.compatibility.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
    <div class="none">
        <div id="calc">
            <div class="modal-title"><h2>Calculate <span>profit</span></h2></div>
            <div>
                <ul class="calc-list ">
                  <li >
                      <label>Amount:</label>

                        <input type="text" class='amount' style='width:150px; text-align:center;'  value='0.001' />

                      <div class="clearfix"></div>
                      <div>
                        <div class="selector">
                        <div class="p_line"></div>
                        <div id="drag" class="resize drag ui-widget-content ui-draggable" style="left: 0;">

                        </div>
                      </div>
                      </div>
                  </li>

                  <li >
                        <label>Reinvest (%):</label>
                        <input type="text" class='compound' readonly="" style='width:100px; text-align:center;'   value='0' />
                        <div class="clearfix"></div>
                        <div>
                          <div class="selector">
                          <div class="p_line"></div>
                          <div id="comp" class="resize comp ui-widget-content ui-draggable" style="left: 0;">

                          </div>
                        </div>
                      </div>
                  </li>

                  <li >
                        <label>Days count:</label>
                        <input type="text" class='days_input' readeonly="" style='width:100px; text-align:center;'   value='1' />
                        <div class="clearfix"></div>
                        <div>
                          <div class="selector">
                          <div class="p_line"></div>
                          <div id="days" class="resize days ui-widget-content ui-draggable" style="left: 0;">

                          </div>
                        </div>
                      </div>
                  </li>

                  <input type="hidden" class='plans_select' value='1'>

                  <li class='right profit-block-1'>
                      <label>Profit per day:</label>
                      <input class="readonly profit" type="text" value='0.00005Ƀ' style='width:100px; text-align:center;' readonly />
                  </li>
                  <li class='right profit-block'>
                      <label>Total:</label>
                      <input class="readonly total" type="text" value='0.00105Ƀ' style='width:150px; text-align:center;' readonly />
                  </li>
                </ul>
            </div>
        </div>
                  <div id="login">
            <div class="modal-title"><h2>Login<span> to account</span></h2></div>
            <div>

<script language=javascript>
function checklogin() {
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  return true;
}
</script>


            <div class="clearfix"></div>
            <br/>
            <form class='form-modal' method=post name=loginform onsubmit="return checklogin()"><input type="hidden" name="form_id" value="16543802267788"><input type="hidden" name="form_token" value="0faabe888ae440e2357db094c22e5ab8">

            <input type=hidden name=a value='do_login'>
              <input type=hidden name=follow value=''>
              <div class="field">
                <label>
                  <span>Username</span>
                  <input type=text name=username class=inpts size=15>
                </label>
              </div>
              <div class="field">
                <label>
                  <span>Password</span>
                  <input type=password name=password class=inpts size=15>
                  <div class="clearfix"></div>
                  <a href="index8083.html?a=forgot_password" class='recovery-link'>Forgot password?</a>
                </label>
              </div>
                            <center>
                <div class="submit">
                  <input type=submit value="Login" > <i></i></div>
              </center>
            </form>


            </div>
          </div>
                <div id="cert">
            <div class="modal-title"><h2>Certificate <span>image</span></h2></div>
            <img src="images/certificate.png" style='width:450px;' alt="">
        </div>
    </div>
<div class="wrapper">
  <section class="header  header-shot
    ">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logo"><a href="index.html"></a></div>
          </div>

          <div class="col-md-9">



            <div class="menu">
              <ul>
                <li class=""><a href="indexbc14.html?a=home">Home</a></li>
                <li class="act"><a href="index3898.html?a=cust&amp;page=about" >About us</a></li>
                <li class=""><a href="index9d6a.html?a=cust&amp;page=investment">Investment</a></li>
                <li class=""><a href="index6c0d.html?a=cust&amp;page=partners">For partners</a></li>
                <li class=""><a href="index38cd.html?a=faq">Faq</a></li>
                <li class=""><a href="index15a0.html?a=support">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header-middle1 " style='display:none; '>
      <div class="container">
        <div class="row">

            <ul class="social">
              <li>
                  <br><br><br>
                <a class='mail' >
                  <small>email adress:</small>
                  <span style='font-size:17px;'> <span>support@EXPERTMINERSWORLD.com</span></span>
                </a>
              </li>
             <li>         <div id="google_translate_element"></div>

                                        <script type="text/javascript">
                                            function googleTranslateElementInit() {
                                                new google.translate.TranslateElement({
                                                    pageLanguage: 'en',
                                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                                }, 'google_translate_element');
                                            }

                                        </script>

                                        <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script></li>
            </ul>
            <div class="clearfix"></div>
           <div style='padding-right:80px; float:right;'>
                                                                <a  href="indexcca3.html?a=signup" class="btn" >Sign up <i class="icon-reg"></i>
                    <span class='green'></span></a>

  <a class="btn btn-1 box-modal" data-width='550' rel="login"><span></span>Login <i class="icon-sign"></i></a>
        </div>
      </div>
    </div>
  </section>




<section class="main-pages">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h2 style='padding-left:45px;'>Sign <span>up</span></h2>
        </div>
        <div class="clearfix"></div>
        <br/>
        <br/>
        <div class="col-md-10 col-md-offset-1">
          <div class="box-form">
            <div>


       @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif
<form action="/registers" method='post' >
@csrf
<div class="field">
                  <label>
                    <span>Your Full Name</span>
                    <input type=text name=name value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control" class=inpts size=30>
                  </label>
                   @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>



<div class="field">
                  <label>
                    <span>Your Username</span>
                    <input type=text name=username value="{{ old('username') }}" class="@error('username') is-invalid @enderror form-control" class=inpts size=30>
                  </label>
                   @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

             <input type="hidden" name="ref"  value="{{request()->get('ref')}}"/>

<div class="field">
                  <label>
                    <span>Define Password</span>
                    <input type=password name=password value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control" class=inpts size=30>
                  </label>
                   @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="field">
                  <label>
                    <span>Retype Password</span>
                    <input type=password name="password_confirmation"  class="@error('password_confirmation') is-invalid @enderror form-control" class=inpts size=30>
                  </label>
                   @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

<div class="field">
                    <label>
                      <span>Your E-mail Address</span>
                      <input type=text name=email value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control" class=inpts size=30>
                    </label>
                     @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  </div>


<div class="filed-checkbox">
                      <label>
                        <input type=checkbox name=agree value=1  >
                        I agree with <a href="indexa972.html?a=rules">Terms and conditions</a>
                      </label>
                    </div>
<div class="none">
                                          </div>
                  <center>
                    <div class="submit" style='margin-top:20px'>
                      <input type=submit value="Register" > <i></i><span class='green'></span>
                    </div>
                  </center>

</form>
</div>
          </div>

        </div>
      </div>
    </div>
</section>


<section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logo-footer">
              <a href="indexbc14.html?a=home"></a>
            </div>
          </div>
          <div class="col-md-9">

            <div class="footer-menu">
                <ul>
                  <li><a href="indexbc14.html?a=home">Home</a></li>
                  <li><a href="index3898.html?a=cust&amp;page=about">About us</a></li>

                  <li><a href="index38cd.html?a=faq">Faq</a></li>
                  <li><a href="index15a0.html?a=support">Contacts</a></li>
                  <li><a href="indexa972.html?a=rules"> Terms and Conditions </a></li>
                   <li><a href="index6c0d.html?a=cust&amp;page=partners"> For partners </a></li>
                </ul>
              </div>
              <div class="clearfix"></div>
              <div class="copyright">
               © 2021 EXPERTMINERSWORLD - All Rights Reserved.
              </div>
          </div>
        </div>
      </div>
  </section>
</div>
</body>

<!-- Mirrored from expertminersworld.com/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2022 22:04:48 GMT -->
</html>

