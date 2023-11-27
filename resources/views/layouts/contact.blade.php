<div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">@lang('contact.heading')</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">@lang('contact.get_in_touch')</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5">
          <form class="vg-contact-form">
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Name" placeholder="@lang('contact.your_name')">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Email" placeholder="@lang('contact.email_address')">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Subject" placeholder="@lang('contact.subject')">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="Message" rows="6" placeholder="@lang('contact.enter_message')"></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">@lang('contact.send_message')</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
