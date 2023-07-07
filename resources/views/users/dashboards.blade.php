<?php use \App\Http\Controllers\User\Dashboard;?>
{{ Dashboard::btcc($userId); }}
{{-- @php

use App\Http\Controllers\UserControllerName;
$var = Dashborad::Dashborad();

@endphp --}}

@include('users.head')
@include('users.sidebar')

        <div class="accCtnRight">
		 <div class="alert alert-success" role="alert"></div>
 <div class="accRight1" style = "color:#fff">
            <p style = "color:#fff">Active Deposit:</p>
            <p style = "color:#fff"><span>${{number_format( Dashboard::totalDeposit());}}<b></b></span></p>
            <div class="make-depost">
              <a href="deposit">make a deposit</a>
            </div>
          </div>
                    <div class="accRight1 accRight2">
            <p style = "color:#fff">Account balance:</p>
            <p style = "color:#fff"><span>${{number_format( Dashboard::totalDepositMake());}}<b></b></span></p>
            <div class="with-funds">
              <a href="withdraw">Withdraw Funds</a>
            </div>
          </div>
                    <div class="accRight1 accRight3 clear">
            <p>Interest:</p>
            <p><span>${{number_format( Dashboard::totalDeposit());}}<b></b></span></p>
          </div>
          <div class="accRight1 accRight3 accRight4">
            <p>Balance(BTC):</p>
                        <p><span><b></b></span></p>
          </div>
          <div class="accRight1 accRight3">
            <p>Plan:</p>
            <p><span><b></b></span></p>
          </div>
          <div class="accRight1 accRight3 clear">
            <p>Account Status:</p>
            <p><span><b></b></span></p>
          </div>
          <div class="accRight1 accRight3 accRight4">
                          <p>Withdrew Total:</p>
            <p><span>$<b></b></span></p>
          </div>
          <div class="accRight1 accRight3">
            <p>Pending  Withdrawal:</p>
                        <p><span> $<b></b></span></p>
          </div>
           <div class="accRight1 accRight3 clear">
            <p>Total Earned:$</p>
            <p><span><b></b></span></p>

          </div>
           <div class="accRight1 accRight3 clear">
            <p>Phone:</p>
            <p><span><b></b></span></p>

          </div>
            <div class="accRight1 accRight3 accRight4">
                          <p>Refferal:$</p>
            <p><span><b></b></span></p>
          </div>



          <script>

function myFunction(e) {
var copyText = e.target.previousElementSibling;
copyText.select();
copyText.setSelectionRange(0, 99999)
document.execCommand("copy");
alert("Copied the text: " + copyText.value);
}
</script>

<div>
  <input type="text" value="https://everledgerminers.com/register.php?Ref= " class="myInput">
  <button onclick="myFunction(event)">Referral Link</button>
</div>



 </div>
      </div>
    </div>
  </div> <!-- end accCtnContainer -->
@include('users.footer')
