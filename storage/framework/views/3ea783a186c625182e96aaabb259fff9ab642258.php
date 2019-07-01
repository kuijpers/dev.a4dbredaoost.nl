

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Contact gegevens</h3>
    </div>
    <div class="panel-body">
        <h5>Wilt u onderstaande tonen op de website ?</h5>
        <table class="table">

            <tr>
                <td>
                    <label for="">Email</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_email"
                           id="show_email"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_email == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Secondary email</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_sec_email"
                           id="show_sec_email"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_sec_email == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Address</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_address"
                           id="show_address"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_address == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Phone</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_phone"
                           id="show_phone"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_phone == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Wallet</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_wallet"
                           id="show_wallet"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_wallet == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Date of birth</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_dob"
                           id="show_dob"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_dob == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Profile image</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_img"
                           id="show_img"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_img == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">About me</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input class="bs-switch" type="checkbox"
                           name="show_about_me"
                           id="show_about_me"
                           data-size="mini"
                           data-on-color="success"
                           data-off-color="danger"
                           data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                           data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                           <?php if($user->show_about_me == 1): ?> checked <?php endif; ?>
                    >
                </td>
            </tr>

        </table>
    </div>
</div>