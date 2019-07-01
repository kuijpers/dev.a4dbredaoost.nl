<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="<?php echo e(route('main.main.index')); ?>">
        <img src="<?php echo e(asset('img/logo-a4d.png')); ?>" width="35" height="35" class="d-inline-block align-top" alt="">
        A4D Breda Oost
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('main.main.index')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownWieZijnWij" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wie zijn wij</a>
                <div class="dropdown-menu" aria-labelledby="dropdownWieZijnWij">
                    <a class="dropdown-item" href="<?php echo e(route('main.organisation.index')); ?>">De organisatie</a>
                    <a class="dropdown-item" href="<?php echo e(route('main.board.index')); ?>">Het bestuur</a>
                    
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('main.sponsors.index')); ?>">Sponsors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('main.news.index')); ?>">Nieuws</a>
            </li>
            
                
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('main.didyouknow.index')); ?>">Wist u dat?</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownContact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                <div class="dropdown-menu" aria-labelledby="dropdownContact">
                    <a class="dropdown-item" href="<?php echo e(route('main.contact.index')); ?>">Mail ons</a>
                    <a class="dropdown-item" href="<?php echo e(route('main.faq.index')); ?>">Veelgestelde vragen</a>
                    <a class="dropdown-item" href="<?php echo e(route('main.privacy.index')); ?>">Privacyverklaring</a>
                </div>
            </li>
            
                
                
                    
                        
                        
                        
                    
                
            
        </ul>

        <ul class="nav navbar-nav justify-content-end">
            <?php if(Auth::check()): ?>
                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a class="dropdown-item" href="<?php echo e(route('user.logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="<?php echo e(route('user.logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </li>

            <?php else: ?>
            
                
                
                    
                        
                        

                        
                            
                                


                            

                                

                        

                        
                            
                                
                            
                        
                        
                    
                    
                        
                    
                
            
            
                

            
            <?php endif; ?>
        </ul>
    </div>
</nav>
