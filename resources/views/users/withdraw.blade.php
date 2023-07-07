
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




<h3>Make a Withdraw:</h3>
<br>


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

  <form action="/withdraw" method="POST">
    {{ csrf_field() }}
    <label>Username</label><input type="text" value="{{ old('username') }}" class=" form-control" name="username" />
    </br>
    <label>Amount</label><input type="amount" value="{{ old('amount') }}" class=" form-control" name="amount"/>
     </br>
     <label>Wallet</label><input type="text" value="{{ old('Wallet_p') }}" class="form-control" name="Wallet_p" />
     </br>
     <input type="submit" name="o" value="Proceed"/>

  </form>




 </div>
      </div>
    </div>
  </div> <!-- end accCtnContainer -->
@include('users.footer')

