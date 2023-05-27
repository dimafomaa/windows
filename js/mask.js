 type="text/javascript">
    // mask

    $("input[name='name']").on("keypress", function (e) {
        return (/[A-Za-zА-Яа-яЁё\s]/.test(String.fromCharCode(e.charCode)));
    });

    Inputmask.extendDefinitions({
      '~': {
                validator: "[1245679]"
            }

    });

    $("input[name='phone']").inputmask({
            mask: "+38 (999) 999-99-99",
            greedy: false,
            clearIncomplete: true,
            placeholder: "_",
            rightAlign: false,
            showMaskOnHover: false,
            showMaskOnFocus: true
        });
    $("input[name='phone']").on("keydown", function (e) {

            if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
                e.preventDefault();
                return false;
            }

        });