<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?php echo e(__('board_member_settings.your_dashboard_settings')); ?>

        </h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label">
                <?php echo e(__('board_member_settings.your_dashboard_settings_theme')); ?> :
            </label>
            <div class="col-sm-6">
                <select id="select_theme" class="selectpicker form-control" name="select_theme">
                    <option value="light" <?php if($settings['boardmembers_theme'] == 'light'): ?> selected <?php endif; ?> >Light</option>
                    
                    <option value="dark" <?php if($settings['boardmembers_theme'] == 'dark'): ?> selected <?php endif; ?> >Dark</option>
                    <option value="lilac" <?php if($settings['boardmembers_theme'] == 'lilac'): ?> selected <?php endif; ?> >Lilac</option>
                </select>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label text-left">
                <?php echo e(__('board_member_settings.your_dashboard_settings_language')); ?> :
            </label>
            <div class="col-sm-6">
                <div id="select_language"
                     data-input-name="language"
                     <?php if(isset($settings->boardmembers_language)): ?>
                     data-selected-country="<?php echo e($settings->boardmembers_language); ?>"
                     <?php else: ?>
                     data-selected-country="nl"
                     <?php endif; ?>

                     data-button-size="btn-md btn-block"
                     data-button-type="btn-default"
                     data-scrollable-height="250px">
                </div>
            </div>
        </div>
    </div>

    
        
           
           
        
    
</div>