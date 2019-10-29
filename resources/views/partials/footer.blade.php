<footer id="htc__footer">
    <!-- Start Footer Widget -->
    <div class="footer__container bg__cat--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer">
                        <h2 class="title__line--2">@lang('footer.About us')</h2>
                        <div class="ft__details">
                            <p>
                                نص تعريفي حول الشركة المالكه للمتجر للتعريف بالسركة
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                    <div class="footer">
                        <h2 class="title__line--2">@lang('footer.information')</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                @foreach($pages as $page)
                                    <li><a href="/pages/{{ $page->slug }}">@lang('general.' . $page->slug)</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">@lang('footer.My Account')</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="/my-account">@lang('footer.My Account')</a></li>
                                <li><a href="/cart">@lang('footer.My Cart')</a></li>
                                @guest()
                                <li><a @click.prevnet="$modal.show('login')">@lang('footer.Login')</a></li>
                                <li><a @click.prevnet="$modal.show('register')">@lang('footer.Register')</a></li>
                                @endguest
                                @auth()
                                <li>
                                    <form action="/logout" method="post" ref="logoutForm">
                                        @csrf
                                        <a @click.prevnet="$refs.logoutForm.submit()">
                                            @lang('footer.Logout')
                                        </a>
                                    </form>
                                </li>
                                @can('manage-dashboard')
                                    <li><a href="/admin/dashboard">@lang('footer.Dashboard')</a></li>
                                @endcan
                                @endauth
                                <li><a href="/checkout">@lang('footer.Checkout')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget -->
    @include('partials.modals.login')
    @include('partials.modals.register')
</footer>