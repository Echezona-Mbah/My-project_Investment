
@include('users.head')
@include('users.sidebar')
        <div class="accCtnRight">




{{-- <script language="javascript"><!--
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
--></script> --}}




<h3>Make a Deposit:</h3>
<br>


      <p>Order Information</p>


      <form action="" method="POST" id="makepayment">
        @csrf
        <div class="info"></div>
        <div class="form-group">
            <label>Select SubAccoun</label>
            <select class="form-control form-control" style="width:100%" name="subaccount"  >
                <option>Select SubAccoun</option>
                @foreach ($users as $subaccount)
                <option value="{{$subaccount->subaccount_code}}">{{$subaccount->name}}</option>

                @endforeach
            </select>
        </div>
        </br>
        <label>Amount</label><input type="text" value="" name="amount"/>
     </br>
         <input type="submit" name="o" value="Make payment"/>

      </form>


    </br>

 </div>
      </div>
    </div>
  </div> <!-- end accCtnContainer -->
@include('users.footer')
{{-- @section('js') --}}

<script>

    let varifyPayment = (reference) =>{
        $.ajax({
            url:"{{ URL::to("varifyPayment") }}",
            method:"post",
            data:{
                _token:'{{ csrf_token() }}',
                reference: reference
            },

            success: (response) =>{
                if(response.status){
                    $('.info').html(`
                    <div class="alert alert-info"> ${response.message}</div>
                    `);
                } else{
                    $('.info').html(`
                    <div class="alert alert-info"> ${response.danger} ${response.statusText}</div>
                    `);
                }
            }
        })

    }


    $(document).ready(function(){
       $('#makepayment').submit(function(e){
        e.preventDefault();
        var form = $(this);
        var url ="{{ URL::current() }}";
        $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function(data){
            console.log(data);

            if(data.status){
                window.open(data.url, '_blank');
                var reference = data.reference;
                $('.info').html(`
                    <div class="alert alert-danger"> wait for u </div>
                    `);
               setInterval(() => {
                varifyPayment(reference);
               }, 3000);

            }else{
                alert(data.message);
            }
          }
        });
       });
    });

</script>

{{-- @endsection --}}

