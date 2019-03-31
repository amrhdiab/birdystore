<!-- Footer - One Page Style -->
<footer id="footer" class="one-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-2 col-md-8 col-sm-8">
                <!-- Title element centered -->
                <div class="kl-title-block clearfix text-center">
                    <!-- Title with montserrat font, size, white and bold style -->
                    <h3 class="tbk__title montserrat fs-28 fw-bold white">STAY TUNED!</h3>

                    <!-- Sub-title with custom font size, white and thin style -->
                    <h4 class="tbk__subtitle fs-16 white fw-thin">
                        We’ll do our best to deliver valuable updates and lots of great resources without invading your mailbox.
                    </h4>
                </div>
                <!--/ Title element centered -->

                <!-- Mailchimp newsletter signup element -->
                <div class="newsletter-signup">
                    <form action="{{route('front.newsletter')}}" method="post" name="mc-embedded-subscribe-form" class="validate" novalidate="">
                        {{csrf_field()}}
                        <input type="email" value="" name="email" class="form-control" id="mce-EMAIL" placeholder="your.address@email.com" required="">
                        <input type="submit" name="subscribe" class="nl-submit" id="mc-embedded-subscribe" value="JOIN US">
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;">
                            <input type="text" name="b_xxxxxxxxxxxxxxxxxxxCUSTOMxxxxxxxxx" value="">
                        </div>
                    </form>
                </div>
                <!--/ Mailchimp newsletter signup element -->

                <!-- Social icons colored background, aligned center and rounded style -->
                <div class="elm-socialicons text-center">
                    <ul class="elm-social-icons sc--colored sh--rounded clearfix">
                        <li>
                            <a href="{{$settings['facebook']}}" class="elm-sc-icon elm-sc-icon-0 icon-facebook icon-bg" target="_self" title="Facebook"></a>
                        </li>
                        <li>
                            <a href="{{$settings['twitter']}}" class="elm-sc-icon elm-sc-icon-1 icon-twitter icon-bg" target="_self" title="Twitter"></a>
                        </li>
                        <li>
                            <a href="{{$settings['dribble']}}" class="elm-sc-icon elm-sc-icon-2 icon-dribbble icon-bg" target="_self" title="Dribbble"></a>
                        </li>
                    </ul>
                </div>
                <!--/ Social icons colored background, aligned center and rounded style -->
            </div>
            <!--/ col-sm-offset-2 col-md-8 col-sm-8 -->
        </div>
        <!--/ row -->

        <div class="row">
            <div class="col-sm-12">
                <!-- Bottom area -->
                <div class="bottom clearfix">
                    <!-- Right floated -->
                    <div class="pull-right">
                        <!-- Footer navigation -->
                        <ul class="topnav footer_nav">
                            <li class="menu-item">
                                <a href="{{route('front.privacy')}}" target="_self" title="DISCLAIMER">PRIVACY POLICY</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('front.terms')}}" target="_self" title="SUPPORT POLICY">TERMS & CONDITIONS</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('front.contact')}}" target="_self" title="LEGAL">CONTACT US</a>
                            </li>
                        </ul>
                        <!--/ Footer navigation -->
                    </div>
                    <!--/ pull-right -->

                    <!-- Copyright -->
                    <div class="copyright">
                        <a href="/">
                            <img src="{{asset('/storage/settings/').'/'.$settings['logo']}}" width="35px" height="35px" alt="{{$settings['website_name']}}" title="{{$settings['website_name']}}" />
                        </a>
                        <p>© 2019 All rights reserved. <a href="/" target="_self" title="{{$settings['website_name']}}">{{strtoupper($settings['website_name'])}}</a>.</p>
                    </div>
                    <!--/ Copyright -->
                </div>
                <!--/ Bottom area -->
            </div>
            <!--/ col-sm-12 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</footer>
<!--/ Footer - One Page Style -->