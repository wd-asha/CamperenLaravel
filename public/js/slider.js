$(function() {
    $("#slide2").fadeOut(100);
    $("#slide3").fadeOut(100);

    function shiftText() {
        setTimeout(function () {
            $(".slide__above-title").show(600).removeClass('hide');
        }, 800);
        setTimeout(function () {
            $(".slide__above-title").removeClass('pos');
        }, 900);

        setTimeout(function () {
            $(".slide__title").show(600).removeClass('hide');
        }, 900);
        setTimeout(function () {
            $(".slide__title").removeClass('pos');
        }, 1000);

        setTimeout(function () {
            $(".slide__link").show(600).removeClass('hide');
        }, 1000);
        setTimeout(function () {
            $(".slide__link").removeClass('pos');
        }, 1100);
    }

    shiftText();

    function unShiftText() {
        $(".slide__above-title").addClass('hide').addClass('pos');
        $(".slide__title").addClass('hide').addClass('pos');
        $(".slide__link").addClass('hide').addClass('pos');
    }

    $("#arrRight1").on("click", function() {
        $("#slide1").fadeOut(100);
        $("#slide3").fadeOut(100);
        $("#slide2").fadeIn(1500);
        $("#arrRight1").addClass('hide');
        $("#arrLeft1").addClass('hide');
        $("#arrRight2").removeClass('hide');
        $("#arrLeft2").removeClass('hide');
        unShiftText();
        shiftText();
    });
    $("#arrRight2").on("click", function() {
        $("#slide1").fadeOut(100);
        $("#slide2").fadeOut(100);
        $("#slide3").fadeIn(1500);
        $("#arrRight2").addClass('hide');
        $("#arrLeft2").addClass('hide');
        $("#arrRight3").removeClass('hide');
        $("#arrLeft3").removeClass('hide');
        unShiftText();
        shiftText();
    });
    $("#arrRight3").on("click", function() {
        $("#slide2").fadeOut(100);
        $("#slide3").fadeOut(100);
        $("#slide1").fadeIn(1500);
        $("#arrRight3").addClass('hide');
        $("#arrLeft3").addClass('hide');
        $("#arrRight1").removeClass('hide');
        $("#arrLeft1").removeClass('hide');
        unShiftText();
        shiftText();
    });
    $("#arrLeft1").on("click", function() {
        $("#slide1").fadeOut(100);
        $("#slide2").fadeOut(100);
        $("#slide3").fadeIn(1500);
        $("#arrRight1").addClass('hide');
        $("#arrLeft1").addClass('hide');
        $("#arrRight3").removeClass('hide');
        $("#arrLeft3").removeClass('hide');
        unShiftText();
        shiftText();
    });
    $("#arrLeft2").on("click", function() {
        $("#slide3").fadeOut(100);
        $("#slide2").fadeOut(100);
        $("#slide1").fadeIn(1500);
        $("#arrRight2").addClass('hide');
        $("#arrLeft2").addClass('hide');
        $("#arrRight1").removeClass('hide');
        $("#arrLeft1").removeClass('hide');
        unShiftText();
        shiftText();
    });
    $("#arrLeft3").on("click", function() {
        $("#slide1").fadeOut(100);
        $("#slide3").fadeOut(100);
        $("#slide2").fadeIn(1500);
        $("#arrRight3").addClass('hide');
        $("#arrLeft3").addClass('hide');
        $("#arrRight2").removeClass('hide');
        $("#arrLeft2").removeClass('hide');
        unShiftText();
        shiftText();
    });
});
