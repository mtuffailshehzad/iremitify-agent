<div id="livereq_modal" class="fade modal" role="dialog" tabindex="-1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="text-center">
          <label id="label-upload" class="modal-header-title">Go Live Request</label>
        </div>
      </div>
      <div class="modal-body">
        <div class="form-group text-center">
          <p>We will review your request and get back to you shortly. Thanks.</p>
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Got It!">Got It!</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row border-bottom">
  <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <a class="navbar-minimalize minimalize-styl-2 btn btn-small-nav "><i class="fa fa-bars"></i> </a>
      <div class="navbar-service-type-text">{{ Settings::SiteTitle() }}</div>
    </div>
    <ul class="nav navbar-top-links navbar-right">
      <li>
        <span class="m-r-sm text-muted welcome-message"> Welcome, {{Auth::user()->business_name}}</span>
      </li>
      <!-- <li>
        <a class="progress-link" href="#">Activation <span class="label label-primary">75%</span><span class="table-infobox-progress">Your progress before you can request to go live</span></a>
      </li> -->
      <li>
        <a href="support.html"><i class="fa fa-life-ring" aria-hidden="true"></i> <span class="hidden-xs">Support</span></a>
      </li>
      <li>
        <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> <span class="hidden-xs">Log out</span></a>
      </li>
    </ul>
  </nav>
</div>