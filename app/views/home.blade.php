@extends('layouts.master')

@section('content')
<div class=" carousel-wrapper">


        <div class="row">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!--
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        {{ HTML::Image(asset('assets/images/carousel_01.jpg'), null, array('class' => 'img-responsive')) }}
                    </div>

                    <div class="item">
                        {{ HTML::Image(asset('assets/images/carousel_02.jpg'), null, array('class' => 'img-responsive')) }}
                        {{--
                        <div class="carousel-caption">
                                blub
                        </div>
                        --}}
                    </div>

                    <div class="item">
                        {{ HTML::Image(asset('assets/images/carousel_03.jpg'), null, array('class' => 'img-responsive')) }}
                        {{--
                        <div class="carousel-caption">
                                blub
                        </div>
                        --}}
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>


        </div>


</div>

    <div class="content">
       <div class="container">
           <div class="row">
               <div class="col-lg-4">
                   <h2>Column 1</h2>
                   <p>Minions ipsum baboiii poulet tikka masala bananaaaa poulet tikka masala hana dul sae ti aamoo! Hahaha ti aamoo! Aaaaaah chasy para tú tatata bala tu aaaaaah. Butt daa para tú daa me want bananaaa! Jiji    belloo! La bodaaa hahaha. Belloo! belloo! Bee do bee do bee do tulaliloo baboiii wiiiii la bodaaa. Pepete chasy bananaaaa tulaliloo poopayee. Belloo! tank yuuu! Bananaaaa baboiii. La bodaaa la bodaaa para tú la     bodaaa jiji. Gelatooo po kass jiji la bodaaa bananaaaa uuuhhh bappleees tulaliloo me want bananaaa! Tulaliloo jeje.</p>
               </div>
               <div class="col-lg-4">
                   <h2>Column 1</h2>
                   <p>Minions ipsum baboiii poulet tikka masala bananaaaa poulet tikka masala hana dul sae ti aamoo! Hahaha ti aamoo! Aaaaaah chasy para tú tatata bala tu aaaaaah. Butt daa para tú daa me want bananaaa! Jiji    belloo! La bodaaa hahaha. Belloo! belloo! Bee do bee do bee do tulaliloo baboiii wiiiii la bodaaa. Pepete chasy bananaaaa tulaliloo poopayee. Belloo! tank yuuu! Bananaaaa baboiii. La bodaaa la bodaaa para tú la     bodaaa jiji. Gelatooo po kass jiji la bodaaa bananaaaa uuuhhh bappleees tulaliloo me want bananaaa! Tulaliloo jeje.</p>
               </div>
               <div class="col-lg-4">
                   <h2>Column 1</h2>
                   <p>Minions ipsum baboiii poulet tikka masala bananaaaa poulet tikka masala hana dul sae ti aamoo! Hahaha ti aamoo! Aaaaaah chasy para tú tatata bala tu aaaaaah. Butt daa para tú daa me want bananaaa! Jiji    belloo! La bodaaa hahaha. Belloo! belloo! Bee do bee do bee do tulaliloo baboiii wiiiii la bodaaa. Pepete chasy bananaaaa tulaliloo poopayee. Belloo! tank yuuu! Bananaaaa baboiii. La bodaaa la bodaaa para tú la     bodaaa jiji. Gelatooo po kass jiji la bodaaa bananaaaa uuuhhh bappleees tulaliloo me want bananaaa! Tulaliloo jeje.</p>
               </div>
           </div>
       </div>
    </div>

@stop

