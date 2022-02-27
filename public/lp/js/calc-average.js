/**
* Calculate B Ingris
*/

 $('input[name="bing_sm3"], input[name="bing_sm4"], input[name="bing_sm5"]').on('keyup', function () {
    let val = parseInt($(this).val());

    if(val < 1 || val > 100) {
        $(this).val(0);
        window.scrollTo(0, 0);
        $('.alert-content').text('Masukan nilai yang valid!');
        $('.alert').addClass('show');
    }
    average_bing();
});

function average_bing(){
    let bing_sm3 = parseInt($('input[name="bing_sm3"]').val());
    let bing_sm4 = parseInt($('input[name="bing_sm4"]').val());
    let bing_sm5 = parseInt($('input[name="bing_sm5"]').val());

    bing_sm3 = isNaN(bing_sm3) ? 0 : bing_sm3;
    bing_sm4 = isNaN(bing_sm4) ? 0 : bing_sm4;
    bing_sm5 = isNaN(bing_sm5) ? 0 : bing_sm5;

    if(bing_sm3 != 0 && bing_sm4 != 0 && bing_sm5 != 0) {
        console.debug(bing_sm3,bing_sm4,bing_sm5);
        let total = bing_sm3 + bing_sm4 + bing_sm5;
        let average = total / 3;

        if(average < 1){
            average = 0;
        }
        $('input[name="average_bing"]').val(average);

        average_majors();
    }
}

/**
* Calculate Matematika
*/

$('input[name="mat_sm3"], input[name="mat_sm4"], input[name="mat_sm5"]').on('keyup', function () {
    let val = parseInt($(this).val());

    if(val < 1 || val > 100) {
        $(this).val(0);
        window.scrollTo(0, 0);
        $('.alert-content').text('Masukan nilai yang valid!');
        $('.alert').addClass('show');
    }

    average_mat();
});

function average_mat(){
    let mat_sm3 = parseInt($('input[name="mat_sm3"]').val());
    let mat_sm4 = parseInt($('input[name="mat_sm4"]').val());
    let mat_sm5 = parseInt($('input[name="mat_sm5"]').val());

    mat_sm3 = isNaN(mat_sm3) ? 0 : mat_sm3;
    mat_sm4 = isNaN(mat_sm4) ? 0 : mat_sm4;
    mat_sm5 = isNaN(mat_sm5) ? 0 : mat_sm5;

    if(mat_sm3 != 0 && mat_sm4 != 0 && mat_sm5 != 0) {
        console.debug(mat_sm3,mat_sm4,mat_sm5);
        let total = mat_sm3 + mat_sm4 + mat_sm5;
        let average = total / 3;

        if(average < 1){
            average = 0;
        }
        $('input[name="average_mat"]').val(average);

        average_majors();
    }
}

/**
* Calculate IPS
*/

$('input[name="ips_sm3"], input[name="ips_sm4"], input[name="ips_sm5"]').on('keyup', function () {
    let val = parseInt($(this).val());

    if(val < 1 || val > 100) {
        $(this).val(0);
        window.scrollTo(0, 0);
        $('.alert-content').text('Masukan nilai yang valid!');
        $('.alert').addClass('show');
    }

    average_ips();
});

function average_ips(){
    let ips_sm3 = parseInt($('input[name="ips_sm3"]').val());
    let ips_sm4 = parseInt($('input[name="ips_sm4"]').val());
    let ips_sm5 = parseInt($('input[name="ips_sm5"]').val());

    ips_sm3 = isNaN(ips_sm3) ? 0 : ips_sm3;
    ips_sm4 = isNaN(ips_sm4) ? 0 : ips_sm4;
    ips_sm5 = isNaN(ips_sm5) ? 0 : ips_sm5;

    if(ips_sm3 != 0 && ips_sm4 != 0 && ips_sm5 != 0) {
        console.debug(ips_sm3,ips_sm4,ips_sm5);
        let total = ips_sm3 + ips_sm4 + ips_sm5;
        let average = total / 3;

        if(average < 1){
            average = 0;
        }
        $('input[name="average_ips"]').val(average);

        average_majors();
    }
}

/**
* Calculate IPA
*/

$('input[name="ipa_sm3"], input[name="ipa_sm4"], input[name="ipa_sm5"]').on('keyup', function () {
    let val = parseInt($(this).val());

    if(val < 1 || val > 100) {
        $(this).val(0);
        window.scrollTo(0, 0);
        $('.alert-content').text('Masukan nilai yang valid!');
        $('.alert').addClass('show');
    }

    average_ipa();
});

function average_ipa() {
    let ipa_sm3 = parseInt($('input[name="ipa_sm3"]').val());
    let ipa_sm4 = parseInt($('input[name="ipa_sm4"]').val());
    let ipa_sm5 = parseInt($('input[name="ipa_sm5"]').val());

    ipa_sm3 = isNaN(ipa_sm3) ? 0 : ipa_sm3;
    ipa_sm4 = isNaN(ipa_sm4) ? 0 : ipa_sm4;
    ipa_sm5 = isNaN(ipa_sm5) ? 0 : ipa_sm5;

    if(ipa_sm3 != 0 && ipa_sm4 != 0 && ipa_sm5 != 0) {
        console.debug(ipa_sm3,ipa_sm4,ipa_sm5);
        let total = ipa_sm3 + ipa_sm4 + ipa_sm5;
        let average = total / 3;

        if(average < 1){
            average = 0;
        }
        $('input[name="average_ipa"]').val(average);

        average_majors();
    }
}

/**
 * Calculate by majors
 */

function average_majors() {
    let majors = $('select[name="majors"]').val();
    let lane = $('select[name="lane"]').val();

    let average_bing = parseInt($('input[name="average_bing"]').val());
    let average_mat = parseInt($('input[name="average_mat"]').val());
    let average_ips = parseInt($('input[name="average_ips"]').val());
    let average_ipa = parseInt($('input[name="average_ipa"]').val());

    average_bing = isNaN(average_bing) ? 0 : average_bing;
    average_mat = isNaN(average_mat) ? 0 : average_mat;
    average_ips = isNaN(average_ips) ? 0 : average_ips;
    average_ipa = isNaN(average_ipa) ? 0 : average_ipa;

    let status = false;
    if(majors == 'IPS'){
        status = (average_bing != 0 && average_mat != 0 && average_ips != 0) ? true : false;
    }else if(majors == 'IPA'){
        status = (average_bing != 0 && average_mat != 0 && average_ipa != 0) ? true : false;
    }

    // if(lane == 'Unggulan'){
        if(status) {

            let total = average_bing + average_mat;
            let majors_ips = (total + average_ips) / 3;
            let majors_ipa = (total + average_ipa) / 3;

            if(majors == 'IPS' || majors == 'IPA'){
                let val_calc = (majors == 'IPS') ? majors_ips : majors_ipa;
                $('input[name="final_average"]').val(val_calc)

                if(val_calc < 75){
                    submited_form('non_active');

                    window.scrollTo(0, 0);
                    $('.alert-content').text(`Nilai anda ${majors == 'IPS' ? majors_ips : majors_ipa} tidak memenuhi kriteria dengan minimal 75.`);
                    $('.alert').addClass('show');
                }else {
                    submited_form('active');

                }
            }else {
                window.scrollTo(0, 0);
                $('.alert-content').text(`Jurusan anda tidak dikenali.`);
                $('.alert').addClass('show');
            }
        }
    // }
};

/**
 * Disable / Enable submited form
 */

function submited_form(status){
    let button_submit = $('button[name="process"]');
    let avatar = $('input[name="avatar"]');
    let file_sm_1 = $('input[name="file_sm_1"]');
    let file_sm_2 = $('input[name="file_sm_2"]');
    let file_sm_3 = $('input[name="file_sm_3"]');
    let file_piagam = $('input[name="file_piagam"]');

    if(status == 'active'){

        button_submit.css('background-color', '#2abfaa');
        button_submit.attr('disabled', false);

        avatar.attr('disabled', false);
        file_sm_1.attr('disabled', false);
        file_sm_2.attr('disabled', false);
        file_sm_3.attr('disabled', false);
        file_piagam.attr('disabled', false);

    }else if(status == 'non_active'){

        button_submit.css('background-color', '#85cec4');
        button_submit.attr('disabled', true);

        avatar.attr('disabled', true);
        file_sm_1.attr('disabled', true);
        file_sm_2.attr('disabled', true);
        file_sm_3.attr('disabled', true);
        file_piagam.attr('disabled', true);
    }
}
