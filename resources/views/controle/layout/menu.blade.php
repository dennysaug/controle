<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div id="sidebar" class="nav-collapse collapse">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
                <input type="text" class="search-query" placeholder="Search" />
            </form>
        </div>

        <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li class="active">
                <a href="{{ route('controle.home') }}">
                    <i class="icon-home"></i> Dashboard
                </a>
            </li>
            @foreach(session('rotas')->lists('transacao')->lists('categoria','categoria_transacaos_id') as $categoria_pai)
            <li class="has-sub">
                <a href="javascript:;" class="">
                    <i class="{{ $categoria_pai->classe }}"></i> {{ $categoria_pai->nome }}
                    <span class="arrow"></span>
                </a>

                <ul class="sub">
                    {{--@if(isset(session('rotas')->lists('transacao')))--}}
                        @foreach(session('rotas')->lists('transacao') as $transacao)
                            @if($transacao->exibir == 1 && $transacao->categoria_transacaos_id == $categoria_pai->id)
                                <li><a class="" href="{{ route($transacao->rota) }}"><i class="{{ $transacao->classe }}"></i> {{ $transacao->nome }}</a></li>
                            @endif
                        @endforeach
                    {{--@endif--}}
                </ul>
            </li>
            @endforeach
            {{----}}
            {{--<li><a class="" href="forms.html"><i class="icon-table"></i> Form Stuff</a></li>--}}
            {{--<li><a class="" href="tables.html"><i class="icon-table"></i> Data Tables</a></li>--}}
            {{--<li><a class="" href="grids.html"><i class="icon-th"></i> Grids & Portlets</a></li>--}}
            {{--<li><a class="" href="charts.html"><i class="icon-bar-chart"></i> Visual Charts</a></li>--}}
            {{--<li class="has-sub">--}}
                {{--<a href="javascript:;" class="">--}}
                    {{--<i class="icon-map-marker"></i> Maps--}}
                    {{--<span class="arrow"></span>--}}
                {{--</a>--}}
                {{--<ul class="sub">--}}
                    {{--<li><a class="" href="maps_google.html"> Google Maps</a></li>--}}
                    {{--<li><a class="" href="maps_vector.html"> Vector Maps</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a class="" href="calendar.html"><i class="icon-ok"></i> Calendar</a></li>--}}
            {{--<li><a class="" href="gallery.html"><i class="icon-camera"></i> Gallery</a></li>--}}
            {{--<li><a class="" href="login.html"><i class="icon-user"></i> Login Page</a></li>--}}
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->