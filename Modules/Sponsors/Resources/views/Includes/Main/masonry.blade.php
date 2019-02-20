<div class="col-md-12 my-5 p-3" style="background-color:#6acf05; border:1px solid #28a745; border-radius: 25px;">
    <div class="card-columns">

        {{--@foreach($sponsors as $sponsor)--}}
            {{--<p>{{$sponsor}}</p>--}}
            {{--<p>{{$sponsor->with_package()}}</p>--}}
            {{--<p>{{$sponsor->with_link()}}</p>--}}
            {{--<p>{{$sponsor->with_image()}}</p>--}}
            {{--<hr>--}}
        {{--@endforeach--}}

        @foreach($sponsors as $sponsor)
        <div class="card text-center">

            {{-- Image gedeelte --}}

            @if($sponsor->with_package()->image_field)
                @if($sponsor->with_package()->linked_image)
                    <a href="{{route('main.sponsors.click', $sponsor->with_link()->slug)}}" target="_blank">
                        <img class="card-img-top img-thumbnail" src="{{ asset('modules/sponsors/img').'/'.$sponsor->with_image()->name }}" alt="{{$sponsor->description}}" >
                    </a>
                @else
                    <img class="card-img-top img-thumbnail" src="{{ asset('modules/sponsors/img/httpwwwweilustnl1539476413.jpg') }}" alt="{{$sponsor->description}}" >
                @endif

            @endif

            <div class="card-body">

                @if($sponsor->with_package()->title_field)

                    @if($sponsor->with_package()->linked_title)
                        <h5 class="card-title">
                            <a href="{{route('main.sponsors.click', $sponsor->with_link()->slug)}}" target="_blank">{{$sponsor->title}}</a>
                        </h5>
                    @else
                        <h5 class="card-title">{{$sponsor->title}}</h5>
                    @endif

                @endif

                @if($sponsor->with_package()->text_field)
                    <p class="card-text">
                        {!! $sponsor->body !!}
                    </p>
                @endif



            </div>

            @if($sponsor->with_package()->footer_field)

                <div class="card-footer">
                    <p class="card-text">
                        @if($sponsor->with_package()->linked_footer)
                            <a href="{{route('main.sponsors.click', $sponsor->with_link()->slug)}}" target="_blank">{{$sponsor->title}}</a>
                        @else
                            {{$sponsor->title}}
                        @endif
                    </p>
                </div>

            @endif
        </div>

        @endforeach





        {{--<div class="card text-center">--}}
            {{--<a href="http://brabantplein.cigo.nl/winkel-b/contact" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpbrabantpleincigonlwinkelbcontact1539476395.jpg') }}" alt="Cigo Brabantplein Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Cigo Brabantplein Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Het adres voor leuke cadeau artikelen, boeken, kantoorartilen, enz.--}}
                    {{--<br>--}}
                    {{--Wij hebben ook een grote voorraad aan bridge artikelen.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="http://brabantplein.cigo.nl/winkel-b/contact" target="_blank">Cigo Brabantplein Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Brainswash brabantplein Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Zin in een nieuw kapsel.--}}
                    {{--<br>--}}
                    {{--Wilt u snel geholpen worden zonder afspraak.--}}
                    {{--<br>--}}
                    {{--Brainwash Brabantplein is voor u het adres voor een heerlijke knipbeurt.--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.weilust.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpwwwweilustnl1539476413.jpg') }}" alt="KBS Weilust" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">KBS Weilust Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--KBS Weilust is een katholieke basisschool, die sinds 1 maart 1970 bestaat en is gelegen in Breda-Oost.--}}
                    {{--De school heeft ongeveer 500 leerlingen en het team bestaat uit 41 personeelsleden.--}}
                    {{--De populatie op KBS Weilust is een goede afspiegeling van de wijk, waarin de school ligt en de maatschappij.--}}
                    {{--<br>--}}
                    {{--‘Met veel plezier naar school’. Zo luidt het ‘mission statement’ van onze school.--}}
                    {{--Wij vinden het belangrijk dat iedereen zich veilig en gewaardeerd voelt,--}}
                    {{--zodat de leerlingen optimaal tot leren, spelen en ontwikkelen komen.--}}
                    {{--We streven naar balans in cognitieve, sociaal- emotionele, creatieve en sportieve ontwikkeling.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://www.weilust.nl/" target="_blank">KBS Weilust Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="http://heusdenhoutwinkelcentrum.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpheusdenhoutwinkelcentrumnl1539476422.jpg') }}" alt="Winkelcentrum Heusdenhout" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Cigo Brabantplein Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Winkelcentrum Heusdenhout is gelegen aan de Bisschopshoeve in Breda-Oost.--}}
                    {{--Door het veelzijdige aanbod van zowel grootwinkelbedrijf als gespecialiseerde winkeliers is het er goed vertoeven.--}}
                    {{--Voor al uw boodschappen en vertier kunt u bij ons terecht.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="http://heusdenhoutwinkelcentrum.nl/" target="_blank">Winkelcentrum Heusdenhout</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Meeus Verzekeringen</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Meeus is vanaf nu Aon.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://meeus.com/" target="_blank">Meeus Verzekeringen</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.eurobloemen.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwweurobloemennl1539476381.jpg') }}" alt="Willemsen tuin en bloemen" class="img-thumbnail" >--}}
            {{--</a>--}}
            {{--<p class="card-text text-muted">--}}
                {{--Willemsen Tuin en Bloemen Breda--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.pcpbreda.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwwpcpbredanl1539476444.jpg') }}" alt="P.C.P. voetbalvereniging breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">P.C.P. Voetbalvereniging Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Gelegen in het hart van de Bredase wijken Brabantpark en Heusdenhout,--}}
                    {{--’waar ons voetbalhart klopt’,--}}
                    {{--stelt zich actief op om de vereniging meer en meer een thuisclub voor de wijk te maken.--}}
                    {{--De mogelijkheden voor een sportclub reiken verder;--}}
                    {{--ons sociale gezicht laten zien en meerdere rollen vervullen voor de bewoners (jong tot oud) in de wijk.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://www.pcpbreda.nl/" target="_blank">P.C.P. Voetbalvereniging Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.drukkerijfrijters.nl" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwwdrukkerijfrijtersnl1539476430.jpg') }}" alt="Drukkerij Frijters" class="img-thumbnail" >--}}
            {{--</a>--}}
            {{--<p class="card-text text-muted">--}}
                {{--Drukkerij frijters breda--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.obsdetweesprong.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwwobsdetweesprongnl1539476408.jpg') }}" alt="OBS de Tweesprong" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">O.B.S. De tweesprong Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Onze school ligt op de grens van de wijken Heusdenhout en Brabantpark.--}}
                    {{--Samen met de ouders streeft het team naar een school waar kinderen zich thuis voelen.--}}
                    {{--Alles draait er immers om de kinderen.--}}
                    {{--Zij helpen mee aan de fijne sfeer op onze school en kunnen zo op--}}
                    {{--"natuurlijke wijze" hun mogelijkheden optimaal ontwikkelen.--}}
                    {{--Elk kind krijgt de zorg die hij of zij nodig heeft.--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--Voor ons zijn de volgende 5 waarden van groot belang:--}}
                    {{--<br>--}}
                    {{--<strong>--}}
                        {{--Respect, structuur, zelfstandigheid, veiligheid en humor.--}}
                    {{--</strong>--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://www.obsdetweesprong.nl/" target="_blank">O.B.S. De tweesprong Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://pmc-heusdenhout.nl/nl/Home" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpspmcheusdenhoutnlnlHome1539476472.jpg') }}" alt="Paramedisch Centrum Heusdenhout Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Paramedisch CentrumHesudenhout Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Paramedisch Centrum (PMC) Heusdenhout is sinds 2001 gevestigd aan de wilderen in de wijk Heusdenhout in Breda.--}}
                    {{--Het centrum biedt onderdak aan verschillende (para) medische disciplines.--}}
                    {{--Niet alleen binnen maar ook buiten het centrum zijn er samenwerkingsverbanden.--}}
                    {{--De disciplines binnen en buiten PMC-Heusdenhout werken nauw samen met als doel het leveren van optimale en complete zorg.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://pmc-heusdenhout.nl/nl/Home" target="_blank">Paramedisch Centrum Heusdenhout Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="http://www.rohashop.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpwwwrohashopnl1539476459.jpg') }}" alt="Roha Shop" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">ROHA Shop Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--In onze totaal vernieuwde RohaShop aan de Tilburgseweg nummer 16 in Breda,--}}
                    {{--vindt u onze Top1Toys speelgoedwinkel.--}}
                    {{--Verdeeld over 2 verdiepingen bieden wij ± 400m² aan speelplezier!--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="http://www.rohashop.nl/" target="_blank">ROHA Shop Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.ah.nl/winkel/albert-heijn/Breda/Bisschopshoeve/1174" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwwahnlwinkelalbertheijnBredaBisschopshoeve11741539476370.jpg') }}" alt="Albert Heijn Bisschopshoeve Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Albert Heijn Bisschopshoeve Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://www.ah.nl/winkel/albert-heijn/Breda/Bisschopshoeve/1174" target="_blank">Albert Heijn Bisschopshoeve Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://palacebreda.nl/nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpspalacebredanlnl1539476377.jpg') }}" alt="Chinees restaurant Palace Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Chinees restaurant Palace</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Op 8 februari 1986 werd Chinees Specialiteiten Restaurant “Palace” geopend.--}}
                    {{--Een eigentijds en gastvrij restaurant waar u in een sfeervolle omgeving--}}
                    {{--kan genieten van een heerlijk diner.--}}
                    {{--<br>--}}
                    {{--Wanneer u van verse authentieke chinese en/of chinees-indische gerechten houd,--}}
                    {{--die met optimale zorg worden bereid,--}}
                    {{--dan bent u bij restaurant Palace aan het goede adres.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://palacebreda.nl/nl/" target="_blank">Chinees restaurant Palace</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="http://www.fietsenbreda.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpwwwfietsenbredanl1539476402.jpg') }}" alt="Fietsen Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Fietsen Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Fietsen Breda is sinds 1934 gevestigd aan de Tilburgseweg 1 te Breda.--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--Wij verkopen stadsfietsen, recreatieve fietsen, ATB, mountain bikes,--}}
                    {{--moederfietsen, elektrisch ondersteunde fietsen/E-bike, sport-hybride fietsen,--}}
                    {{--racefietsen, transportfietsen...Zowel nieuw als 2e hands.--}}
                    {{--Bij ons vindt U verschillende modellen van merken zoals Multicycle,BSP, en Vogue--}}
                    {{--,kortom voor elk wat wils.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="http://www.fietsenbreda.nl/" target="_blank">Fietsen Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="http://www.zusje-cadeautjes.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpwwwzusjecadeautjesnl1539476476.jpg') }}" alt="Zusje Cadeautjes" class="img-thumbnail" >--}}
            {{--</a>--}}
            {{--<p class="card-text text-muted">--}}
                {{--Zusje cadeautjes--}}
            {{--</p>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.kober.nl/" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwwkobernl1539476454.jpg') }}" alt="Kober Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Kober kinder centra breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--Ben je in verwachting of heb je jonge kinderen en--}}
                    {{--wil je de zorg voor je gezin graag combineren met je werk of je studie?--}}
                    {{--Dan zit je goed bij Kober kinderopvang.--}}
                    {{--Of je nu een kinderdagverblijf zoekt, peuteropvang,--}}
                    {{--buitenschoolse opvang of een gastouder;--}}
                    {{--we bieden je kind dicht bij huis of je werk een--}}
                    {{--vertrouwde plek en een uitdagende speel- en leeromgeving.--}}
                {{--</p>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://www.kober.nl/" target="_blank">Kober kinder centra breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="card text-center">--}}
            {{--<a href="https://www.ah.nl/winkel/albert-heijn/Breda/Brabantplein/1382" target="_blank">--}}
                {{--<img class="card-img-top" src="{{ asset('modules/sponsors/img/httpswwwahnlwinkelalbertheijnBredaBrabantplein13821539476363.jpg') }}" alt="Albert Heijn Brabantplein Breda" class="img-thumbnail" >--}}
            {{--</a>--}}

            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Albert Heijn Brabantplein Breda</h5>--}}
                {{--<p class="card-text">--}}
                    {{--<a href="https://www.ah.nl/winkel/albert-heijn/Breda/Brabantplein/1382" target="_blank">Albert Heijn Brabantplein Breda</a>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
</div>