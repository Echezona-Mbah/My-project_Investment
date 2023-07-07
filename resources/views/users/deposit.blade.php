
@include('users.head')
@include('users.sidebar')
        <div class="accCtnRight">




<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");




}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--></script>




<h3>Make a Deposit:</h3>
<br>
{{-- <iframe frameBorder="0" scrolling="no" allowtransparency="0" src="https://bitcoinaverage.com/en/widgets?widgetType=price&amp;bgcolor=#FFFFFF&bwidth=1&bcolor=#CCCCCC&cstyle=round&fsize=16px&ffamily=arial&fcolor=#000000&bgTransparent=solid&chartStyle=undefined&lastUpdateTime=block&currency0=USD&currency1=EUR&currency2=GBP&currency3=INR&total=4" style="width:250px; height:275px; overflow:hidden; background-color:transparent !important;"></iframe>

<iframe frameBorder="0" scrolling="no" allowtransparency="0" src="https://bitcoinaverage.com/en/widgets?widgetType=conversion&amp;bgcolor=#FFFFFF&bwidth=1&bcolor=#CCCCCC&cstyle=round&fsize=16px&ffamily=arial&fcolor=#000000&bgTransparent=solid&chartStyle=none&lastUpdateTime=block&currency0=USD&currency1=EUR&currency2=GBP&currency3=INR&total=4" style="width:450px; height:275px; overflow:hidden; background-color:transparent !important;"></iframe>
<script>
                     function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the wallet address: " + copyText.value);
} --}}
       </script>


      <p>Order Information</p>
      @if(Session::has('error'))
      <div class="alert alert-danger text-center">
          {{Session::get('error')}}
      </div>
  @endif

      @if(Session::has('success'))
      <div class="alert alert-success text-center">
          {{Session::get('success')}}
      </div>
  @endif

  <form action="/deposit" method="POST">
    @csrf
    <label>Username</label><input type="text" value="{{ old('username') }}" class="@error('username') is-invalid @enderror form-control" name="username" />
    </br>
    <label>Amount</label><input type="amount" value="{{ old('amount') }}" class="@error('amount') is-invalid @enderror form-control" name="amount"/>
     </br>
    <div class="form-group">
                              <label>Select plan</label>
                              <select class="form-control form-control-sm" value="{{ old('plan') }}" class="@error('plan') is-invalid @enderror form-control" style="width:100%" name="plan" >

                                  <option></option>
                                  <option>Beginners Plan</option>
                                  <option>Advanced Plan</option>
                                  <option>Promotion Plan</option>
                                  <option>Professional Plan</option>
                              </select>
                          </div>


     </br>

     <input type="submit" name="o" value="Proceed"/>

  </form>


      {{-- <form action="/deposit" method="POST">
        @csrf
        <label>business_name</label><input type="text" value="" name="business_name" />
        </br>
        <label>Email</label><input type="email" value="" name="email" />
    </br>
        <label>account_number</label><input type="text" value="" name="account_number"/>
     </br>
        <label>percentage_charge</label><input type="text" value="" name="percentage_charge"/>
    </br>
        <div class="form-group">
            <label >bank_code</label>
         <select name="bank_code" id="" class="form-control">
            <option value="">Select bank</option>
            <option value="120001">9mobile 9Payment Service Bank</option>
            <option value="801">Abbey Mortgage Bank</option>
            <option value="51204">Above Only MFB</option>
            <option value="51312">Abulesoro MFB</option>
            <option value="044">Access Bank</option>
            <option value="063">Access Bank (Diamond)</option>
            <option value="602">Accion Microfinance Bank</option>
            <option value="50036">Ahmadu Bello University Microfinance Bank</option>
            <option value="120004">Airtel Smartcash PSB</option>
            <option value="51336">AKU Microfinance Bank</option>
            <option value="035A">ALAT by WEMA</option>
            <option value="50926">Amju Unique MFB</option>
            <option value="51341">AMPERSAND MICROFINANCE BANK</option>
            <option value="50083">Aramoko MFB</option>
            <option value="401">ASO Savings and Loans</option>
            <option value="MFB50094">Astrapolaris MFB LTD</option>
            <option value="51229">Bainescredit MFB</option>
            <option value="50117">Banc Corp Microfinance Bank</option>
            <option value="50931">Bowen Microfinance Bank</option>
            <option value="FC40163">Branch International Financial Services Limited</option>
            <option value="565">Carbon</option><option value="865">CASHCONNECT MFB</option>
            <option value="50823">CEMCS Microfinance Bank</option>
            <option value="50171">Chanelle Microfinance Bank Limited</option>
            <option value="023">Citibank Nigeria</option>
            <option value="50910">Consumer Microfinance Bank</option>
            <option value="50204">Corestep MFB</option>
            <option value="559">Coronation Merchant Bank</option>
            <option value="FC40128">County Finance Limited</option>
            <option value="51297">Crescent MFB</option>
            <option value="50162">Dot Microfinance Bank</option>
            <option value="050">Ecobank Nigeria</option>
            <option value="50263">Ekimogun MFB</option>
            <option value="098">Ekondo Microfinance Bank</option>
            <option value="50126">Eyowo</option>
            <option value="51318">Fairmoney Microfinance Bank</option>
            <option value="070">Fidelity Bank</option>
            <option value="51314">Firmus MFB</option>
            <option value="011">First Bank of Nigeria</option>
            <option value="214">First City Monument Bank</option>
            <option value="107">FirstTrust Mortgage Bank Nigeria</option>
            <option value="50315">FLOURISH MFB</option>
            <option value="501">FSDH Merchant Bank Limited</option>
            <option value="812">Gateway Mortgage Bank LTD</option>
            <option value="00103">Globus Bank</option>
            <option value="100022">GoMoney</option>
            <option value="50739">Goodnews Microfinance Bank</option>
            <option value="562">Greenwich Merchant Bank</option>
            <option value="058">Guaranty Trust Bank</option>
            <option value="51251">Hackman Microfinance Bank</option>
            <option value="50383">Hasal Microfinance Bank</option>
            <option value="030">Heritage Bank</option>
            <option value="120002">HopePSB</option>
            <option value="51244">Ibile Microfinance Bank</option>
            <option value="50439">Ikoyi Osun MFB</option>
            <option value="50442">Ilaro Poly Microfinance Bank</option>
            <option value="50457">Infinity MFB</option>
            <option value="301">Jaiz Bank</option>
            <option value="50502">Kadpoly MFB</option>
            <option value="082">Keystone Bank</option>
            <option value="50200">Kredi Money MFB LTD</option>
            <option value="50211">Kuda Bank</option>
            <option value="90052">Lagos Building Investment Company Plc.</option>
            <option value="50549">Links MFB</option>
            <option value="031">Living Trust Mortgage Bank</option>
            <option value="303">Lotus Bank</option>
            <option value="50563">Mayfair MFB</option>
            <option value="50304">Mint MFB</option>
            <option value="50515">Moniepoint MFB</option>
            <option value="120003">MTN Momo PSB</option>
            <option value="00107">Optimus Bank Limited</option>
            <option value="100002">Paga</option>
            <option value="999991">PalmPay</option>
            <option value="104">Parallex Bank</option>
            <option value="311">Parkway - ReadyCash</option>
            <option value="999992">Paycom</option>
            <option value="50743">Peace Microfinance Bank</option>
            <option value="51146">Personal Trust MFB</option>
            <option value="50746">Petra Mircofinance Bank Plc</option>
            <option value="076">Polaris Bank</option>
            <option value="50864">Polyunwana MFB</option>
            <option value="105">PremiumTrust Bank</option>
            <option value="101">Providus Bank</option>
            <option value="51293">QuickFund MFB</option>
            <option value="502">Rand Merchant Bank</option>
            <option value="90067">Refuge Mortgage Bank</option>
            <option value="51286">Rigo Microfinance Bank Limited</option>
            <option value="50767">ROCKSHIELD MICROFINANCE BANK</option>
            <option value="125">Rubies MFB</option>
            <option value="51113">Safe Haven MFB</option>
            <option value="951113">Safe Haven Microfinance Bank Limited</option>
            <option value="50582">Shield MFB</option>
            <option value="51062">Solid Allianze MFB</option>
            <option value="50800">Solid Rock MFB</option>
            <option value="51310">Sparkle Microfinance Bank</option>
            <option value="221">Stanbic IBTC Bank</option>
            <option value="068">Standard Chartered Bank</option>
            <option value="51253">Stellas MFB</option>
            <option value="232">Sterling Bank</option>
            <option value="100">Suntrust Bank</option>
            <option value="50968">Supreme MFB</option>
            <option value="302">TAJ Bank</option>
            <option value="090560">Tanadi Microfinance Bank</option>
            <option value="51269">Tangerine Money</option>
            <option value="51211">TCF MFB</option>
            <option value="102">Titan Bank</option>
            <option value="100039">Titan Paystack</option>
            <option value="50840">U&amp;C Microfinance Bank Ltd (U AND C MFB)</option>
            <option value="MFB51322">Uhuru MFB</option>
            <option value="50870">Unaab Microfinance Bank Limited</option>
            <option value="50871">Unical MFB</option>
            <option value="51316">Unilag Microfinance Bank</option>
            <option value="032">Union Bank of Nigeria</option>
            <option value="033">United Bank For Africa</option>
            <option value="215">Unity Bank</option>
            <option value="566">VFD Microfinance Bank Limited</option>
            <option value="51355">Waya Microfinance Bank</option>
            <option value="035">Wema Bank</option>
            <option value="057">Zenith Bank</option>
            <option value="057">Zenith Bank</option>
        </select>
    </div>
         <input type="submit" name="o" value="Proceed"/>

      </form> --}}

 {{-- <form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack(event)"> Pay </button>
  </div>
</form> --}}

<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>





{{-- <script>

let paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_d20e12fd2893f4fd2845e84591ae4bac21d2be0e', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let reference = response.reference;
      //  console.log(response);

    // callback: function(response){
  $.ajax({
    type: "GET",
    url: "{{URL::to('verify')}}/"+ reference,
    success: function (response) {
      console.log(response);
      //  If(response[0].status == true){
      //       $('form').prepend(`
      //       <h2>${response[0].massage}</h2>
      //       `);
      //   }
      //   elseif (response[0].status != true)
      //   {
      //         $('form').prepend(`
      //         <h2>fail to verfy payment</h2>
      //       `);

      //   }

        switch(response[0].status == true){
        case  true:
              $('form').prepend(`
                    <h2>${response[0].message}</h2>
                    `);
              break;
        case response[0].status == false:
              $('form').prepend(`
                      <h2>fail to verfy payment</h2>
                    `);
              break;
 }

    }
  });
// }


    }
  });

  handler.openIframe();
}

</script> --}}
    </br>

 </div>
      </div>
    </div>
  </div> <!-- end accCtnContainer -->
@include('users.footer')

