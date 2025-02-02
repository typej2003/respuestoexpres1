<div class="container">
    <style>
        .overlay-content {
            min-height: 80vh !important;
        }
        .wrapperRedes {
            margin-top: auto !important;
        }

        .logo-navbar {
            width: 80% !important;
            height: 80% !important;
            margin: 15px !important
        }
        .logo-movil {
            height: 54px !important;
        }
        .logo-responsive {
            height: 54px !important;
        }
        
        .logo { 
            width: 20% !important; 
            list-style-type: none; text-align: center; height: 70px !important; 
            display: flex !important; align-items: center;}
        
        .search { 
            color: #aaa; 
            font-size: 16px; 
            margin-top: 0px; 
            width: 40% !important; 
            height: 70px !important;

        }

        .menu-horizontal { 
            list-style-type: none; 
            height: 70px !important; 
            display: flex;
            justify-content: end;
            width: 40% !important;
            z-index: 10!important;
        }

        .menu-horizontal li { padding: 5px;margin-right: 20px;}

        .input-search {
            width: 80% !important;
        }

        .search form {position: relative; height: 70px !important;}

        .search input { height: 40px; background: #fcfcfc; border: 1px solid #aaa; border-radius: 5px; box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset; text-indent: 32px; display: flex; align-self: center !important; }

        .search .fa-search { position: absolute; top: 20px; left: 55px !important; cursor: pointer; border: 0px solid grey; }

        .search form button { width: 30px; height: 30px; }
        
    </style>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <!-- Vista movil -->
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <div class="overlay-header">
                        <div class="currency-responsive w-full">
                            @livewire('components.currency')
                        </div>
                    </div>
                    <div class="nav-overlay">
                        <div class="accordion-container">
                            @foreach($categories as $category)
                                    @if(count($category->subcategories()) == 0))
                                        <div class="set">
                                            <a class="Text-Uppercase" style="cursor:pointer;" href="{{ route('cat', [
                                                'categ' => $category->name,
                                                ]) }}" style="font-weight: bold; ">
                                                {{$category->name}}
                                            </a>
                                        </div>
                                    @else
                                        <div class="set" style="font-weight: bold; ">
                                            <a class="Text-Uppercase" href="#">
                                                <!-- <i class="fa fa-plus mr-3"></i> -->
                                                {{$category->name}}                                                
                                            </a>
                                            @foreach($category->subcategories() as $subcategory)
                                                <div class="content">
                                                    <div class="d-flex justify-content-between mx-5">
                                                        <a class="" href="{{ route('cat', [
                                                                                    'categ' => $subcategory->name,
                                                                                    ]) }}">
                                                            {{ $subcategory->name}}
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach                                            
                                        </div>
                                    @endif                                
                            @endforeach
                        </div>        
                    </div>

                    <div class="nav-overlay">
                        <div class="accordion-container">
                            @guest
                                <div class="set">
                                    <a href="#" class="titulo">
                                    MI PERFIL
                                    </a>
                                    <div class="content">
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="" href="/register" style="cursor:pointer;">
                                                <img src="/img/icon_registrarse.png" style="width: 18px; height: 25px;"><span class="mx-3">Registrarse</span>
                                            </a>
                                        </div>
                                        <div class="">                                    
                                            <a class="mx-3" href="/login" style="cursor: pointer;">
                                                <img src="/img/icon_entrar.png" style="width: 18px; height: 25px;"><span class="mx-3">Entrar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="set">
                                    <a href="" class="titulo">COMPRAS</a>
                                </div>
                                <div class="set">
                                    <a class="titulo" href="mailto:{{$comercio->email}}">CORREO</a>
                                </div>
                                <div class="set">
                                    <a class="titulo" href="tel:0058{{$comercio->contactcellphone}}">LLAMAR</a>
                                </div>
                            @endguest
                            @auth
                            <div class="accordion-container">
                                <div class="set">
                                    <a href="#" style="font-weight: bold; font-size: 1.5rem;">
                                        <img src="{{ auth()->user()->avatar_url }}" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 30px; width: 30px;">
                                        Hola, {{ auth()->user()->name }}
                                    </a>
                                    <div class="content">
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Perfil</a>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="" href="{{ route('admin.dashboard') }}" x-ref="profileLink">Escritorio</a>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="" href="{{ route('listPedidosCliente') }}" x-ref="profileLink">Mis Pedidos</a>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="" href="{{ route('admin.profile.edit') }}" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                        </div>
                                        @if(auth()->user()->role == 'admin')
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <a class="" href="{{ route('admin.settings') }}">Configuración</a>
                                        </div>
                                        @endif
                                        <div class="dropdown-divider"></div>
                                        <div class="d-flex justify-content-between mb-2 ml-3 mx-3">
                                            <form method="post" action="{{ route('logout') }}">
                                                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="set">
                                    <a href="" class="titulo">COMPRAS</a>
                                </div>
                                <div class="set">
                                    <a href="mailto:{{$comercio->email}}" class="titulo">CORREO</a>
                                </div>
                                <div class="set">
                                    <a href="tel:0058{{$comercio->contactcellphone}}" class="titulo">LLAMAR</a>
                                </div>
                            </div>
                            @endauth
                        </div>
                            
                    </div>

                    <hr>

                    <script>
                            function sendForm(form)
                            {
                                let formulario = document.getElementById(form)
                                formulario.submit();
                            }
                        
                    </script>

                    <div style="height: 20%;"></div>
                    
                </div>
            </div>
            <!-- Vista escritorio -->
            <div class="header-main fixed-top bg-red" style="width: 100vw !important;">
                <div class="header" style="width: 100vw !important;">
                    <div class="logo">
                        <a class="" href="/"><img class="logo-navbar" src="{{ $comercio->avatar_url }}" alt=""></a>
                    </div>
                    <!-- The form -->
                    <div class="search">
                        <form class="d-flex justify-content-center" action="{{ route('search') }}" method="GET" wire:ignore>
                            <input class="form-control input-search" name="words" type="text" placeholder="Buscar">
                            <button type="submit" class="fa fa-search"></button>
                        </form>
                    </div>
                    <!-- Menu horizontal -->
                    <ul class="menu-horizontal" style="">
                            @auth
                                <li class="nav-item">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{ auth()->user()->avatar_url }}" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 30px; width: 30px;">
                                                <span class="ml-1" x-ref="username">Hola, {{ auth()->user()->name }}</span>
                                            </a>
                                            <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}" x-ref="profileLink">Escritorio</a>
                                                <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Perfil</a>
                                                <a class="dropdown-item" href="{{ route('listPedidosCliente') }}" x-ref="profileLink">Mis Pedidos</a>
                                                <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                                @if(auth()->user()->role =='admin')
                                                <a class="dropdown-item" href="{{ route('admin.settings') }}">Configuración</a>
                                                @endif
                                                <div class="dropdown-divider"></div>
                                                <form method="post" action="{{ route('logout') }}">
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            @endauth
                                
                            @guest
                                <li class="d-flex flex-column">
                                        <!-- <img style="height:45px" src="/img/icon_miperfil.png" id="profileImage" alt="User Image"> -->
                                    <div class="border color-i border-3 rounded-circle p-2" style="width: 35px" >
                                        <i class="fas fa-solid fa-user" title="Perfil"></i>
                                    </div>
                                    
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="color-i">Perfil</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1000 !important; background:white !important;">
                                        <div class="d-flex justify-content-between mb-2 ml-3">
                                            <a class="dropdown-item" href="/register" style="cursor:pointer;">
                                                <img src="/img/icon_registrarse.png" style="width: 18px; height: 25px;"><span class="mx-3 color-i">Registrarse</span>
                                            </a>
                                        </div>
                                        <div class="">                                    
                                            <a class="dropdown-item" href="/login" style="cursor: pointer;">
                                                <img src="/img/icon_entrar.png" style="width: 18px; height: 25px;"><span class="mx-3 color-i">Entrar</span>
                                            </a>
                                        </div>
                                    </div>                                    
                                </li> 
                            @endguest
                            <li>
                                <div class="row">
                                    <div class="col-md-12 mx-2">
                                        <div class="dropdown-cart-drop my-0">
                                            <a class=" d-flex flex-column" href="/goCart">
                                                <div class="d-flex justify-content-between">
                                                    <img src="/img/icon_carrito.png" style="width: 35px; height:35px cursor:pointer;" title="Compras">
                                                    <span class="color-i">({{$totalQuantityCart}})</span>
                                                </div>
                                                <span class="color-i" style="z-index: 1;">Compras</span>
                                            </a>
                                            @livewire('carrito.cart-drop')
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-12 mx-2 ">
                                        <div class="centro d-flex flex-column color-i">
                                            <a class="my-2 color-i" href="mailto:{{$comercio->email}}">
                                                <i class="fas fa-regular fa-envelope mx-auto fa-lg" title="Correo"></i>
                                            </a>
                                            <a class="color-i" href="mailto:{{$comercio->email}}">
                                                <span class="">Correo</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-12 mx-2 ">
                                        <div class="centro d-flex flex-column color-i">
                                            <a class="my-2 color-i" href="tel:0058{{$comercio->contactcellphone}}">
                                                <i class="fas fa-solid fa-phone mx-auto fa-lg" title="Llamar"></i>                                                
                                            </a>
                                            <a class="color-i" href="tel:0058{{$comercio->contactcellphone}}">
                                                <span class="">Llamar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>                                
                            </li>
                        
                    </ul>                    
                </div>
                <!-- menu horizontal vista escritorio -->
                <div class="menu" style="z-index: 6!important">
                    <div class="menu-left" onclick="openNav()">&#9776; <span class="wordMenu text-bold">MENÚ</span></div> 
                        <div class="menu-center w-full ">
                            <div class="d-flex justify-content-around ">
                            @livewire('components.menu-component',[
                                'comercioId' => 1,
                            ])
                            </div>
                            
                        </div>
                        <div class="button-search w-full" style="display: none; cursor: pointer;"><img src="/img/icon_buscar.png" alt=""></div>
                        <span class="fw-bold w-full">Divisa:</span>
                        <div class="menu-right w-full d-flex justify-content-between">
                            @livewire('components.currency')
                        </div>
                        <!-- menu vista movil -->
                        <div class="menu-responsive">
                            <div class="menu-responsive-banner">
                                <a href="/"><img class="logo-movil" src="{{ $comercio->avatar_url }}" alt=""></a>
                            </div>
                            <div class="menu-responsive1">
                                <!-- Menu horizontal -->
                                <div class="button-search"><img class="icon-movil" src="/img/icon_buscar.png" alt=""></div>
                                @auth
                                    <div>
                                        <a href="">
                                            <img class="icon-movil img-circle elevation-1"  src="{{ auth()->user()->avatar_url }}" id="profileImage" alt="User Image" style="height: 30px; width: 30px;">
                                        </a>
                                    </div>                                
                                @else
                                    <div><a href=""><img class="icon-movil" src="/img/icon_miperfil.png" alt=""></a></div>
                                @endauth
                                <div class="d-none"><a href=""><img class="icon" src="/img/icon_heart.png" alt=""></a></div>
                                
                                <div>
                                    <a class="d-flex justify-content-between" href="/goCart">
                                        <img class="icon-movil" src="/img/icon_carrito.png" style="cursor:pointer;">
                                        <span class="fs-5 my-2 text-dark">({{$totalQuantityCart}})</span>
                                        <!-- <span class="text-dark">({{\Cart::getTotalQuantity()}})</span> -->
                                    </a>
                                    @livewire('carrito.cart-drop')
                                </div>
                                <div class="centro d-flex flex-column my-2 color-i h2">
                                    <a class="color-i titulo" href="mailto:{{$comercio->email}}">
                                        <i class="fas fa-regular fa-envelope mx-auto fa-lg" title="Correo"></i>
                                    </a>
                                    
                                </div>
                                <div class="centro d-flex flex-column my-2 color-i h2">
                                    <a class="color-i titulo" href="tel:0058{{$comercio->contactcellphone}}">
                                        <i class="fas fa-solid fa-phone mx-auto fa-lg" title="Llamar"></i>
                                    </a>
                                </div>
                            </div>                                
                            
                            <div class="div-search d-none w-100">
                                <form action="{{ route('search') }}" method="GET" >
                                    <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                                    <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                                    <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                                    <input class="form-control search-input" name="words" type="text" placeholder="Buscar" style="height: 40px;">
                                    <button type="submit" class="form-control fa fa-search"></button>
                                </form>
                            </div>      
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var altura_del_header_main = $('.header-main').outerHeight(true);

        // posicionarMenu();

        $(window).scroll(function() {    
            // closeNav()
            // posicionarMenu();
        });

        function posicionarMenu()
        {
            
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            if(window.innerWidth > 1070) {
                if ($(window).scrollTop() >= altura_del_header_main){
                    $('.header-main').addClass('fixed');
                    // $('.menu').addClass('fixed');
                    $('.wrapper').css('margin-top', (altura_del_header_main-15) + 'px');
                    $('.button-search').css('display', 'block');
                    $('.div-search').css('display', 'none');
                } 
                else {
                    $('.header-main').removeClass('fixed');
                    // $('.menu').removeClass('fixed');
                    $('.wrapper').css('margin-top', altura_del_header_main-15);
                    $('.button-search').css('display', 'none');
                    $('.div-search').css('display', 'none');
                }
            }else{
                $('.header-main').addClass('fixed');
                //  $('.menu').addClass('fixed');
                 $('.wrapper').css('margin-top', (parseFloat(altura_del_menu)-15) + 'px');
                 $('.div-search').css('display', 'none');
            }
        }

        $('.button-search').on('click', function(){
            if($('.menu').css('height') !== '90px'){
                $('.menu').css('height', '90px', 'important');
                $('.menu-responsive').css('height', '90px', 'important');
                $('.div-search').css('display', 'block', 'important');
                $('.div-search').addClass('d-none')
                $('.search-input').css('width', window.innerWidth, 'important');
            }else{
                $('.menu').css('height', '155px', 'important');
                $('.menu-responsive').css('height', '155px', 'important');
                $('.div-search').css('display', 'block', 'important');
                $('.div-search').removeClass('d-none')
            }
            $('.menu').css('align-items', 'start');
            $('.input-search').focus();

        })
        
    </script>

    <script>
        function openNav() {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            var ancho = window.innerWidth;
            var alto = window.innerHeight;
            if(ancho > 1070){
                document.getElementById("myNav").style.width = "30%";
                
                if ($(window).scrollTop() >= 100){
                    document.getElementById("myNav").style.marginTop = 0;
                }
                else{
                    document.getElementById("myNav").style.marginTop = 100;
                }

                document.getElementById("myNav").style.marginTop = altura_del_header;

            }else{
                document.getElementById("myNav").style.marginTop =  "2px";
                document.getElementById("myNav").style.width = "95%";
            }
        
        }
        
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

    <script>
        window.onload = function(e){ 
            $(".set > a").on("click", function() {
                if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".content")
                    .slideUp(200);
                $(".set > a i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");
                } else {
                $(".set > a i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");
                $(this)
                    .find("i")
                    .removeClass("fa-plus")
                    .addClass("fa-minus");
                $(".set > a").removeClass("active");
                $(this).addClass("active");
                $(".content").slideUp(200);
                $(this)
                    .siblings(".content")
                    .slideDown(200);
                }
            });
        };
    </script>
    
</div>

