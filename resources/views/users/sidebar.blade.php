<div class="accCtn">
        <div class="accCtnLeft">
          <div class="accLeft1">
            <a class="accLeft11" href="deposit.php?come=">
              <h3>deposit</h3>
            </a>
            <a class="accLeft11 accLeft12" href="withdraw">
              <h3>withdraw</h3>
            </a>
          </div>

          <div class="accLeftBar">
            <ul class="nav nav-tabs">
              <li class="accLeftAcc"><a href="home.php?come=">Account Overview</a></li>
              <li class="accLeftAcc accLeftAct"><a href="deposit">Deposit</a></li>
              <li class="accLeftAcc accLeftHis"><a href="singleDeposit">Deposit History</a></li>
    <li class="accLeftAcc accLeftHis"><a href="earns.php?come=">Withdrawals History</a></li>
    <li class="accLeftAcc accLeftRef"><a href="refer.php?come=">Your Referrals</a></li>
              <li class="accLeftAcc accLeftSet"><a href="edit">Profile</a></li>

               <li class="accLeftAcc accLeftRef"><a href="zinc.php?come=">Mining Plan</a></li>
              <li class="accLeftAcc accLeftProm"><a href="#" onclick="alert('criscapitalss will soon rewards it customers with a bitcoin giveaway..contact admin for details.Best regards.');">Special Offer</a></li>
              <li class="accLeftAcc accLeftSet"><a href="mark.php?come=">Security Settings</a></li>

              <li class="accLeftAcc accLeftSet1"><a href="../action/main_work.php?option=logout">Logout </a></li>
              <li class="accLeftAcc accLeftSet1">
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
              </li>
            </ul>
          </div>
        </div>
