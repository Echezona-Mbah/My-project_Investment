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




<h3>User Profile :</h3>
<br>
<iframe frameBorder="0" scrolling="no" allowtransparency="0" src="https://bitcoinaverage.com/en/widgets?widgetType=price&amp;bgcolor=#FFFFFF&bwidth=1&bcolor=#CCCCCC&cstyle=round&fsize=16px&ffamily=arial&fcolor=#000000&bgTransparent=solid&chartStyle=undefined&lastUpdateTime=block&currency0=USD&currency1=EUR&currency2=GBP&currency3=INR&total=4" style="width:250px; height:275px; overflow:hidden; background-color:transparent !important;"></iframe>

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
}
       </script>
       </br>
            <p>Edit Account</p>
            @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif
    <form  action="/update/{{ $edit->id }}" method="post" onsubmit="return checkform()" name="editform">
        @method('PUT')
        @csrf
<table width="100%" border="0" cellpadding="4" cellspacing="4">
<tbody><tr>
 <td>Full Name:</td>
 <td>
 <input type="text" name="name" value="{{$edit->name}}" size="30">
 </td>
 </tr>
<tr>
 <td>Your Username:</td>
 <td><input type="text" name="username" value="{{$edit->username}}"  size="30">
</td></tr>
<input type="hidden" name="come" value="" />

<tr>
 <td>Your E-mail address:</td>
 <td><input type="text" name="email" value="{{$edit->email}} " size="30"></td>
</tr>
<tr>
 <td>Your Number:</td>
 <td><input type="text"  size="30" name="number" value=""></td>
</tr>


<tr>
 <td>&nbsp;</td>
 <td><input type="submit" value="Change Account data"  name="yy" class="sbmt"></td>
</tr></tbody></table>
</form>

 </div>
      </div>
    </div>
@include('users.footer')

