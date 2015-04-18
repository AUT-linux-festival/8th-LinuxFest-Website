<?php insertView('layout/header'); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<section id="register" class="container">

    <div style="text-align: center;">
        <h1>
            ثبت نام در هفتمین جشنواره لینوکس امیرکبیر
        </h1>
    </div>
    <hr>

    <?php

    if (isset($_REQUEST['ok'])) {

        $success = true;
        try {
            submit_reg_form();
        } catch (Exception $e) {
            $success = false;
        }
        ?>

        <?php if ($success): ?>
            <div class="alert alert-success">
                ثبت نام شما با موفقیت انجام شد
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                متاسفانه خطایی در هنگام ثبت نام رخ داد . لطفا این موضوع را گزارش دهید
            </div>
        <?php endif ?>

        <?php
        goto endform;
    }

    ?>

    <form class="col-md-7 col-sm-12" action="" method="POST">
        <fieldset>
            <legend>
                اطلاعات شخصی
            </legend>

            <!-- Fullname -->
            <label class="control-label col-md-3" for="name">*
                نام و نام خانوادگی
            </label>
            <input required="required" type="text" class="form-control input col-md-9" name="name" id="name">

            <p class="help-block col-md-offset-3">
                لطفا نام کامل خود را به صورت فارسی بنویسید
            </p>

            <!-- Email -->
            <label class="control-label col-md-3" for="email">*
                Email
            </label>
            <input required="required" type="email" dir="ltr" class="form-control input col-md-9" name="email"
                   id="email">

            <p class="help-block col-md-offset-3">
                از این آدرس فقط و فقط جهت اطلاع رسانی در مورد جشنواره استفاده می شود
            </p>


            <!-- Tel -->
            <label class="control-label col-md-3" for="tel">*
                تلفن تماس
            </label>
            <input required="required" type="tel" dir="ltr" class="form-control input col-md-9" name="tel" id="tel">

            <p class="help-block col-md-offset-3">

            </p>


        </fieldset>

        <br>

        <fieldset>
            <legend>
                اطلاعات ثبت نام
            </legend>

            <label class="control-label col-md-3" for="inst">*
                کجا فعالیت دارید ؟
            </label>
            <input type="text" class="form-control input col-md-9" name="inst" id="inst">

            <p class="help-block col-md-offset-3">
                دانشگاه یا موسسه ای که در آن فعالیت دارید
            </p>


            <div class="checkbox checkbox-info col-md-9">
                <input type="checkbox" id="aut" name="aut" value="aut">
                <label class="control-label" for="aut">
                    دانشجوی امیرکبیر هستم
                </label>
            </div>

            <div class="checkbox checkbox-info col-md-9">
                <input type="checkbox" id="std" name="std" value="std">
                <label class="control-label" for="std">
                    دانشجو / دانش آموز هستم
                </label>
            </div>

        </fieldset>


        <br>

        <?php $i = 1;
        foreach (get_reg_data() as &$day): ?>
            <fieldset>
                <legend><?php echo $day['title']; ?></legend>

                <?php $j = 0;
                foreach ($day['items'] as $val => $title) : ?>
                    <div class="radio radio-inline_x radio-<?php echo $j == 0 ? 'warning' : 'info' ?>">
                        <input type="radio"
                               name="<?php echo "day$i" ?>" id="<?php echo 'day' . $i . "_$val" ?>"
                               value="<?php echo $val ?>"
                            <?php if ($j == 1) echo 'checked=checked' ?>
                            >
                        <label for="<?php echo 'day' . $i . "_$val" ?>">
                            <?php echo $title ?>
                        </label>
                    </div>
                    <?php $j++; endforeach ?>

                <br>
                شما در این ارائه ها شرکت می کنید :
                <?php $j = 0;
                foreach ($day['presentations'] as $title) : ?>

                    <div class="presentation checkbox checkbox-inline checkbox-success">
                        <input type="checkbox" readonly="readonly"
                               class='<?php echo "day$i-presentation p$j" ?>'>
                        <label><?php echo $title ?></label>
                    </div>

                    <?php $j++; endforeach ?>


            </fieldset>
            <br>
            <?php $i++;
        endforeach ?>

        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="g-recaptcha" data-sitekey="6LeVkAUTAAAAAP6hsByUuc4nM3wKmSR7gtRk54qB"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <br>

            <div class="col-sm-offset-6">
                <input id="submit" name="ok" type="submit" class="btn btn-success btn-lg" value="ثبت نام">
            </div>
            <br>

            <div id="submit_invalid" class="invalid alert-danger alert alert-dismissable"
                 style="visibility:hidden;">
                دوره هایی که در آنها شرکت می کنید با همدیگر همخوانی ندارند
                <br>
                باید دوره ی
                <span id="err_c"></span>
                را در هر دو روز انتخاب کنید
            </div>
        </div>
    </form>

    <?php
    endform:
    ?>

</section>

<?php insertView('layout/footer'); ?>

<script>
    $('input[name="day1"]').change(update_presentations);
    $('input[name="day2"]').change(update_presentations);
    update_presentations();
</script>
