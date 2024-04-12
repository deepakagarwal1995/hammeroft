  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12 footer-info text-center">
          <a href="{{route('index')}}" class="logo  align-items-center">
            <span>Hammer Of Thor</span>
          </a>


        </div>





      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Hammer Of Thor</span></strong>. All Rights Reserved
      </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<style>
 .wa-chat-box {

    margin-bottom: 21px!important;
    right: unset!important;
    left: 29px!important;
}
#wa-widget-send-button {
    margin: 0 0 5px 0 !important;
     right: unset!important;
    left: 8px!important;
}
</style>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?16085';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Chat Now",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Hammer Of Thor",
      "brandSubTitle":"Man Wellness Company",
      "brandImg":"{{ config('app.url') }}/assets/img/hammer-of-thor-white-150x150.webp",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question ",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"917017697393"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
