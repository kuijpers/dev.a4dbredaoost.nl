<div class="sidebar__menu">
    <div class="sidebar__utitle">Web Paginas</div>
    <ul class="nav nav-menu">
        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
        <li>
            <a href="#">
                <div class="nav-menu__ico">
                    <i class="fa fa-fw fa-home"></i>
                </div>
                <div class="nav-menu__text">
                    <span>Home</span>
                </div>
            </a>
        </li>
        <?php endif; ?>
        

        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Wie zijn wij ?</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="#">De organisatie</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="#">Het bestuur</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
                    <li>
                        <a href="#">Tijdlijn</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        <?php endif; ?>
        

        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                'member' ,
                                ])): ?>
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-handshake-o"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Sponsors</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="<?php echo e(route('board.sponsors.index')); ?>">Sponsors</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            'member' ,
                                            ])): ?>
                    <li>
                        <a href="<?php echo e(route('board.sponsors.information.index')); ?>">Informatie</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="<?php echo e(route('board.sponsors.settings.index')); ?>">Settings</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        <?php endif; ?>
        

        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
        <li>
            <a href="#">
                <div class="nav-menu__ico">
                    <i class="fa fa-fw fa-newspaper-o"></i>
                </div>
                <div class="nav-menu__text">
                    <span>Nieuws</span>
                </div>
            </a>
        </li>
        <?php endif; ?>
        


        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
        <li>
            <a href="#">
                <div class="nav-menu__ico">
                    <i class="fa fa-fw fa-calendar"></i>
                </div>
                <div class="nav-menu__text">
                    <span>Kalender</span>
                </div>
            </a>
        </li>
        <?php endif; ?>
        


        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-question"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Wist u dat</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="#">Wist u datjes</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                        'webmaster' ,
                                        //'member' ,
                                        ])): ?>
                    <li>
                        <a href="<?php echo e(route('board.didyouknow.information.index')); ?>">Informatie</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        <?php endif; ?>
        

        
        <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-envelope-open-o"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Contact</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
                    <li>
                        <a href="#">Mail ons</a>
                    </li>
                    <?php endif; ?>

                    <?php if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ])): ?>
                    <li>
                        <a href="#">Contact details</a>
                    </li>
                    <?php endif; ?>


                    
                    <?php if($rpc->CanAccessAs([
                            'webmaster' ,
                            //'member' ,
                            ])): ?>
                    <li>
                        <a href="#">
                            <div class="nav-menu__ico">
                                <i class="fa fa-fw fa-quora"></i>
                            </div>
                            <div class="nav-menu__text">
                                <span>FAQ</span>
                            </div>
                            <div class="nav-menu__right">
                                <i class="fa fa-fw fa-angle-right arrow"></i>
                            </div>
                        </a>
                        <ul class="nav nav-menu__second collapse">
                            <?php if($rpc->CanAccessAs([
                                                    'webmaster' ,
                                                    //'member' ,
                                                    ])): ?>
                            <li>
                                <a href="#">Informatie</a>
                            </li>
                            <?php endif; ?>

                            <?php if($rpc->CanAccessAs([
                                                    'webmaster' ,
                                                    //'member' ,
                                                    ])): ?>
                            <li>
                                <a href="#">Stellingen</a>
                            </li>
                            <?php endif; ?>

                            <?php if($rpc->CanAccessAs([
                                                    'webmaster' ,
                                                    //'member' ,
                                                    ])): ?>
                            <li>
                                <a href="#">Settings</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    

                    <?php if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ])): ?>
                    <li>
                        <a href="#">Privacy verklaring</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        <?php endif; ?>
        

    </ul>



    <div class="sidebar__utitle">Gebruikers</div>
    <ul class="nav nav-menu">
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Web</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <li>
                        <a href="#">Ingeschreven</a>
                    </li>
                    <li>
                        <a href="#">Nieuw</a>
                    </li>
                    <li>
                        <a href="#">Banned</a>
                    </li>
                    <li>
                        <a href="#">Authorisaties</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Vrijwilligers</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <li>
                        <a href="#">Geregistreerd</a>
                    </li>
                    <li>
                        <a href="#">Groepen</a>
                    </li>
                    <li>
                        <a href="#">Authorisaties</a>
                    </li>
                </ul>
            </li>

        </ul>

        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Bestuur</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <li>

                        <a href="<?php echo e(route('board.boardmembers.index')); ?>">Overzicht</a>

                    </li>
                    <li>
                        <a href="#">Groepen</a>
                    </li>
                    <li>
                        <a href="#">Authorisaties</a>
                    </li>
                </ul>
            </li>

        </ul>

    </ul>



    
    
        
                
                
        
                
                
        
                
                
                
            
                
                
                
            
        
        
                
                
                
        
                
                
        
                
                
                
            
                
                
            
        
    


    

        
            
                
                    
                        
                    
                    
                        
                    
                    
                        
                    
                

                
                    
                        
                    
                    
                        
                    
                    
                        
                    
                    
                        
                            
                                
                            
                            
                                
                            
                            
                                
                            
                        
                        
                            
                                
                            
                            
                                
                            
                            
                                
                            
                        
                    
                
            
        
</div>