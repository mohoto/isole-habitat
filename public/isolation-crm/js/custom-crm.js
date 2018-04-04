(function($) {
    $(document).ready(function(){
        /*input nombre telephone*/
        var $inputPhone = $('.telephone_input');
        $inputPhone.on("keyup", function(event){
            // When user select text in the document, also abort.
            var selection = window.getSelection().toString();
            if ( selection !== '' ) {
                return;
            }

            // When the arrow keys are pressed, abort.
            if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                return;
            }
            var $this = $(this);
            var input = $this.val();
            input = input.replace(/[\W\s\._\-]+/g, '');
            var split = 2;
            var chunk = [];
            for (var i = 0, len = input.length; i < len; i += split) {
                chunk.push( input.substr( i, split ) );
            }


            $this.val(function() {
                return chunk.join(" ").toUpperCase();
            });
        });
        /*************************************************/
        /*************************************************/
        /***************Clock Picker***********************/

        /*******Modal animation***************/
        $('.confirmCancelModal').on('show.bs.modal', function (e) {
            $('.modal .modal-dialog').attr('class', 'modal-dialog zoomIn animated');
        });
        $('.confirmCancelModal').on('hidden.bs.modal', function (e) {
            $('.modal .modal-dialog').attr('class','modal-dialog zoomOut animated');
        });
        /************************************/


    });
})(jQuery);