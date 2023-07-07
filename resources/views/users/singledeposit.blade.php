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




    <h3>Earnings:</h3>
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
         <center><p>    Deposit HISTORY</p></center>

       <form action="#" method="POST">

                                        <style type="text/css">
                        th{
                          padding-right: 15px;
    }
                          </style>

                                           <table width="700px" border="1px">

                        <tr>
                        <th>S/N</th>
                        <th>Username</th>
                        <th>Amount</th>
                         <th>Active Plan</th>
                         <th>status</th>
                         <th>Day counter</th>
                        <th>Date</th>
    </tr>
    @foreach ($singleDs as $singleDss)
                                        <tr>
                                            <td>{{$singleDss->id}}</td>
                                            <td>{{$singleDss->username}}</td>
                                            <td>${{$singleDss->amount}}</td>
                                            <td>{{$singleDss->plan}}</td>
                                            <td>{{$singleDss->day_counter}}</td>
                                            <td>{{$singleDss->status}}</td>
                                        </tr>
                                        @endforeach

    </table>
       </br></br>


     </div>
          </div>
        </div>
      </div> <!-- end accCtnContainer -->


  @include('users.footer')
