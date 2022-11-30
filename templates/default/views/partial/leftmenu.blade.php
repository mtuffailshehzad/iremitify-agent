@php
	$UserLeftMenus		=   Cache::get(Session::get('user_id').'_left_menu');
@endphp
<div class="page-sidebar-wrapper">
    <nav class="page-sidebar navbar-default navbar-static-side skin-1" role="navigation">
      <div class="sidebar-collapse">
        <ul id="side-menu" class="nav metismenu" style="opacity: 0.9888;">
          <li class="nav-header">
            <div class="dropdown profile-element">
              <center>
                <a href="#"><img src="{{ Settings::AssetsUrl('assets/img/tpn-logo-white.png') }}" width="160" alt=""></a>
              </center>
              <br>
              <table>
                <tbody>
                  <tr>
                    <td style="padding-left: 20px">
                        <span class="clear">
                          <span class="text-muted text-xs block"><strong>IP :</strong>206.84.142.63</span>
                          <span class="text-muted text-xs block">Friday, 15 April 2022 08:41 AM (GMT)</span>
                        </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="logo-element">
              <img src="{{ Settings::AssetsUrl('assets/img/logo_16x21.png') }}" alt="">
            </div>
          </li>
          {!! Utils::getLeftMenu() !!}
        </ul>
      </div>
    </nav>
</div>