<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">{{ __('MAIN NAVIGATION') }}</li>
                    <li>
                        <a href="../../index.html">
                            <i class="material-icons">home</i>
                            <span>{{ __('Home') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);"> ING - YJPINEDO</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <div class="tab-content">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                        {{ Auth::user()->name }} <small>{{ Auth::user()->email }}</small>
                                </h2>
                            </div>
                            <div class="body">
                                    <a class="btn btn-block btn-lg bg-indigo waves-effect" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Info
                <div class="user-info">
                    <div class="image">
                        <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                        <div class="email">{{ Auth::user()->email }}</div>
                    </div>
                </div>
               #User Info -->
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>
