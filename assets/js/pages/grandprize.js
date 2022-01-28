var participants = [];
var flag = true;

$(function() {

    $(document).keydown(function(e) {

        if (e.keyCode == 113) {
            e.preventDefault();
            if (flag === true) {
                flag = false;
                AniDice();
                $('#email_result').text('');
                $('#email_result2').text('');
            }
        } else if (e.keyCode == 114) {
            e.preventDefault();
            if (flag === false) {

                var registration_id;
                $.ajax({
                    url: base_url + 'grandprize/get_result',
                    type: 'POST',
                    dataType: 'JSON',
                    success: function(data) {
                        stopDice();
                        registration_id = data.result_id;
                        $('#name_result').text(data.result_name.toUpperCase());
                        $('#email_result').text(data.result_nip.toUpperCase() + ' (' + data.result_unit_bisnis.toUpperCase() + ')');
                    },
                    complete: function() {
                        $.ajax({
                            url: base_url + 'grandprize/save_tr',
                            data: {
                                'gift_id': $('#gift_id').val(),
                                'registration_id': registration_id
                            },
                            type: 'POST',
                            dataType: 'JSON',
                            success: function(data) {
                                console.log(data);
                            }
                        });
                    }
                });

                var registration_id2;
                $.ajax({
                    url: base_url + 'grandprize/get_result2',
                    type: 'POST',
                    dataType: 'JSON',
                    success: function(data) {
                        stopDice();
                        registration_id2 = data.result_id;
                        $('#name_result2').text(data.result_name.toUpperCase());
                        $('#email_result2').text(data.result_nip.toUpperCase() + ' (' + data.result_unit_bisnis.toUpperCase() + ')');
                    },
                    complete: function() {
                        $.ajax({
                            url: base_url + 'grandprize/save_tr',
                            data: {
                                'gift_id': $('#gift_id').val(),
                                'registration_id': registration_id2
                            },
                            type: 'POST',
                            dataType: 'JSON',
                            success: function(data) {
                                console.log(data);
                            }
                        });
                    }
                });


                flag = true
            }
        } else if (e.keyCode == 115) {
            e.preventDefault();
            if (flag === true) {

            	$('#gift_id option:selected').prop('selected', false).next().prop('selected', true);
            	// $('#giftContainer').attr('src', base_url + 'assets/images/gift/' + $('#gift_id option:selected').data('image') );
                $('.content-wrapper').css('background-image', 'url('+base_url + 'assets/images/' + $('#gift_id option:selected').data('image')+')');

            	console.log( $('#gift_id').val() );
            }
        } else if (e.keyCode == 117) {
            e.preventDefault();
            if (flag === true) {

            	$('#gift_id option:selected').prop('selected', false).prev().prop('selected', true);
            	// $('#giftContainer').attr('src', base_url + 'assets/images/gift/' + $('#gift_id option:selected').data('image') );
                $('.content-wrapper').css('background-image', 'url('+base_url + 'assets/images/' + $('#gift_id option:selected').data('image')+')');

            	console.log( $('#gift_id').val() );
            }
        }
    });

    Pusher.logToConsole = true;

    var pusher = new Pusher('57b1c37d7c00671cbe6f', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('channel1');
    channel.bind('event', function(data) {

        if (data.message == 'change_gift') {
            $('#gift_id').val(data.gift[0].gift_id);
            // $('#giftContainer').attr('src', base_url + 'assets/images/gift/' + data.gift[0].gift_file);
            $('.content-wrapper').css('background-image', 'url('+base_url + 'assets/images/' + data.gift[0].gift_file +')');
        }

        if (data.message == 'start') {
            AniDice();
            $('#email_result').text('');
            $('#email_result2').text('');
        }

        if (data.message == 'stop') {

            var registration_id;
            $.ajax({
                url: base_url + 'grandprize/get_result',
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    stopDice();
                    registration_id = data.result_id;
                    $('#name_result').text(data.result_name.toUpperCase());
                    $('#email_result').text(data.result_nip.toUpperCase() + ' (' + data.result_unit_bisnis.toUpperCase() + ')');
                },
                complete: function() {
                    $.ajax({
                        url: base_url + 'grandprize/save_tr',
                        data: {
                            'gift_id': $('#gift_id').val(),
                            'registration_id': registration_id
                        },
                        type: 'POST',
                        dataType: 'JSON',
                        success: function(data) {
                            console.log(data);
                        }
                    });
                }
            });

            var registration_id2;
            $.ajax({
                url: base_url + 'grandprize/get_result2',
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    stopDice();
                    registration_id2 = data.result_id;
                    $('#name_result2').text(data.result_name.toUpperCase());
                    $('#email_result2').text(data.result_nip.toUpperCase() + ' (' + data.result_unit_bisnis.toUpperCase() + ')');
                },
                complete: function() {
                    $.ajax({
                        url: base_url + 'grandprize/save_tr',
                        data: {
                            'gift_id': $('#gift_id').val(),
                            'registration_id': registration_id2
                        },
                        type: 'POST',
                        dataType: 'JSON',
                        success: function(data) {
                            console.log(data);
                        }
                    });
                }
            });

        }

        if (data.message == 'selected_result') {
            var registration_id;
            stopDice();
            registration_id = data.data.result_id;
            $('#name_result').text(data.data.result_name.toUpperCase());
            $('#email_result').text(data.data.result_nip.toUpperCase() + ' ' + data.result_unit_bisnis.toUpperCase());
            $.ajax({
                url: base_url + 'grandprize/save_tr',
                data: {
                    'gift_id': $('#gift_id').val(),
                    'registration_id': registration_id
                },
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                }
            });
        }

    });

    $.ajax({
        url: base_url + 'grandprize/get_participant',
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {
            participants = data;
        }
    });

    function AniDice() {
        MyVar = setInterval(rolldice, 20)
        MyVar2 = setInterval(rolldice2, 20)
    }

    function rolldice() {
        var ranNum = Math.floor(Math.random() * participants.length);
        $('#name_result').text(participants[ranNum].participant_name.toUpperCase());
    }

    function rolldice2() {
        var ranNum = Math.floor(Math.random() * participants.length);
        $('#name_result2').text(participants[ranNum].participant_name.toUpperCase());
    }

    function stopDice() {
        clearInterval(MyVar);
        clearInterval(MyVar2);
    }

});